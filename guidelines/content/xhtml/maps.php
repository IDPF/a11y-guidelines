<?php include_once('../../includes/xml-declaration.php'); ?>
<?php $id='xhtm067'; $nav=1; $nav_items=array( 'ex','reqs','res','faq'); $category='xhtml'; $page_name='Image Maps'; ?>
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
		
		<section id="xhtm067" class="section">
			<?php include_once('../../includes/page-title.php'); ?>
			
			<section id="xhtm067-desc" class="usage">
				<p>An image map, as its name suggests, is a kind of context-sensitive image that &#8212; depending on 
					where the reader clicks, touches or otherwise actives it &#8212; results in a unique operation
					being performed. Image maps are commonly used to make two-dimensional maps dynamic (e.g., to
					provide information about the country/state/province/region selected), to provide more information 
					about points on an infographic, etc.</p>
				
				<p epub:type="bridgehead">Client-side v. Server-side</p>
				
				<p>There are two ways to create maps: locally using the <code>usemap</code> attribute to reference
					a <code>map</code> element that defines the clickable region; and remotely by enclosing the
					image in an <code>a</code> tag and setting the <code>ismap</code> attribute on the <code>img</code>
					tag.</p>
				
				<p>Server-side maps are inherently less accessible, both because they require that the reader be able
					to see the image to discern the regions and also because they require that the reader be able to 
					click on the image in an exact spot.</p>
				
				<p>Client-side maps make use of an associated <code>map</code> element to define the clickable regions.
					Each region is specified in an <code>area</code> element, and each <code>area</code> should include
					an <code>alt</code> attribute that indicates its purpose so that non-visual readers can easily 
					discover the functionality. Assistive technologies allow readers to iterate over these areas,
					making them a much friendlier option than server-side maps, and without requiring intrusive
					fallbacks.</p>
				
				<p>In fact, server-side maps provide no additional functionality, so their use is never 
					recommended. If one must be used, a set of links corresponding to each clickable region should
					be provided so that readers who cannot interact with the map have equal access to the functionality.</p>
				
				<p>Note that maps of either kind should never be used when a better alternative is available (e.g.,
					to make an image of text linkable).</p>
			</section>
			
			<section id="xhtm067-ex" class="example">
				<h3>Example</h3>
				<figure id="xhtm067-ex01">
					<figcaption>Example 1 &#8212; A client-side map</figcaption>
					<pre class="prettyprint linenums"><code>&lt;img
     src="north-america.png"
     usemap="#na-map"/>
  &lt;map id="na-map">
     &lt;area href="ca-info.xhtml" alt="Canada"/>
     &lt;area href="us-info.xhtml" alt="US"/>
     &lt;area href="mx-info.xhtml" alt="Mexico"/>
  &lt;/map>
</code></pre>
				</figure>
				
				<figure id="xhtm067-ex02">
					<figcaption>Example 2 &#8212; A server-side map</figcaption>
					<pre class="prettyprint linenums"><code>&lt;a href="">&lt;img
     src="north-america.png"
     ismap="ismap"/>&lt;/a>
  &lt;map>
     &lt;a href="ca-info.xhtml">Canada&lt;/a>
     &lt;a href="us-info.xhtml">US&lt;/a>
     &lt;a href="mx-info.xhtml">Mexico&lt;/a>
  &lt;/map>
</code></pre>
				</figure>
			</section>
			
			<section id="xhtm067-reqs" class="reqs">
				<h3>Compliance References and Standards</h3>
				
				<ul>
					<li>HTML5 &#8212; <a href="http://www.w3.org/TR/html5/embedded-content-0.html#image-maps">Image maps</a></li>
					<li>HTML5 &#8212; <a href="http://www.w3.org/TR/html5/embedded-content-0.html#the-map-element">The <code>map</code> element</a></li>
					<li>HTML5 &#8212; <a href="http://www.w3.org/TR/html5/embedded-content-0.html#the-area-element">The <code>area</code> element</a></li>
					<li>HTML5 &#8212; <a href="http://www.w3.org/TR/html5/embedded-content-0.html#attr-img-ismap">The <code>ismap</code> attribute</a></li>
					<li>WCAG 2.0 &#8212; <a href="http://www.w3.org/TR/WCAG20-TECHS/H24.html">H24: Providing text alternatives for the area elements of image maps</a></li>
					<li>WCAG 2.0 &#8212; <a href="http://www.w3.org/TR/WCAG20-TECHS/H24.html">H24: Providing text alternatives for the area elements of image maps</a></li>
				</ul>
			</section>
			
			<section id="xhtm067-res" class="res">
				<h3>Additional Resources</h3>
				<ul>
					<li><a href="http://jimthatcher.com/webcourse5.htm">JimThatcher.com &#8211; Image maps</a></li>
				</ul>
			</section>
		</section>
		
		<?php include_once('../../includes/footer.php'); ?>
	</body>
</html>