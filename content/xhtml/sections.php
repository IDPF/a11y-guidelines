<?php include_once('../../includes/xml-declaration.php'); ?>
<?php $id='xhtm035'; $nav=1; $nav_items=array('exes','reqs','res','faq'); $category='xhtml'; $page_name='Sections'; ?>
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
		
		<section id="xhtm035" class="section">
			<?php include_once('../../includes/page-title.php'); ?>
			
			<section id="xhtm035-desc" class="usage">
				<p>The <code>section</code> element is used to encapsulate sections of primary content, and establishes the 
					publication's structural hierarchy. Clearly grouping and identifying content enables better navigation 
					by anyone reading using an assistive technology (<a href="#xhtm035-faq03">see also the faq</a>).</p>
				
				<p>An <code>epub:type</code> attribute should be attached to each <code>section</code> to indicate the 
					specific nature of the content, when applicable. The <a href="http://idpf.org/epub/vocab/structure/">EPUB 3 Structural 
					Semantics Vocabulary</a> currently defines the following terms for sectioned content:</p>
				
				<ul class="multicol">
					<li>acknowledgments</li>
					<li>afterword</li>
					<li>appendix</li>
					<li>bibliography</li>
					<li>chapter</li>
					<li>colophon</li>
					<li>conclusion</li>
					<li>contributors</li>
					<li>copyright-page</li>
					<li>dedication</li>
					<li>division</li>
					<li>epigraph</li>
					<li>epilogue</li>
					<li>errata</li>
					<li>footnotes</li>
					<li>foreword</li>
					<li>glossary</li>
					<li>halftitlepage</li>
					<li>imprimatur</li>
					<li>index</li>
					<li>introduction</li>
					<li>landmarks</li>
					<li>loi (list of illustrations)</li>
					<li>lot (list of tables)</li>
					<li>other-credits</li>
					<li>part</li>
					<li>preamble</li>
					<li>preface</li>
					<li>prologue</li>
					<li>rearnotes</li>
					<li>subchapter</li>
					<li>titlepage</li>
					<li>toc</li>
					<li>volume</li>
					<li>warning</li>
				</ul>
				
				<br/>
				
				<p>When the <code>epub:type</code> attribute is not specified, a generic section/subsection nature is 
					assumed based on the nesting level.</p>
				
				<p>A <code>section</code> should not have more than one child heading, as it is not clear how these will be
					handled in HTML5. Additional headings are treated a delimiting the beginning of an implied section, but
					the outlining algorithm that defines this behavior is at risk of being removed from the specification
					(see the <a href="#xhtm035-faq06">faq question on multiple headings</a> below).</p>
				
				<p>If a section does not have a heading, consider including a <code>title</code> or <code>aria-label</code> attribute 
					on the <code>section</code> with the implied nature (e.g., 'chapter' or 'part'). Although it is anticipated that 
					assistive technologies will be able to voice/render the <code>epub:type</code> semantics in such cases, a fallback 
					attribute is prudent at this time. (Note that the <code>title</code> attribute may present a visible tooltip in contexts
					where the content can be hovered (e.g., by a mouse), whereas <code>aria-label</code> will not.)</p>
			</section>
			
			<section id="xhtm035-ex" class="example">
				<h3>Examples</h3>
				
				<figure id="xhtm035-ex01">
					<figcaption>Example 1 &#8212; Defining a section is a chapter with a heading</figcaption>
					<pre class="prettyprint linenums"><code>&lt;section epub:type="chapter" id="c01">
   &lt;h1 id="c01h01">Chapter 1. Loomings.&lt;/h1>
   &lt;p>Call me Ishmael. &#8230; &lt;/p>
   &#8230;
&lt;/section></code></pre>
				</figure>
				
				<figure id="xhtm035-ex02">
					<figcaption>Example 2 &#8212; Defining a section is a chapter by attribute</figcaption>
					<p epub:type="bridgehead"><code>title</code> attribute</p>
					<pre class="prettyprint linenums"><code>&lt;section epub:type="chapter" title="chapter" id="c01">
   &lt;p>It was a dark and stormy night &#8230; &lt;/p>
   &#8230;
&lt;/section></code></pre>
					<p epub:type="bridgehead"><code>aria-label</code> attribute</p>
					<pre class="prettyprint linenums"><code>&lt;section epub:type="chapter" aria-label="chapter" id="c01">
   &lt;p>It was a dark and stormy night &#8230; &lt;/p>
   &#8230;
