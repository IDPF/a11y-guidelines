<?php 

if ($page_name == '') {
	print ("<h2>$cName[$category]</h2>");
}

else {
	print ("<h2>$page_name</h2>");
}


if ($nav > 0) {

	print <<<NAV
		<nav class="mini-toc">
			<h3>In this section:</h3>
			<ol>
NAV;
		
	if ($nav == 1) {
	
		if (in_array('ex', $nav_items)) {
			print("\n					<li><a href=\"#$id-ex\">Example</a></li>");
		}
		
		if (in_array('exes', $nav_items)) {
			print("\n					<li><a href=\"#$id-ex\">Examples</a></li>");
		}
		
		if (in_array('samp', $nav_items)) {
			print("\n					<li><a href=\"#$id-samp\">Samples</a></li>");
		}
		
		if (in_array('access', $nav_items)) {
			print("\n					<li><a href=\"#$id-access\">Accessibility Checkpoints</a></li>");
		}
		
		if (in_array('reqs', $nav_items)) {
			print("\n					<li><a href=\"#$id-reqs\">Compliance References</a></li>");
		}
		
		if (in_array('res', $nav_items)) {
			print("\n					<li><a href=\"#$id-res\">Resources</a></li>");
		}
		
		if (in_array('faq', $nav_items)) {
			print("\n					<li><a href=\"#$id-faq\">FAQ</a></li>");
		}
		
		if (in_array('rev', $nav_items)) {
			print("\n					<li><a href=\"#$id-rev\">Revision History</a></li>");
		}
	
	}
	
	else if ($nav == 2) {
	
		foreach ($nav_items as $section => $title) {
			print("\n					<li><a href=\"#$id-$section\">$title</a></li>");
		}
	
	}
	
	print <<<NAV
					
		</ol>
	</nav>
NAV;

}

?>
