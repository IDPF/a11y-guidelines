<?php
	
print ("<header>\n");

print <<<HEADER
			
			<div class="left">
				<img src="http://www.idpf.org/sites/idpf.org/files/epub-logo-2.gif" alt="EPUB Logo" border="0" class="logo"/>
			</div>
			
			<h1><a href="http://www.idpf.org/accessibility/guidelines/">EPUB 3 Accessibility Guidelines</a></h1>
			
			<nav class="breadcrumb">
				 
HEADER;

if ($category == 'root') {
	print("<p>Main / $page_name </p>");
}

elseif ($category == 'content') {
	print("<p>Main / $page_name</p>");
}

elseif ($category == 'compliance') {
	print("<p>Main / $page_name</p>");
}

elseif (in_array($category, array('fixed', 'mathml', 'meta', 'nav', 'overlays', 'script', 'semantics', 'style', 'svg', 'tts', 'xhtml', 'compliance'))) {

	if ($page_name == '') {
		print("<p>Main / $cName[$category]</p>");
	}
	
	else {
		print("<p>Main / $cName[$category] / $page_name</p>");
	}
}


print '</nav>';

	
$pageNav = '<nav class="pageNav">&#160;';

$spineXML = '/srv/bindings/652ef58e6a3e423f8814f5baee9e8d7a/files/accessibility/guidelines/spine.xml';

$doc = new DOMDocument;
$doc->load($spineXML);
$xpathDoc = new DOMXPath($doc);

$prev = $xpathDoc->query("/spine/itemref[@idref='" . $id . "']/preceding-sibling::itemref[not(.='')][1]");

foreach ($prev as $prev) {
	$pageNav .= '<div class="prev"><a href="/accessibility/guidelines/content/' . $prev->getAttribute('href') . '">' . $prev->nodeValue . '</a></div>';
}

$next = $xpathDoc->query("/spine/itemref[@idref='" . $id . "']/following-sibling::itemref[not(.='')][1]");

foreach ($next as $next) {
	$pageNav .= '<div class="next"><a href="/accessibility/guidelines/content/' . $next->getAttribute('href') . '">' . $next->nodeValue . '</a></div>';
}
	
$pageNav .=	'</nav>';

print $pageNav;
print '</header>';

?>
