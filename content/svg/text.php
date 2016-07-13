<?php include_once('../../includes/xml-declaration.php'); ?>
<?php $id='svg020'; $nav=1; $nav_items=array('ex','reqs','res'); $category='svg'; $page_name='Text Content'; ?>
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
		
		<section id="svg020" class="section">
			<?php include_once('../../includes/page-title.php'); ?>
			
			<section id="svg020-desc" class="usage">
				<p>When including text content in images, use <code>text</code> elements so that the prose is available
					to assistive technologies. When distorting and changing the appearance of text, using <code>text</code>
					elements ensures the prose can be made available to anyone who cannot decipher the alterations.</p>
				
				<p>The SVG <code>font</code> element can also be used to create custom fonts to avoid drawing
					text into the image.</p>
				
				<p>If the <code>title</code> of a component is also used as text within the component, the <code>tref</code>
					element can be used to reference the prose instead of creating a new <code>text</code> node.</p>
			</section>
			
			<section id="svg020-ex" class="example">
				<h3>Examples</h3>
				<p>The W3C Accessibility Features of SVG includes the following reference examples:</p>
				<ul>
					<li><a href="http://www.w3.org/TR/SVG-access/#Fig-3.3">Reusing the title as text in the Hub image</a></li>
					<li><a href="http://www.w3.org/TR/SVG-access/#Fig-4.8">Using text and fonts to form an image of W3C logo</a></li>
					<li><a href="http://www.w3.org/TR/SVG-access/#Fig-4.10">Defining a special font for the W3C logo</a></li>
				</ul>
				
				<p>The source of the <a href="http://www.bifter.co.uk/">The Bifter</a> comics can also be reviewed for
					examples of accessible text.</p>
			</section>
			
			<section id="svg020-reqs" class="reqs">
				<h3>Compliance References and Standards</h3>
				
				<ul>
					<li>SVG 1.1 &#8212; <a href="http://www.w3.org/TR/SVG/text.html">Text</a></li>
					<li>SVG 1.1 &#8212; <a href="http://www.w3.org/TR/SVG/fonts.html">Fonts</a></li>
					<li>SVG 1.1 &#8212; <a href="http://www.w3.org/TR/SVG/access.html#SVGAccessibilityGuidelines">SVG Content Accessibility Guidelines</a></li>
					<li>SVG A11y Note &#8212; <a href="http://www.w3.org/TR/SVG-access/#ReUsingText">Reusing Alternative Text as Graphics</a></li>
					<li>SVG A11y Note &#8212; <a href="http://www.w3.org/TR/SVG-access/#Fonts">Presentation of Text - Fonts</a></li>
					<li>SVG A11y Note &#8212; <a href="http://www.w3.org/TR/SVG-access/#Fonts2">Presentation of Text - Creating Fonts</a></li>
				</ul>
			</section>
			
			<section id="svg020-res" class="res">
				<h3>Additional Resources</h3>
				<ul>
					<li>Mozilla Developer's Network &#8212; <a href="https://developer.mozilla.org/en/SVG">SVG</a></li>
				</ul>
			</section>
		</section>
		
		<?php include_once('../../includes/footer.php'); ?>
	</body>
</html>