<?php include_once('../../includes/xml-declaration.php'); ?>
<?php $id='nav005'; $nav=1; $nav_items=array('exes','samp','reqs','res','faq'); $category='nav'; $page_name='Table of Contents'; ?>
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
		
		<section id="nav005" class="section">
			<?php include_once('../../includes/page-title.php'); ?>
			
			<section id="nav005-desc" class="usage">
				<p>Each publication must provide a complete table of contents in the 
					<a href="http://idpf.org/epub3/latest/contentdocs#sec-xhtml-nav">EPUB navigation document</a>, 
					covering all levels of of the document hierarchy (the <code>toc nav</code>).</p>
				
				<p>The navigation document is one of the two key methods readers use to move around your content,
					the other being <a href="../xhtml/toc.php">headings</a>. It provides readers easy access to the entire 
					structure of your publication, which simplifies quick traversal and random inspection of the publication.</p>
				
				<p>Navigation components such as the <code>toc nav</code> are constructed using ordered lists (<code>ol</code>).
					Each list item must either contain a single link (<code>a</code>) to a section of the document, or a link
					or heading (<code>span</code>) followed by a list of subsections.</p>
				
				<p>If the pronunciation of a link heading may be ambiguous due to embedded images, math content, or other content
					without intrinsic text, a <code>title</code> attribute must be attached containing an alternate pronunciation.</p>
				
				<p>To exclude branches of subsection headings from visual rendering, the HTML5 <code>hidden</code>
					attribute can be attached to the relevant ordered list(s). Reading systems must ensure that these
					nodes remain accessible to assistive technologies when rendering the table of contents.</p>
			</section>
			
			<section id="nav005-ex" class="example">
				<h3>Examples</h3>
				
				<figure id="nav005-ex01">
					<figcaption>Example 1 &#8212; Simple links</figcaption>
					<pre class="prettyprint linenums"><code>&lt;nav epub:type="toc" id="toc">
&lt;ol>
  &lt;li>
    &lt;a href="s01.xhtml">A simple link&lt;/a>
  &lt;/li>
  &#8230;
&lt;/ol>
&lt;/nav></code></pre>
				</figure>
				
				<figure id="nav005-ex02">
					<figcaption>Example 2 &#8212; Nested entries</figcaption>
					<pre class="prettyprint linenums"><code>&lt;nav epub:type="toc" id="toc">
&lt;ol>
  &#8230;
  &lt;li>
    &lt;a href="s03.xhtml">A linked heading&lt;/a>
    &lt;ol>
      &lt;li>&lt;a href="s03-01.xhtml">Subsection&lt;/a>
      &#8230;
    &lt;/ol>
  &lt;/li>
  &lt;li>
    &lt;span class="navhd">An unlinked heading&lt;/span>
    &lt;ol>
      &lt;li>
        &lt;a href="s04-01.xhtml">Subsection&lt;/a>
      &lt;/li>
      &#8230;
    &lt;/ol>
  &lt;/li>
  &#8230;
&lt;/nav></code></pre>
				</figure>
				
				<figure id="nav005-ex03">
					<figcaption>Example 3 &#8212; TOC with hidden branches</figcaption>
					<pre class="prettyprint linenums"><code>&lt;nav epub:type="toc" id="toc">
&lt;ol>
  &#8230;
  &lt;li>
    &lt;a href="s05.xhtml">A linked heading&lt;/a>
    &lt;ol hidden="hidden">
      &lt;li>
        &lt;a href="s05-01.xhtml">Hidden subsection&lt;/a>
      &lt;/li>
      &#8230;
    &lt;/ol>
  &lt;/li>
  &#8230;
&lt;/ol>
&lt;/nav></code></pre>
				</figure>
				
				<figure id="nav005-ex04">
					<figcaption>Example 4 &#8212; Ambiguous heading</figcaption>
					<pre class="prettyprint linenums"><code>&lt;nav epub:type="toc" id="toc">
&lt;ol>
  &#8230;
  &lt;li>
    &lt;a href="s02.xhtml"
       title="alternate prose title">A simple link 
       requiring an alternate pronunciation&lt;/a>
  &lt;/li>
  &#8230;
