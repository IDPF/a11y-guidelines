<?php include_once('../../includes/xml-declaration.php'); ?>
<?php $id='xhtm055'; $nav=1; $nav_items=array( 'ex','reqs','res','faq'); $category='xhtml'; $page_name='Figures'; ?>
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
		
		<section id="xhtm055" class="section">
			<?php include_once('../../includes/page-title.php'); ?>
			
			<section id="xhtm055-desc" class="usage">
				<p>The HTML5 <code>figure</code> element allows readers to skip secondary content and continue 
					reading the primary narrative uninterrupted. Because figures are interspersed within the body, like
					<code>asides</code>, without being able to clearly identify them the reader
					would be constantly interrupted at the points where they occur.</p>
				<p>The <code>figure</code> element can be used to encapsulate images, tables, code snippets and
					other content with a related caption, description and/or associated content elements.</p>
				<p>The element should only be used for secondary content that can be read separately
					from the main narrative, as its use permits readers to continue with the logical reading order 
					uninterrupted. Do not wrap every <code>img</code> tag in a <code>figure</code>, for example,
					only the ones that are offset from the narrative.</p>
				<p>Being able to programmatically determine the caption for a figure is another useful feature introduced
					in HTML5. As captions are often placed under the content of the figure, readers in the past have 
					often had no context for the figure until reaching the end of it (on top of the abruptness of the 
					figure being forced into the primary narrative).</p>
				<p>The <code>figcaption</code> element can now be used to mark up the caption, not to be confused with the
					<code>table</code> element's <code>caption</code>. This element must be the very first or last in
					the <code>figure</code> to be valid to the HTML5 definition.</p>
				<div epub:type="note">
					<p class="label">Note</p>
					<p>The <code>details</code> element has been removed from HTML5, but remains under development for
						HTML 5.1. As use of the element cannot be guaranteed to pass future updates to epubcheck,
						it is not recommended for describing content at this time.</p>
				</div>
			</section>
			
			<section id="xhtm055-ex" class="example">
				<h3>Example</h3>
				<figure id="xhtm055-ex01">
					<figcaption>Example 1 &#8212; Image with caption and description</figcaption>
					<pre class="prettyprint linenums"><code>&lt;figure>
   &lt;img src="images/blob.jpeg" alt="the blob"
           aria-describedby="img01-desc"/>
   &lt;figcaption>
      Figure 3.7 — The blob is digesting Steve 
      McQueen in this unreleased ending to the 
      classic movie.
      &lt;aside class="hidden id="img01-desc">
         &lt;p>
            In the photo, Steve McQueen can be seen
            floating within the gelatinous body of 
            the blob as it moves down the main
            street &#8230;
         &lt;/p>
      &lt;/aside>
   &lt;/figcaption>
&lt;/figure></code></pre>
				</figure>
				
				<figure id="xhtm055-ex02">
					<figcaption>Example 2 &#8212; Image with description link</figcaption>
					<pre class="prettyprint linenums"><code>&lt;figure>
   &lt;p>&lt;a href="blob-desc.xhtml">Description&lt;/a>&lt;/p>
   &lt;img src="images/blob.jpeg" alt="the blob"/>
   &lt;figcaption>
      Figure 3.7 — The blob is digesting Steve 
      McQueen in this unreleased ending to the 
      classic movie.
   &lt;/figcaption>
&lt;/figure></code></pre>
				</figure>
				
				<figure id="xhtm055-ex03">
					<figcaption>Example 3 &#8212; Table with description using figcaption</figcaption>
					<p>Note that the table <code>caption</code> element should not be used when a table is
						included in a figure. Including both a <code>figcaption</code> and <code>caption</code>
						will cause both to be rendered.</p>
					<pre class="prettyprint linenums"><code>&lt;figure>
   &lt;figcaption>
      Characteristics with positive and 
      negative sides.
      &lt;aside class="hidden" id="tbl01-summary">
         &lt;p>Summary&lt;/p>
         &lt;p>
            Characteristics are given 
            in the second column…
         &lt;/p>
      &lt;/aside>
   &lt;/figcaption>
   &lt;table aria-describedby="tbl01-summary">
      &#8230;
   &lt;/table>
&lt;/figure></code></pre>
				</figure>
			</section>
			
			<section id="xhtm055-reqs" class="reqs">
				<h3>Compliance References and Standards</h3>
				
				<ul>
					<li>HTML5 &#8212; <a href="http://www.w3.org/TR/html5/grouping-content.html#the-figure-element">The <code>figure</code> element</a></li>
					<li>HTML5 &#8212; <a href="http://www.w3.org/TR/html5/grouping-content.html#the-figcaption-element">The <code>figcaption</code> element</a></li>
					<li>WCAG 2.0 &#8212; <a href="http://www.w3.org/TR/WCAG20-TECHS/H45.html">H45: Using longdesc</a></li>
					<li>WCAG 2.0 &#8212; <a href="http://www.w3.org/TR/WCAG20-TECHS/G73.html">G73: Providing a long description in another location with a link to it that is immediately adjacent to the non-text content</a></li>
				</ul>
			</section>
			
			<section id="xhtm055-res" class="res">
				<h3>Additional Resources</h3>
				<ul>
					<li><a href="http://www.html5accessibility.com/tests/figures-nested.html">Use of nested figures</a></li>
				</ul>
			</section>
			
			<section id="xhtm055-faq" class="faq">
				<h3>Frequently Asked Questions</h3>
				
				<dl class="faq">
					<dt id="xhtm055-faq01">Are the <code>figure</code> and <code>figcaption</code> elements supported at this time?</dt>
					<dd><p>Browser support for the new elements is limited to interpreting them as generic <code>div</code>
							elements. Although reading systems are not strictly browsers, at this time no accessible systems 
							are available that take advantage of the specialized tagging (e.g., to provide the option to
							ignore).</p>
						<p>It is still recommended that these elements be used to tag figures, as it is 
							only a matter of time until accessibility support materializes.</p>
					</dd>
				</dl>
			</section>
		</section>
		
		<?php include_once('../../includes/footer.php'); ?>
	</body>
</html>