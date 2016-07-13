<?php include_once('../../includes/xml-declaration.php'); ?>
<?php $id='svg015'; $nav=1; $nav_items=array('ex','reqs','res'); $category='svg'; $page_name='Components'; ?>
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
		
		<section id="svg015" class="section">
			<?php include_once('../../includes/page-title.php'); ?>
			
			<section id="svg015-desc" class="usage">
				<p>Whenever possible, graphic components should be re-used to simplify comprehension of images.
					SVG includes a <code>defs</code> element for defining common components. These components
					can then be referenced and modified as needed to derive new components (for example, 
					via the <code>use</code> element).</p>
				
				<p>Compiling your component definitions into re-usable libraries can reduce development time 
					and improve access to images.</p>
				
			</section>
			
			<section id="svg015-ex" class="example">
				<h3>Examples</h3>
				<p>The W3C Accessibility Features of SVG Note includes the following reference examples:</p>
				<ul>
					<li><a href="http://www.w3.org/TR/SVG-access/#Fig-3.5">Adding sockets to the Hub</a></li>
					<li><a href="http://www.w3.org/TR/SVG-access/#Fig-3.7">Adding graphics to the Network components</a></li>
				</ul>
			</section>
			
			<section id="svg015-reqs" class="reqs">
				<h3>Compliance References and Standards</h3>
				
				<ul>
					<li>SVG 1.1 &#8212; <a href="http://www.w3.org/TR/SVG/struct.html#Head">Defining content for reuse, and the ‘defs’ element</a></li>
					<li>SVG 1.1 &#8212; <a href="http://www.w3.org/TR/SVG/struct.html#UseElement">The ‘use’ element</a></li>
					<li>SVG A11y Note &#8212; <a href="http://www.w3.org/TR/SVG-access/#Re-Using">Reusing Graphic Components</a></li>
					<li>SVG A11y Note &#8212; <a href="http://www.w3.org/TR/SVG-access/#Re-Using1">Re-Using Components from Other Documents</a></li>
				</ul>
			</section>
			
			<section id="svg015-res" class="res">
				<h3>Additional Resources</h3>
				<ul>
					<li>Mozilla Developer's Network &#8212; <a href="https://developer.mozilla.org/en/SVG">SVG</a></li>
				</ul>
			</section>
		</section>
		
		<?php include_once('../../includes/footer.php'); ?>
	</body>
</html>