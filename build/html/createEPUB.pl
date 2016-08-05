use strict;
use warnings;
use Cwd;
use File::Find;
use File::Path qw/remove_tree/;
use POSIX qw{strftime};
use XML::LibXSLT;

# files to process have to be in a child /EPUB directory relative to this script
my $dir = getcwd . '/EPUB';

# strip site wrapper from HTML
find({ wanted => \&process, follow => 0 }, $dir);

# delete the old books
remove_tree($dir.'/book', { verbose => 0 });


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
	
	# update the timestamp in the opf file
	if ($file =~ /package\.opf/i) {
		updatePackage($file);
	}
	
	# process html files
	elsif ($file =~ /\.html$/i) {
		fixHTML($file);
	}
	
	else {
		# ignore all other files
		return;
	}
}



sub fixHTML {

	my $html = shift;
	
	print "Processing: $html\n";
	
	# read the current contents
	my $contents = read_file($html);
	
	if ($html !~ /index\.html/i) { 
    	# blow away the site header
	    $contents =~ s#<header>.*?</header>##is;
	}

	# blow away the site footer
	$contents =~ s#<footer>.*?</footer>##is;
	
	# write the HTML file
	write_file($html, $contents);

}


sub updatePackage {

	my $opf = shift;
	my $opfContent = read_file($opf);
	
	# update the timestamp
	my $time = strftime("%Y-%m-%dT%H:%M:%S", gmtime) . 'Z';
	$opfContent =~ s#(<meta property="dcterms:modified">)[^<]+(</meta>)#$1$time$2#is;
	
	# rewrite
	write_file($opf, $opfContent);

}
