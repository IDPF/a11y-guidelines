use strict;
use warnings;
use Cwd;
use File::Find;
use File::Path qw/remove_tree/;
use POSIX qw{strftime};
use XML::LibXSLT;

print "WARNING! This program obliterates all PHP files to create an EPUB publication.\nYou must type Y to continue: ";
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
	
	# update the timestamp in the opf file
	elsif ($file =~ /package\.opf/i) {
		updatePackage($file);
	}
	
	# ignore non-php files
	elsif ($file !~ /\.php$/i) {
		return;
	}
	
	# remove the dynamic checklist generator
	elsif ($file =~ /-generator/i) {
		unlink($file);
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



sub updatePackage {

	my $opf = shift;
	my $opfContent = read_file($opf);
	
	# update the timestamp
	my $time = strftime("%Y-%m-%dT%H:%M:%S", gmtime) . 'Z';
	$opfContent =~ s#(<meta property="dcterms:modified">)[^<]+(</meta>)#$1$time$2#is;
	
	# convert the site spine
	my $spine = read_file($dir.'/spine.xml'); 
	$spine =~ s# href="[^"]+"##gis;
	$spine =~ s#>[-a-z0-9()\\:;'"?/.,!@\#$%^&*_ ]+</itemref>#/>#gis;
	
	$opfContent =~ s#<spine */>#$spine#s;
	
	# rewrite
	write_file($opf, $opfContent);

}




sub fixPHP {

	my $php = shift;
	
	print "Processing: $php\n";
	
	# new html file name
	(my $htm = $php) =~ s/\.php$/.xhtml/i;
	
	# read the current contents
	my $contents = read_file($php);
	
	my $title = '';
	
	# get the page title from the PHP page_name var
	if ($contents =~ /\$page_name ?= ?'([^']+)'/is) {
		$title = $1;
	}
	
	else {
		if ($htm =~ /nav\.xhtml/i) {
			# get the id the PHP page_name var
			my $name;
			if ($contents =~ /\$category ?= ?'([^']+)'/is) {
				$name = $1;
			}
			$title = $cName{$name};
		}
		
		else {
			print "ERROR: No title found for file <$php>\n";
		}
	}
	
	
	# switch back in the xml declaration
	$contents =~ s#<\?php include_once\('[./]*includes/xml-declaration.php'\);? *\?>#<?xml version="1.0" encoding="utf-8"?>#is;
	
	# add back the title
	$contents =~ s#<\?php include_once\('[./]*includes/title.php'\);? *\?>#<title>$title<\/title>#is;
	
	# add back the primary heading
	$contents =~ s#<\?php include_once\('[./]*includes/page-title.php'\);? *\?>#<h2>$title<\/h2>#is;
	
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
	
	# add the revision history
	my $id = '';
	
	if ($contents =~ /\$id ?= ?'([^']+)'/is) {
		$id = $1;
	}
	
	my $revHistory = ($id eq 'rev') ? generate_rev('rev') : generate_rev($id);
	$contents =~ s#<\?php include_once\('[./]*rev/history.php'\);? *\?>#$revHistory#is;
	
	# add the google code highlighting js if prettyprint has been set anywhere
	if ($contents =~ /prettyprint/is) {
		$contents =~ s#<\?php include_once\('[./]*includes/js.php'\);? *\?>#$google#is;
	}
	
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
