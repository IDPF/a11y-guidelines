<?php include_once('../../includes/xml-declaration.php'); ?>
<?php $id='nav015'; $nav=1; $nav_items=array( 'exes', 'samp','reqs','res','faq'); $category='nav'; $page_name='Page List'; ?>
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
		
		<section id="nav015" class="section">
			<?php include_once('../../includes/page-title.php'); ?>
			
			<section id="nav015-desc" class="usage">
				<p>If an EPUB has a print counterpart, or is derived from a print source, the pagination should be
					retained and included in the publication for cross-referencing.</p>
				
				<p>See the section on <a href="../xhtml/pagenum.php">page numbering</a> for more information on how
					to embed page references within a publication.</p>
			</section>
			
			<section id="nav015-ex" class="example">
				<h3>Examples</h3>
				
				<figure id="nav015-ex01">
					<figcaption>Example 1 &#8212; Page list navigation</figcaption>
					<pre class="prettyprint linenums"><code>&lt;nav epub:type="page-list">
 &lt;ol>
   &lt;li>&lt;a href="georgia.xhtml#page752">752&lt;/a>&lt;/li>
   &lt;li>&lt;a href="georgia.xhtml#page753">753&lt;/a>&lt;/li>
   &lt;li>&lt;a href="georgia.xhtml#page754">754&lt;/a>&lt;/li>
   &lt;li>&lt;a href="georgia.xhtml#page755">755&lt;/a>&lt;/li>
   &lt;li>&lt;a href="georgia.xhtml#page756">756&lt;/a>&lt;/li>
   &lt;li>&lt;a href="georgia.xhtml#page757">757&lt;/a>&lt;/li>
   &lt;li>&lt;a href="georgia.xhtml#page758">758&lt;/a>&lt;/li>
 &lt;/ol>
&lt;/nav></code></pre>
				</figure>
			</section>
			
			<section id="nav015-samp" class="sample">
				<h3>Samples</h3>
				
				<p>The <a href="http://code.google.com/p/epub-samples/">EPUB Samples Project</a> contains the following 
					publications that implement page list navigation:</p>
				
				<ul>
					<li><a href="http://code.google.com/p/epub-samples/downloads/list">Georgia</a></li>
				</ul>
			</section>
			
			<section id="nav015-reqs" class="reqs">
				<h3>Compliance References and Standards</h3>
				
				<ul>
					<li>EPUB 3 &#8212; <a href="http://idpf.org/epub3/latest/contentdocs#sec-xhtml-nav-def-types-pagelist">The <code>page-list nav</code> Element</a></li>
					<li>HTML5 &#8212; <a href="http://www.w3.org/TR/html5/sections.html#the-nav-element">The <code>nav</code> element</a></li>
				</ul>
			</section>
			
			<section id="nav015-res" class="res">
				<h3>Additional Resources</h3>
				<ul>
					<li>EPUB 2 &#8212; <a href="http://idpf.org/epub/20/spec/OPF_2.0.1_draft.htm#Section2.4.1">Declarative Global Navigation &#8212; the NCX</a></li>
					<li>Z39.86-2005 &#8212; <a href="http://www.niso.org/workrooms/daisy/Z39-86-2005.html#NCX">Navigation Control File (NCX)</a></li>
				</ul>
			</section>
			
			<section id="nav015-faq" class="faq">
				<h3>Frequently Asked Questions</h3>
				
				<dl class="faq">
					<dt id="nav015-faq01">What if the order of my ebook doesn't exactly match the order of the print equivalent?</dt>
					<dd><p>It's sometimes the case when converting to ebooks that front and back matter material gets shuffled
							around and/or omitted. These changes in content order are not unexpected, and readers will understand 
							that their ebooks may not be formatted exactly the same way as the print, and may not include
							all the print content.</p>
						<p>If you do make changes to the content order, do not renumber the existing pagination to return it to
							sequential order. The purpose of page list navigation is to get the reader to the equivalent point, 
							not to be sequentially correct.</p>
						<p>Whenever re-ordering or omitting content, consider adding a note to the <code>dc:source</code>
							element in the package document that identifies the print equivalent:</p>
						<pre class="prettyprint linenums"><code>&lt;metadata xmlns:dc="http://purl.org/dc/elements/1.1/">
   &lt;dc:source id="src-pub">
      urn:isbn:9760123456789
   &lt;/dc:source>
   &lt;meta
      refines="#src-pub"
      property="dc:description">The print index has
      been omitted from the EPUB version of this book.
   &lt;/meta>
&lt;/metadata></code></pre>
					</dd>
					<dt id="nav015-faq02">If I include an NCX, should it also include a corresponding <code>pageList</code>?</dt>
					<dd><p>Yes. An EPUB 2 reading system will only be able to interpret the NCX.</p></dd>
				</dl>
			</section>
		</section>
		
		<?php include_once('../../includes/footer.php'); ?>
	</body>
</html>