<?php include_once('../../includes/xml-declaration.php'); ?>
<?php $id='xhtm115'; $nav=1; $nav_items=array( 'ex','reqs','res','faq'); $category='xhtml'; $page_name='Annotations'; ?>
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
		
		<section id="xhtm115" class="section">
			<?php include_once('../../includes/page-title.php'); ?>
			
			<section id="xhtm115-desc" class="usage">
				<p>The correct use of annotations enhances the reading experience in the same way that the 
					<a href="notes.php">correct application of notes does</a>: it unclutters the primary narrative and 
					allows readers to selectively choose what they want to read.</p>
				
				<p>In a traditional print layout, an annotation is typically distinguishable from a note by its inclusion
					either in the margin or above or below the line it annotates (annotated bibliographies, where the 
					annotation follows the entry, break this generalization). These distinctions are increasingly 
					meaningless in electronic media, and the differentiation is often reduced to formal citations and 
					references representing footnotes and endnotes, and exposition or clarification representing an 
					annotation.</p>
				
				<p>Traditional marginalia is identified by adding the term <code class="property">annotation</code> from the 
					EPUB 3 Structural Semantics Vocabulary to an <code>aside</code> element using an <code>epub:type</code>
					attribute.</p>
				
				<p>Annotated bibliographies should not be marked up using the <code>aside</code> element, since in these
					instances the annotation is integral to comprehension and not secondary content. If the annotation is
					part of the entry, no special tagging may be necessary. If the annotation follows the citation in a
					separate paragraph and/or font, a simple grouping using a <code>div</code> tag with an 
					<code>epub:type</code> attribute would be more appropriate.</p>
				
				<p>Inline annotations can be included using the HTML5 <code>ruby</code> element. Although commonly used for
					annotating east Asian languages, there is no restriction on their use. An <code>epub:type</code> attribute
					is not required when using the <code>ruby</code> element, since it is defined for such use.</p>
				
				<p>Note that when using the <code>ruby</code> element for lengthy annotations, unwanted whitespace can
					be introduced before and after the annotated text to accommodate the overline (or underline) run.</p>
				
				<p>If the annotation has a referent in the text, the <code class="property">annoref</code>
					property should be attached to an <code>a</code> element wrapping it.</p>
			</section>
			
			<section id="xhtm115-ex" class="example">
				<h3>Example</h3>
				
				<figure id="xhtm115-ex01">
					<figcaption>Example 1 &#8212; Marginalia</figcaption>
					<pre class="prettyprint linenums"><code>&lt;p>
   &lt;a href="#anno01" epub:type="annoref">From the 
   beginning&lt;/a>, I've noted that the &#8230;
&lt;/p>

&lt;aside id="ft2f" epub:type="annotation">
   &lt;p>
      &quot;From the beginning&quot; here can only be taken to
      mean from the time the author became interested
      in the subject, since &#8230;
   &lt;/p>
&lt;/aside></code></pre>
				</figure>
				
				<figure id="xhtm115-ex02">
					<figcaption>Example 2 &#8212; An inline annotation using the <code>ruby</code> element</figcaption>
					<pre class="prettyprint linenums"><code>&lt;p>&#8230; so that one can only reasonably conclude that &lt;ruby>the sun revolves around the earth&lt;rt>Contradicts earlier statement.&lt;/rt>&lt;/ruby>. It should be noted that &#8230;&lt;/p></code></pre>
				</figure>
				
				<figure id="xhtm115-ex03">
					<figcaption>Example 3 &#8212; Annotated bibliographies</figcaption>
					<pre class="prettyprint linenums"><code>&lt;li>
   Viking Lander Imaging Team. &lt;cite>The Martian
   Landscape.&lt;/cite> Washington, DC: NASA SP-425,
   1978.
   &lt;span epub:type="annotation">An outstanding
   scientific study of the results of the Viking 
   project to Mars in the mid-1970s.&lt;/span>
&lt;/li></code></pre>
				</figure>
			</section>
			
			<section id="xhtm115-reqs" class="reqs">
				<h3>Compliance References and Standards</h3>
				
				<ul>
					<li>HTML5 &#8212; <a href="http://dev.w3.org/html5/spec/single-page.html"></a></li>
					<li>WCAG 2.0 &#8212; <a href="http://www.w3.org/TR/WCAG20-TECHS/"></a></li>
				</ul>
			</section>
			
			<section id="xhtm115-res" class="res">
				<h3>Additional Resources</h3>
				<ul>
					<li><a href="">...</a></li>
				</ul>
			</section>
			
			<section id="xhtm115-faq" class="faq">
				<h3>Frequently Asked Questions</h3>
				
				<dl class="faq">
					<dt></dt>
					<dd><p></p></dd>
				</dl>
			</section>
		</section>
		
		<?php include_once('../../includes/footer.php'); ?>
	</body>
</html>