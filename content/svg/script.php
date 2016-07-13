<?php include_once('../../includes/xml-declaration.php'); ?>
<?php $id='svg035'; $nav=1; $nav_items=array('ex','reqs','res'); $category='svg'; $page_name='Interactivity'; ?>
<!DOCTYPE html>
<html xml:lang="en" lang="en"
	xmlns="http://www.w3.org/1999/xhtml"
	xmlns:epub="http://www.idpf.org/2007/ops">
	
	<head>
		<?php include_once('../../includes/title.php'); ?>
		<?php include_once('../../includes/html5-shiv.php'); ?>
		<link type="text/css" rel="stylesheet" href="../../css/epub3.css"/>
		<?php include_once('../../includes/js.php'); ?> 
	</head>
	
	<body>
		<?php include_once('../../includes/header.php'); ?>
		
		<section id="svg035" class="section">
			<?php include_once('../../includes/page-title.php'); ?>
			
			<section id="svg035-desc" class="usage">
				<p>When scripting SVG images in EPUB 3, you must adhere to the principle of <a href="../script/pe.php">progressive enhancement</a>.
					Scripting is unlikely to be available on all reading systems, as it is an optional
					feature of EPUB 3. Design SVG images such that any scripting only enhances the content.</p>
				
				<p>The <code>aria-*</code> attributes can be attached to SVG elements. Properly setting
					and maintaining roles, properties and states increases the ability of all readers to interact
					with dynamic content (e.g., SVG images used as custom controls).</p>
				
				<p>Similarly, ensure that text equivalents for graphical components are updated to reflect the current
					state of the component.</p>
				
				<p>When scripting SVG images, ensure that device-independent events have been used. Not all readers
					will interact with your images in the same way.</p>
			</section>
			
			<section id="svg035-ex" class="example">
				<h3>Example</h3>
				<p><a href="http://tavmjong.free.fr/INKSCAPE/MANUAL/html/Button.html">An SVG Button&#8212;SVG and the Web</a> shows
					how ARIA roles and states can be used to create an accessible button.</p>
			</section>
			
			<section id="svg035-reqs" class="reqs">
				<h3>Compliance References and Standards</h3>
				
				<ul>
					<li>SVG 1.1 &#8212; <a href="http://www.w3.org/TR/SVG/script.html">Scripting</a></li>
					<li>SVG 1.1 &#8212; <a href="http://www.w3.org/TR/SVG/access.html#SVGAccessibilityGuidelines">SVG Content Accessibility Guidelines</a></li>
					<li>SVG A11y Note &#8212; <a href="http://www.w3.org/TR/SVG-access/#events">Device-independent Events</a></li>
					<li>WCAG 2.0 &#8212; <a href="http://www.w3.org/TR/WCAG20-TECHS/G15.html">G15: Using a tool to ensure that content does not violate the general flash threshold or red flash threshold</a></li>
					<li>WCAG 2.0 &#8212; <a href="http://www.w3.org/TR/WCAG20-TECHS/G19.html">G19: Ensuring that no component of the content flashes more than three times in any 1-second period</a></li>
				</ul>
			</section>
			
			<section id="svg035-res" class="res">
				<h3>Additional Resources</h3>
				<ul>
					<li><a href="http://www.w3.org/TR/wai-aria/">Accessible Rich Internet Applications (WAI-ARIA) 1.0</a></li>
					<li>Mozilla Developer's Network &#8212; <a href="https://developer.mozilla.org/en/SVG">SVG</a></li>
					<li>Mozilla Developer's Network &#8212; <a href="https://developer.mozilla.org/en/ARIA">ARIA</a></li>
				</ul>
			</section>
		</section>
		
		<?php include_once('../../includes/footer.php'); ?>
	</body>
</html>