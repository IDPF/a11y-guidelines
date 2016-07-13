use strict;
use warnings;
use Cwd;
use File::Find;
use File::Path qw/remove_tree/;
use POSIX qw{strftime};
use XML::LibXSLT;

print "WARNING! This program obliterates all PHP files and replaces them with static HTML.\nYou must type Y to continue: ";
my $char = lc(<STDIN>);

chomp($char);

unless ($char eq 'y') {
	print "\nGet outta here!\n";
	exit;
}

# files to process have to be in a child /EPUB directory relative to this script
my $dir = getcwd . '/EPUB';

# grab the google script for pages that use
my $google = read_file($dir . '/includes/js.php');

my %cName = (
	'compliance' => 'Compliance', 
	'fixed' => 'Fixed Layout', 
	'mathml' => 'MathML', 
	'meta' => 'Metadata', 
	'nav' => 'Navigation', 
	'overlays' => 'Media Overlays', 
	'script' => 'Scripted Interactivity', 
	'semantics' => 'Semantics', 
	'style' => 'EPUB Style Sheets', 
	'svg' => 'SVG', 
	'tts' => 'Text-to-Speech', 
	'xhtml' => 'XHTML Content Documents'
);

# convert all the PHP files to static HTML
find({ wanted => \&process, follow => 0 }, $dir);

# delete the PHP include directories
remove_tree($dir.'/checkpoints', { verbose => 0 });
remove_tree($dir.'/includes', { verbose => 0 });

# delete the rev build scripts
remove_tree($dir.'/rev', { verbose => 0 });

# delete the old books
remove_tree($dir.'/book', { verbose => 0 });

# delete the spine standalone file
unlink($dir.'/spine.xml');



sub read_file {
	my $file_name = shift;
	local $/ = undef;
	open(my $file, '<', $file_name) or die "Could not open file <$file_name>: $!\n";
	my $contents = <$file>;
	close($file);
	return $contents;
}

sub write_file {
	my ($path, $contents) = @_;
	open(my $file, '>', $path) or die "Could not open file $path: $!\n";
	binmode $file;
	print $file $contents;
	close($file);
}




sub process {
	my $file = $File::Find::name;
	
	# wipe out any htaccess files
	if ($file =~ /\.htaccess/i) {
		unlink $file;
		return;
	}
	
	# ignore non-php files
	elsif ($file !~ /\.php$/i) {
		return;
	}
	
	#elsif ($file =~ m#/checkpoints/#i) {
	#	# skip the checkpoint dirs otherwise the php files may be .html when including
	#	return;
	#}
	
	elsif ($file =~ m#/includes/#i) {
		# skip the include dir otherwise the php files may be .html when including
		return;
	}
	
	elsif ($file =~ m#/rev/#i) {
		# skip the revision history generator files
		return;
	}
	
	else {
		fixPHP($file);
	}
}



sub fixPHP {

	my $php = shift;
	
	print "Processing: $php\n";
	
	# new html file name
	(my $htm = $php) =~ s/\.php$/.xhtml/i;
	
	# read the current contents
	my $contents = read_file($php);
	
	my $title = '';
	my $category = '';
	my $id = '';
	my $nav = 0;
	my %nav_items;
	my @nav_order;

	
	# get the page title from the PHP page_name var
	if ($contents =~ /\$page_name ?= ?'([^']+)'/is) {
		$title = $1;
	}
	
	else {
		if ($htm =~ /nav\.xhtml/i) {
			# get the id the PHP page_name var
			if ($contents =~ /\$category ?= ?'([^']+)'/is) {
				$category = $1;
			}
			$title = $cName{$category};
		}
		
		else {
			print "ERROR: No title found for file <$php>\n";
		}
	}
	
	if ($contents =~ /\$id ?= ?'([^']+)'/is) {
		$id = $1;
	}
	
	if ($contents =~ /\$nav ?= ?([0-9])/is) {
		$nav = $1;
	}
	
	if ($contents =~ /\$nav_items ?= ?array\( *([^)]+)\)/is) {
	
		my @items = split(/, ?/, $1);
		
		if ($nav == 2) {
			foreach my $hash_pair (@items) {
				my ($item, $label);
				if ($hash_pair =~ /'([^']+)' ?=> ?'([^']+)'/) {
					$item = $1;
					$label = $2;
				}
				else {
					print "HASH ERROR: $hash_pair\n";
				}
				$nav_items{$item} = $label;
				push @nav_order, $item;
			}
		}
		
		else {
			foreach my $item (@items) {
				$item =~ tr/', //d;
				next unless $item;
				$nav_items{$item} = 1;
				push @nav_order, $item;
			}
		}
	}
	
	
	# switch back in the xml declaration
	$contents =~ s#<\?php include_once\('[./]*includes/xml-declaration.php'\);? *\?>#<?xml version="1.0" encoding="utf-8"?>#is;
	
	# add ie html5 shiv and html charset
	my $shiv = read_file($dir.'/includes/html5-shiv.php');
	$contents =~ s#<\?php include_once\('[./]*includes/html5-shiv.php'\);? *\?>#$shiv\n<meta charset="utf-8"/>#is;
	
	# add the page header
	my $header = create_header($title, $category);
	$contents =~ s#<\?php include_once\('[./]*includes/header.php'\);? *\?>#$header#is;
	
	# add back the title
	$contents =~ s#<\?php include_once\('[./]*includes/title.php'\);? *\?>#<title>$title<\/title>#is;
	
	# add back the primary heading
	my $page_title = create_title($title, $category, $id, $nav, \%nav_items, \@nav_order);
	$contents =~ s#<\?php include_once\('[./]*includes/page-title.php'\);? *\?>#$page_title#is;
	
	# include all the checkpoints
	#while ($contents =~ m#(<\?php include_once\('[./]*(checkpoints[^']+\.php)'\);? *\?>)#gis) {
	#
	#	my $phpBlock = $1;
	#	my $incPath = $2;
	#	
	#	my $incFile = $dir . '/' . $incPath;
	#	
	#	my $inc = read_file($incFile);
	#	
	#	$contents =~ s/\Q$phpBlock\E/$inc/gis;
	#
	#}
	
	my $revHistory = ($id eq 'rev') ? generate_rev('rev') : generate_rev($id);
	$contents =~ s#<\?php include_once\('[./]*rev/history.php'\);? *\?>#$revHistory#is;
	
	# add the google code highlighting js if prettyprint has been set anywhere
	if ($contents =~ /prettyprint/is) {
		$contents =~ s#<\?php include_once\('[./]*includes/js.php'\);? *\?>#$google#is;
	}
	
	# add the page footer
	my $footer = read_file($dir.'/includes/footer.php');
	$contents =~ s#<\?php include_once\('[./]*includes/footer.php'\);? *\?>#$footer#is;
	
	# blow away all other PHP blocks
	$contents =~ s/<\?php(.*?)\?>//gis;
	
	# fix all references to local php files -- need to revisit this when i'm less lazy
	$contents =~ s/\.php"/.xhtml"/gis;
	
	# blow away all empty links -- this is only needed while building new unfinished pages
	$contents =~ s#<a href="">...</a>##gis;
	
	# write the HTML file
	write_file($htm, $contents);
	
	# delete the PHP file
	unlink $php;

}