&lt;/section></code></pre>
				</figure>
			</section>
			
			<section id="xhtm035-reqs" class="reqs">
				<h3>Compliance References and Standards</h3>
				
				<ul>
					<li>HTML5 &#8212; <a href="http://www.w3.org/TR/html5/sections.html#the-section-element">The <code>section</code> element</a></li>
					<li>HTML5 &#8212; <a href="http://www.w3.org/TR/html5/sections.html#headings-and-sections">Headings and sections</a></li>
					<li>WCAG 2.0 &#8212; <a href="http://www.w3.org/TR/WCAG20-TECHS/H69.html">H69: Providing heading elements at the beginning of each section of content</a></li>
					<li>WCAG 2.0 &#8212; <a href="http://www.w3.org/TR/WCAG20-TECHS/G127.html">G127: Identifying a Web page's relationship to a larger collection of Web pages</a></li>
				</ul>
			</section>
			
			<section id="xhtm035-faq" class="faq">
				<h3>Frequently Asked Questions</h3>
				
				<dl class="faq">
					<dt id="xhtm035-faq01">Should I use the <code>section</code> element for secondary content?</dt>
					<dd><p>No, the <code>section</code> element should only be used to identify primary structural 
						content.</p>
						<p>Self-contained secondary content embedded within a section &#8212; such as sidebars, 
							mini-articles, etc. &#8212; should be identified using the <code>aside</code> and 
							<code>article</code> elements, as appropriate.</p>
					</dd>
					<dt id="xhtm035-faq02">How do I handle large sections?</dt>
					<dd><p>EPUBs are typically broken up into smaller XHTML content files to improve rendering,
							so it's often the case that an entire part cannot be contained in a single file.
							The question becomes, how do you split the chapters into separate files and still retain
							the part?</p>
						<p>There are two approaches you can take to flattening out your content, and neither is optimal
							&#8212; at least in terms of retaining the original structural hierarchy in the markup.
							The first is to include the part heading with the first chapter:</p>
						
						<pre class="prettyprint linenums"><code>&lt;body>
   &lt;section epub:type="part">
      &lt;h1>Part I&lt;/h1>
      &lt;section epub:type="chapter">
         &lt;h2>Chapter I&lt;/h2>
      &lt;/section
   &lt;/section>
&lt;/body></code></pre>
						<p>Each subsequent chapter file would contain a single <code>section</code> with an <code>h2</code>
							heading. Although this markup approach appears to suggest that the part only contains a single chapter, 
							consistent heading numbering will allow an assistive technology to correctly
							orient the reader.</p>
					
						<p>The other approach is to separate the part heading into its own file:</p>
						
						<pre class="prettyprint linenums"><code>&lt;body>
   &lt;section epub:type="part">
      &lt;h1>Part I&lt;/h1>
   &lt;/section>
&lt;/body></code></pre>
						
						<p>Again, each subsequent chapter file would include an <code>h2</code> heading to indicate it is
							subordinate to the part. One advantage of this approach is that reading systems will render
							the part heading separately from the first chapter content.</p>
						
						<p>It would be nice to see a future version of EPUB include a way of retaining information about 
							the document hierarchy regardless of how the content gets broken up into files (e.g., in the spine),
							but at this time no such mechanism exists.</p>
					</dd>
					<dt id="xhtm035-faq03">Do sections assist in navigation?</dt>
					<dd><p>Yes and no.</p>
						<p>Grouping content into <code>section</code> elements more clearly delineates the structure of your
							document, since there's no ambiguity about where the section begins and ends (e.g., in HTML4, headings
							were often interspersed throughout the content regardless of relation to structure). This structure
							allows readers using assistive technologies to move from section to section more easily.</p>
						<p>It's also true that grouping and identifying the nature of each <code>section</code> with an
							<code>epub:type</code> attribute aids navigation of the document at the markup level (which is
							where assistive technologies usually operate).</p>
						<p>That said, because the publication's hierarchy often gets flattened when content is split into separate XHTML 
							files, the <code>section</code> element alone is left somewhat crippled as a navigation aid. A reader
							will have more difficulty moving quickly from part to part and skipping all the chapters in between 
							unless they use the table of contents (i.e., each content file would have to be loaded and each
							<code>section</code> type checked to move forward at the markup level).</p>
					</dd>
					<dt id="xhtm035-faq04">Can I auto-generate an EPUB navigation document from the section hierarchy?</dt>
					<dd><p>Again, it depends on whether your content has been flattened or not. Automation of the document
						should always be possible, at least to some degree, but manual cleanup will likely be required the more
						complex the structure of your document and the more it has to be flattened for distribution.</p>
						<p>If you only chunk your content for distribution, it's obviously wiser to generate the navigation 
							document from the source document structure.</p>
					</dd>
					<dt id="xhtm035-faq05">Should I use numbered headings or generic headings for my sections?</dt>
					<dd><p>See the <a href="headings.php">Headings section</a> for more information.</p></dd>
					<dt id="xhtm035-faq06">Can I use multiple headings in a section?</dt>
					<dd><p>It is best to avoid using multiple headings at this time, as it is not clear how they are to be handled. 
						The HTML5 outlining algorithm is at risk of being removed from the specification, which previously defined
						that new headings defined new implied sections. The <code>hgroup</code> element for defining a heading set
						has now been removed from HTML 5.0.</p>
						<p>If you need to include subheadings, it is better to incorporate them into the main heading for the 
							section (e.g., wrapped within <code>span</code> tags to differentiate them visually, if necessary.</p>
					</dd>
				</dl>
			</section>
		</section>
		
		<?php include_once('../../includes/footer.php'); ?>
	</body>
</html>