&lt;/ol>
&lt;/nav></code></pre>
				</figure>
			</section>
			
			<section id="nav005-samp" class="sample">
				<h3>Samples</h3>
				
				<p>The <a href="http://code.google.com/p/epub-samples/">EPUB Samples Project</a> contains the following 
					publications that include table of contents navigation:</p>
				
				<ul>
					<li>Simple:
						<ul>
							<li><a href="http://code.google.com/p/epub-samples/source/browse/trunk/30/moby-dick-mo/OPS/toc.xhtml">Moby Dick</a></li>
						</ul>
					</li>
					<li>Multi-level:
						<ul>
							<li><a href="http://code.google.com/p/epub-samples/source/browse/trunk/30/accessible_epub_3/EPUB/bk01-toc.xhtml">Accessible EPUB 3</a></li>
						</ul>
					</li>
					<li>Employing the <code>hidden</code> attribute:
						<ul>
							<li><a href="http://code.google.com/p/epub-samples/source/browse/trunk/30/epub30-spec/EPUB/xhtml/epub30-nav.xhtml">EPUB 3 Specifications</a></li>
							<li><a href="http://code.google.com/p/epub-samples/source/browse/trunk/30/mahabharata/EPUB/nav/nav.xhtml">Mahabharata</a></li>
						</ul>
					</li>
				</ul>
			</section>
			
			<section id="nav005-reqs" class="reqs">
				<h3>Compliance References and Standards</h3>
				
				<ul>
					<li>EPUB 3 &#8212; <a href="http://idpf.org/epub3/latest/contentdocs#sec-xhtml-nav-def-types-toc">The <code>toc nav</code> Element</a></li>
					<li>HTML5 &#8212; <a href="http://www.w3.org/TR/html5/sections.html#the-nav-element">The <code>nav</code> element</a></li>
					<li>WCAG 2.0 &#8212; <a href="http://www.w3.org/TR/WCAG20-TECHS/G64.html">G64: Providing a Table of Contents</a></li>
					<li>WCAG 2.0 &#8212; <a href="http://www.w3.org/TR/WCAG20-TECHS/G126.html">G126: Providing a list of links to all other Web pages</a></li>
					<li>WCAG 2.0 &#8212; <a href="http://www.w3.org/TR/WCAG20-TECHS/G128.html">G128: Indicating current location within navigation bars</a></li>
				</ul>
			</section>
			
			<section id="nav005-res" class="res">
				<h3>Additional Resources</h3>
				<ul>
					<li>EPUB 2 &#8212; <a href="http://idpf.org/epub/20/spec/OPF_2.0.1_draft.htm#Section2.4.1">Declarative Global Navigation &#8212; the NCX</a></li>
					<li>Z39.86-2005 &#8212; <a href="http://www.niso.org/workrooms/daisy/Z39-86-2005.html#NCX">Navigation Control File (NCX)</a></li>
				</ul>
			</section>
			
			<section id="nav005-faq" class="faq">
				<h3>Frequently Asked Questions</h3>
				
				<dl class="faq">
					<dt id="nav005-faq01">Can I reuse the <code>toc nav</code> as a table of contents in my publication?</dt>
					<dd><p>Yes, the EPUB navigation document was formulated as an XHTML content document so that it 
							could provide both a declarative table of contents for use by reading systems and also be embeddable
							as content.</p>
						<p>See the XHTML Content Documents <a href="../xhtml/toc.php">Table of Contents section</a> for more information.</p>
					</dd>
					<dt id="nav005-faq02">Why does EPUB 3 allow NCX files, and do I need to include one?</dt>
					<dd><p>The NCX file is allowed for forwards compatibility purposes only. Although EPUB 2 reading systems will not
							be able to handle all the new features in EPUB 3, publications that only employ the basic set of features 
							available in both versions should be able to open on either type of reading system. EPUB 2 reading systems will
							not accept the new navigation document format, however.</p>
						<p>You can ignore the NCX file if your book won't render properly as EPUB 2 content, or if you aren't targeting 
							cross-compatibility.</p>
						<p>Your publication may still open on EPUB 2 reading systems even without an NCX. Some reading systems, like Adobe
							Digital Editions, will simply not provide table of contents navigation in such cases. Apple iBooks will also reportedly
							open EPUB 2s without an NCX. But, short of testing every possible reading system there's no blanket statement
							that can be made about what will happen. Some systems, especially accessible ones, may reject the publication
							without a means of navigation.</p>
					</dd>
					<dt id="nav005-faq03">Why is rendering the <code>toc nav</code> as an HTML list not accessibility-friendly?</dt>
					<dd><p>The <code>toc nav</code> was designed to serve a dual role as a declarative table of contents
							and as a simple list for rendering in the body which is why it is written in HTML, but HTML 
							lists provided limited navigability. It was not designed using the HTML5 grammar rules to
							be rendered as HTML in both cases.</p>
						<p>Of all the ways you can bring up a dynamic table of contents and facilitate movement through it,
							a static list has to be the least imaginative or utile. The table of contents that a reading
							system provides should allow features like expanding and collapsing branches and moving through
							the headings by hotkey. These features allow readers who cannot see the table of contents to
							navigate it with greater ease.</p>
						<p>When rendering the table of contents, you should also be aware that the EPUB use of the
							<code>hidden</code> attribute does not perfectly align with the HTML5 specification. An
							HTML list rendered as HTML will hide these branches even from assistive technologies. For 
							a table of contents in the publication body, a reduced table of contents such as might result
							is acceptable for all readers. The dynamic table of contents, however, must be able to provide 
							full access.</p>
					</dd>
				</dl>
			</section>
		</section>
		
		<?php include_once('../../includes/footer.php'); ?>
	</body>
</html>