sub generate_rev {

	my $id = shift;
	
	my $revXML = $dir . '/rev/history.xml';
	my $revXSL = $dir . '/rev/revToHTML.xsl';
	my $titles = $dir . '/spine.xml';
	
	my $xslt = XML::LibXSLT->new();
	
	my $source = XML::LibXML->load_xml(location => $revXML);
	my $style_doc = XML::LibXML->load_xml(location=>$revXSL, no_cdata=>1);
	
	my $stylesheet = $xslt->parse_stylesheet($style_doc);
	my $result = $stylesheet->transform($source, XML::LibXSLT::xpath_to_string(id => $id, xmlPath => $titles));
	
	return $stylesheet->output_as_chars($result);

}


sub create_header {

	my ($page_name, $category) = @_;
	
	my $header = <<HEADER;
<header>
			<div class="left">
				<img src="http://www.idpf.org/sites/idpf.org/files/epub-logo-2.gif" alt="EPUB Logo" border="0" class="logo"/>
			</div>
			
			<h1><a href="http://www.idpf.org/accessibility/guidelines/">EPUB 3 Accessibility Guidelines</a></h1>
			
			<nav class="breadcrumb">
HEADER

	if ($category eq 'root') {
		$header .= "<p>Main / $page_name </p>";
	}
	
	elsif ($category eq 'content') {
		$header .= "<p>Main / $page_name</p>";
	}
	
	elsif ($category eq 'compliance') {
		$header .= "<p>Main / $page_name</p>";
	}
	
	elsif ($cName{$category}) {
		if ($page_name eq '') {
			$header .= "<p>Main / $cName{$category}</p>";
		}
		
		else {
			$header .= "<p>Main / $cName{$category} / $page_name</p>";
		}
	}
	
	$header .= <<END;
      </nav>
   </header>
END
	
	return $header;

}





sub create_title {
	
	my ($page_name, $category, $id, $nav, $nav_items, $nav_order) = @_;
	my $title = '';
	
	if ($page_name eq '') {
		$title .= "<h2>$cName{$category}</h2>";
	}
	
	else {
		$title .= "<h2>$page_name</h2>";
	}
	
	if ($nav > 0) {
	
		$title .= <<NAV;
		<nav class="mini-toc">
			<h3>In this section:</h3>
			<ol>
NAV
			
		if ($nav == 1) {
		
			if ($nav_items->{'ex'}) {
				$title .= "\n					<li><a href=\"#$id-ex\">Example</a></li>";
			}
			
			if ($nav_items->{'exes'}) {
				$title .= "\n					<li><a href=\"#$id-ex\">Examples</a></li>";
			}
			
			if ($nav_items->{'samp'}) {
				$title .= "\n					<li><a href=\"#$id-samp\">Samples</a></li>";
			}
			
			if ($nav_items->{'access'}) {
				$title .= "\n					<li><a href=\"#$id-access\">Accessibility Checkpoints</a></li>";
			}
			
			if ($nav_items->{'reqs'}) {
				$title .= "\n					<li><a href=\"#$id-reqs\">Compliance References</a></li>";
			}
			
			if ($nav_items->{'res'}) {
				$title .= "\n					<li><a href=\"#$id-res\">Resources</a></li>";
			}
			
			if ($nav_items->{'faq'}) {
				$title .= "\n					<li><a href=\"#$id-faq\">FAQ</a></li>";
			}
			
			if ($nav_items->{'rev'}) {
				$title .= "\n					<li><a href=\"#$id-rev\">Revision History</a></li>";
			}
		
		}
		
		elsif ($nav == 2) {
		
			foreach my $key (@{$nav_order}) {
				$title .= "\n					<li><a href=\"#$id-$key\">$nav_items->{$key}</a></li>";
			}
		
		}
		
		$title .= <<NAV;
		</ol>
	</nav>
NAV
	
	}
	
	return $title;

}
