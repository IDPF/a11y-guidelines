<?php include_once('../../includes/xml-declaration.php'); ?>
<?php $id='xhtm060'; $nav=1; $nav_items=array( 'exes','reqs','res'); $category='xhtml'; $page_name='Images'; ?>
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
		
		<section id="xhtm060" class="section">
			<?php include_once('../../includes/page-title.php'); ?>
			
			<section id="xhtm060-desc" class="usage">
				<p>Images that are central to the understanding of a publication must always include a text
					alternative in their <code>alt</code> attribute.</p>
				
				<p>In the case of complex images, a detailed description should also be added. Although the 
					<code>aria-describedby</code> attribute can be used to link an image to a description in the
					same file, no mechanism currently exists to link to an out-of-band description. 
					<a href="descriptions.php">Work is ongoing</a> to remedy this problem.</p>
				
				<p>If the image is purely decorative, the <code>alt</code> attribute should be left empty. For improved,
					accessibility, an ARIA <code>role</code> attribute with the property <code class="property">presentation</code>
					should also be attached.</p>
				
				<div epub:type="note">
					<p class="label">Note</p>
					<p>If an image is important to the publication, but not required to be read at the point of 
						insertion (i.e., it is not part of the logical reading order), use a 
						<a href="figures.php">figure</a> tag to enclose it.</p>
				</div>
				<div epub:type="note">
					<p class="label">Note</p>
					<p>The <code>details</code> element has been removed from HTML5, but remains under development for
						HTML 5.1. As use of the element cannot be guaranteed to pass future updates to epubcheck,
						it is not recommended for describing content at this time.</p>
				</div>
			</section>
			
			<section id="xhtm060-ex" class="example">
				<h3>Examples</h3>
				
				<figure id="xhtm060-ex01">
					<figcaption>Example 1 &#8212; Significant simple image (no description required)</figcaption>
					<pre class="prettyprint linenums"><code>&lt;img
     src="covers/9781449328030_lrg.jpg"
     alt="First Edition" /></code></pre>
				</figure>
				
				<figure id="xhtm060-ex02">
					<figcaption>Example 2 &#8212; Significant complex image (description required)</figcaption>
					<pre class="prettyprint linenums"><code>&lt;figure>
   &lt;img
        src="graphics/water-cycle.jpg"
        aria-describedby="water-cycle-desc"
        alt="The hydrologic cycle, showing the 
          circular nature of the process as water 
          evaporates from a body of water and 
          eventually returns to it"/>
   &lt;figcaption>
      The hydrologic cycle
      &lt;aside class="hidden" id="water-cycle-desc">
         &lt;p>
            The diagram shows the processes of 
            evaporation, condensation, 
            evapotranspiration, water storage 
            in ice and snow, and precipitation. 
            A large body of water &#8230;
         &lt;/p>
      &lt;/aside>
   &lt;/figcaption>
&lt;/figure></code></pre>
				</figure>
				
				<figure id="xhtm060-ex03">
					<figcaption>Example 3 &#8212; Decorative image</figcaption>
					<pre class="prettyprint linenums"><code>&lt;img
     src="graphics/gothic-border.png"
     role="presentation"
     alt=""/></code></pre>
				</figure>
			</section>
			
			<section id="xhtml040-reqs" class="reqs">
				<h3>Compliance References and Standards</h3>
				
				<ul>
					<li>HTML5 &#8212; <a href="http://www.w3.org/TR/html5/embedded-content-0.html#the-img-element">The <code>img</code> element</a></li>
					<li>WCAG 2.0 &#8212; <a href="http://www.w3.org/TR/WCAG20-TECHS/H37.html">H37: Using alt attributes on img elements</a></li>
					<li>WCAG 2.0 &#8212; <a href="http://www.w3.org/TR/WCAG20-TECHS/H67.html">H67: Using null alt text and no title attribute on img elements for images that AT should ignore</a></li>
					<li>WCAG 2.0 &#8212; <a href="http://www.w3.org/TR/WCAG20-TECHS/H45.html">H45: Using longdesc</a></li>
				</ul>
				
				<ul class="secondary">
					<li>WCAG 2.0 &#8212; <a href="http://www.w3.org/TR/WCAG20-TECHS/G15.html">G15: Using a tool to ensure that content does not violate the general flash threshold or red flash threshold</a></li>
					<li>WCAG 2.0 &#8212; <a href="http://www.w3.org/TR/WCAG20-TECHS/G19.html">G19: Ensuring that no component of the content flashes more than three times in any 1-second period</a></li>
					<li>WCAG 2.0 &#8212; <a href="http://www.w3.org/TR/WCAG20-TECHS/G73.html">G73: Providing a long description in another location with a link to it that is immediately adjacent to the non-text content</a></li>
					<li>WCAG 2.0 &#8212; <a href="http://www.w3.org/TR/WCAG20-TECHS/G74.html">G74: Providing a long description in text near the non-text content, with a reference to the location of the long description in the short description</a></li>
					<li>WCAG 2.0 &#8212; <a href="http://www.w3.org/TR/WCAG20-TECHS/G92.html">G92: Providing long description for non-text content that serves the same purpose and presents the same information</a></li>
					<li>WCAG 2.0 &#8212; <a href="http://www.w3.org/TR/WCAG20-TECHS/G94.html">G94: Providing short text alternative for non-text content that serves the same purpose and presents the same information as the non-text content</a></li>
					<li>WCAG 2.0 &#8212; <a href="http://www.w3.org/TR/WCAG20-TECHS/G100.html">G100: Providing a short text alternative which is the accepted name or a descriptive name of the non-text content</a></li>
					<li>WCAG 2.0 &#8212; <a href="http://www.w3.org/TR/WCAG20-TECHS/G103.html">G103: Providing visual illustrations, pictures, and symbols to help explain ideas, events, and processes</a></li>
					<li>WCAG 2.0 &#8212; <a href="http://www.w3.org/TR/WCAG20-TECHS/G111.html">G111: Using color and pattern</a></li>
				</ul>
				
				<ul class="secondary">
					<li>WCAG 2.0 &#8212; <a href="http://www.w3.org/TR/WCAG20-TECHS/C9.html">C9: Using CSS to include decorative images</a></li>
					<li>WCAG 2.0 &#8212; <a href="http://www.w3.org/TR/WCAG20-TECHS/C18.html">C18: Using CSS margin and padding rules instead of spacer images for layout design</a></li>
					<li>WCAG 2.0 &#8212; <a href="http://www.w3.org/TR/WCAG20-TECHS/C30.html">C30: Using CSS to replace text with images of text and providing user interface controls to switch</a></li>
				</ul>
			</section>
			
			<section id="xhtm060-res" class="res">
				<h3>Additional Resources</h3>
				<ul>
					<li><a href="http://www.w3.org/TR/html-alt-techniques/">HTML5: Techniques for providing useful text alternatives</a></li>
					<li><a href="http://www.cs.tut.fi/~jkorpela/html/alt.html">Guidelines on alt texts in img elements</a></li>
				</ul>
			</section>
		</section>
		
		<?php include_once('../../includes/footer.php'); ?>
	</body>
</html>