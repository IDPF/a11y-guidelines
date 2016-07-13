<?php include_once('../../includes/xml-declaration.php'); ?>
<?php $id='svg025'; $nav=1; $nav_items=array('ex','reqs','res'); $category='svg'; $page_name='Linking'; ?>
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
		
		<section id="svg025" class="section">
			<?php include_once('../../includes/page-title.php'); ?>
			
			<section id="svg025-desc" class="usage">
				<p>SVG graphical components can be made linkable by wrapping them in <code>a</code> elements. Linked
					elements should always include an <code>xlink:title</code> attribute identifying the nature of
					the referenced resource.</p>
				
				<p>That certain graphical components are linkable, and others not, also needs to be established 
					for readers that may have to zoom the image or otherwise may not be able to ascertain which
					components are linked.</p>
			</section>
			
			<section id="svg025-ex" class="example">
				<h3>Example</h3>
				<pre class="prettyprint linenums"><code>&lt;a href="http://www.ontario.ca"
   xlink:title="Ontario government web site">
   &lt;g &#8230;>
      &lt;title>Province of Ontario&lt;/title>
      &#8230;
   &lt;/g>
&lt;/a></code></pre>
			</section>
			
			<section id="svg025-reqs" class="reqs">
				<h3>Compliance References and Standards</h3>
				
				<ul>
					<li>SVG 1.1 &#8212; <a href="http://www.w3.org/TR/SVG/linking.html">Linking</a></li>
					<li>SVG 1.1 &#8212; <a href="http://www.w3.org/TR/SVG/access.html#SVGAccessibilityGuidelines">SVG Content Accessibility Guidelines</a></li>
					<li>SVG A11y Note &#8212; <a href="http://www.w3.org/TR/SVG-access/#Links">Linking and Navigation</a></li>
				</ul>
			</section>
			
			<section id="svg025-res" class="res">
				<h3>Additional Resources</h3>
				<ul>
					<li>Mozilla Developer's Network &#8212; <a href="https://developer.mozilla.org/en/SVG">SVG</a></li>
				</ul>
			</section>
		</section>
		
		<?php include_once('../../includes/footer.php'); ?>
	</body>
</html>