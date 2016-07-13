<?php include_once('../../includes/xml-declaration.php'); ?>
<?php $id='fixed005'; $nav=1; $nav_items=array( 'ex','reqs'); $category='fixed'; $page_name='XHTML Fixed Layouts'; ?>
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
		
		<section id="fixed005" class="section">
			<?php include_once('../../includes/page-title.php'); ?>
			
			<div epub:type="note">
				<p class="label">Note</p>
				<p>The section deals with fixed layout that are predominantly text-based, employing background 
					images only for visual enhancement, not to carry significant information. See the 
					<a href="img.php">image-based fixed layouts</a> section for more information on how to 
					making image pages more accessible.</p>
			</div>
			
			<section id="fixed005-desc" class="usage">
				<p>It is possible to create fixed layout publications that retain a high level of accessibility using 
					XHTML content, so long as the structural semantic tagging guidelines that apply to all publications
					are adhered to.</p>
				
				<p>The following guidelines should also be respected when positioning content using CSS to
					create elecronic pages:</p>
				
				<ul>
					<li>Ensure that the order in which you include content in your markup matches the order that the 
						reader would logically be expected to encounter it on the page. Use CSS to arrange the position 
						on screen over top of the image, however appropriate. The logical reading order for someone 
						using an assistive technology matches the markup order.</li>
					<li>Avoid using the CSS <code class="property">background-image</code> property to set backgrounds 
						if the background is not decorative. Use the CSS <code class="property">z-index</code> property 
						to layer text content on top of the image, which will allow a description to be provided to 
						explain how the image is relevant.</li>
				</ul>
				
				<div epub:type="note">
					<p class="label">Note</p>
					<p>Ensuring the fallback accessibility of fixed layout publications should be a concern 
						to all content creators, as there is no guarantee that positioned content will be rendered 
						as desired. Reading systems that do not support fixed layouts will reflow the content regardless
						of author intention.</p>
				</div>
			</section>
			
			<section id="fixed005-ex" class="example">
				<h3>Example</h3>
				<figure id="fixed005-ex01">
					<figcaption>Example 1 &#8212; </figcaption>
					<pre class="prettyprint linenums"><code>...</code></pre>
				</figure>
			</section>
			
			<section id="fixed005-reqs" class="reqs">
				<h3>Compliance References and Standards</h3>
				
				<ul>
					<li>WCAG 2.0 &#8212; <a href="http://www.w3.org/TR/WCAG20-TECHS/C27.html">C27: Making the DOM order match the visual order</a></li>
					<li>WCAG 2.0 &#8212; <a href="http://www.w3.org/TR/WCAG20-TECHS/G57.html">G57: Ordering the content in a meaningful sequence</a></li>
				</ul>
			</section>
		</section>
		
		<?php include_once('../../includes/footer.php'); ?>
	</body>
</html>