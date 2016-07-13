<?php
	
$cName = array(
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

print ("<title>");
	
if ($category == 'root' || $category == 'content') {
	print($page_name);
}

elseif (in_array($category, array('compliance', 'fixed', 'mathml', 'meta', 'nav', 'overlays', 'script', 'semantics', 'style', 'svg', 'tts', 'xhtml'))) {

	if ($page_name == '') {
		if (preg_match('/readingsystem/', $_SERVER['PHP_SELF'])) {
			print("Accessible Markup Checklist");
		}
		else {
			print("Accessible Reading System Checklist");
		}
	}
	
	else {
		print($page_name);
	}
	
	print(" | $cName[$category]");

}

print(" | EPUB 3 Accessibility Guidelines</title>\n");

?>
