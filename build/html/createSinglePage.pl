use strict;
use warnings;
use Cwd;
use File::Find;

# files to process have to be in a child /EPUB directory relative to this script
my $dir = getcwd . '/EPUB';
my $o = getcwd . '/source.html';

if (-f $o) {
	unlink $o;
}

find({ wanted => \&process, follow => 0 }, $dir);




sub process {
	
	my $file = $File::Find::name;
	
	# ignore non-html files
	if ($file !~ /\.html$/i) {
		return;
	}
	
	else {
		appendFile($file);
	}
}



sub appendFile {

	my $html = shift;
	
	print "Processing: $html\n";
	
	# read the current contents
	my $contents = get_file($html);
	
	my $body;
	
	if ($contents =~ m#<body[^>]*>(.*)</body>#is) {
		$body = $1;
	}
	
	else {
		print "ERROR: No body found in file <$html>\n";
		return;
	}
	
	# append to the HTML file
	{
		open(my $file, '>>', $o) or die "Could not open output file: $!\n";
		binmode $file;
		print $file $body;
		close($file);
	}

}




sub get_file {
	my $file_name = shift;
	local $/ = undef;
	open(my $file, '<', $file_name) or die "Could not open file <$file_name>: $!\n";
	my $contents = <$file>;
	close($file);
	return $contents;
}
