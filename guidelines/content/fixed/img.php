<?php include_once('../../includes/xml-declaration.php'); ?>
<?php $id='fixed010'; $nav=1; $nav_items=array( 'samp','reqs'); $category='fixed'; $page_name='Image Fixed Layouts'; ?>
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
		
		<section id="fixed010" class="section">
			<?php include_once('../../includes/page-title.php'); ?>
			
			<section id="fixed010-desc" class="usage">
				<p>Although image formats can be used to create fixed layouts, doing so can greatly reduce the accessibility
					of the publication. When using images, keep the following guidelines in mind:</p>
				
				<ul>
					<li>Avoid empty files that set an image to render using the CSS <code class="property">background-image</code>
						property. Not only does it leave the image without a description, but any reader without a CSS-aware reading
						system will see an empty document (note that even if the system does not handle fixed layout metadata,
						it will still render the publication). See the <a href="../style/backgrounds.php">section on background 
						images</a> for more information.</li>
					<li>Avoid embedding text into images. Doing so removes access from assistive technologies. Use the
						CSS <code class="property">z-index</code> property to define layering and position of text as needed 
						on the image.</li>
					<li>Whenever possible, use figures and captions to add images to the fixed layout document (including the
						description in the caption). If you are using fixed layouts to facilitate the rendering of image 
						galleries, plates and similar, you can use scipting to enahnce the default experience and remove
						the caption from visual display. The caption will be accessible to those who need and can also be
						presented generally in interesting ways (see the <a href="#fixed010-sample">Samples</a> section for 
						an interesting implementation using this technique).</li>
					<li>Add a text serialization of the work if it is completely visual in nature. It's not true that readers
						who are blind or have low vision are not interested in reading these works, but fully representing
						the publication typically requires more than image descriptions.</li>
				</ul>
			</section>
			
			<section id="fixed010-sample" class="sample">
				<h3>Samples</h3>
				
				<p>The <a href="http://code.google.com/p/epub-samples/">EPUB Samples Project</a> contains the following 
					publications that include image fixed layouts:</p>
				
				<ul>
					<li><a href="http://code.google.com/p/epub-samples/downloads/list">Cole Voyage of Life</a> (with the -tol extension)</li>
				</ul>
			</section>
			
			<section id="fixed010-reqs" class="reqs">
				<h3>Compliance References and Standards</h3>
				
				<ul>
					<li>HTML5 &#8212; <a href="http://www.w3.org/TR/html5/embedded-content-0.html#the-img-element">The <code>img</code> element</a></li>
					<li>WCAG 2.0 &#8212; <a href="http://www.w3.org/TR/WCAG20-TECHS/C27.html">C27: Making the DOM order match the visual order</a></li>
					<li>WCAG 2.0 &#8212; <a href="http://www.w3.org/TR/WCAG20-TECHS/G57.html">G57: Ordering the content in a meaningful sequence</a></li>
				</ul>
			</section>
		</section>
		
		<?php include_once('../../includes/footer.php'); ?>
	</body>
</html>