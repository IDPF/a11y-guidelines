<?php include_once('../../includes/xml-declaration.php'); ?>
<?php $id='svg030'; $nav=1; $nav_items=array('ex','reqs','res'); $category='svg'; $page_name='Styling'; ?>
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
		
		<section id="svg030" class="section">
			<?php include_once('../../includes/page-title.php'); ?>
			
			<section id="svg030-desc" class="usage">
				<p>Whenever possible, define style properties for graphical components in a separate style sheet. Cleanly
					separating styling allows readers to apply their own custom styles if they have difficulty with the 
					default appearance.</p>
				
				<p>Avoid adding the <code>style</code> attribute directly to graphical components, as it can interfere
					with the ability of a reader to change the appearance.</p>
				
				<p>Whenever embedding text, ensure there is a strong contrast between the prose and any background 
					images so that the two don't blend together.</p>
				
				<p>See the EPUB Style Sheets section of this guide for additional considerations.</p>
			</section>
			
			<section id="svg030-ex" class="example">
				<h3>Examples</h3>
				<p>The W3C Accessibility Features of SVG Note includes the following reference examples:</p>
				<ul>
					<li><a href="http://www.w3.org/TR/SVG-access/#Fig-4.11">Defining some style values</a></li>
					<li><a href="http://www.w3.org/TR/SVG-access/#Fig-4.12">An alternative stylesheet for the computer image</a></li>
				</ul>
			</section>
			
			<section id="svg030-reqs" class="reqs">
				<h3>Compliance References and Standards</h3>
				
				<ul>
					<li>SVG 1.1 &#8212; <a href="http://www.w3.org/TR/SVG/styling.html">Styling</a></li>
					<li>SVG 1.1 &#8212; <a href="http://www.w3.org/TR/SVG/access.html#SVGAccessibilityGuidelines">SVG Content Accessibility Guidelines</a></li>
					<li>SVG A11y Note &#8212; <a href="http://www.w3.org/TR/SVG-access/#SVGStyle">Defining Style Values with SVG Elements</a></li>
				</ul>
			</section>
			
			<section id="svg030-res" class="res">
				<h3>Additional Resources</h3>
				<ul>
					<li>Mozilla Developer's Network &#8212; <a href="https://developer.mozilla.org/en/SVG">SVG</a></li>
				</ul>
			</section>
		</section>
		
		<?php include_once('../../includes/footer.php'); ?>
	</body>
</html>