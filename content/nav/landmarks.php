<?php include_once('../../includes/xml-declaration.php'); ?>
<?php $id='nav010'; $nav=1; $nav_items=array( 'ex','reqs','res','faq'); $category='nav'; $page_name='Landmarks'; ?>
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
		
		<section id="nav010" class="section">
			<?php include_once('../../includes/page-title.php'); ?>
			
			<section id="nav010-desc" class="usage">
				<p>Every EPUB publication should include a guide to all the major landmarks (the <code>landmarks nav</code>).</p>
				
				<p>The nature of each landmark must be identified in an <code>epub:type</code> attribute on its link
					element (<code>a</code>). Common landmark properties from the 
					<a href="http://idpf.org/epub/vocab/structure/">EPUB 3 Structural Semantics Vocabulary</a>
					include the following:</p>
				
				<ul class="multicol">
					<li>cover</li>
					<li>titlepage</li>
					<li>frontmatter</li>
					<li>bodymatter</li>
					<li>backmatter</li>
					<li>toc</li>
					<li>loi (list of illustrations)</li>
					<li>lot (list of tables)</li>
					<li>preface</li>
					<li>bibliography</li>
					<li>index</li>
					<li>glossary</li>
					<li>acknowledgments</li>
				</ul><br/>
				
				<p>Unlike the <a href="toc.php"><code>toc nav</code></a>, the <code>landmarks nav</code> must only
					be a single flat listing of links.</p>
			</section>
			
			<section id="nav010-ex" class="example">
				<h3>Example</h3>
				<figure id="nav010-ex01">
					<figcaption>Example 1 &#8212; Landmarks navigation</figcaption>
					<p>Note in the following example that the <code>landmarks nav</code> references the 
						<code>toc nav</code> in the same file.</p>
					<pre class="prettyprint linenums"><code>&lt;nav epub:type="landmarks">
   &lt;h2>Guide&lt;/h2>
   &lt;ol>
      &lt;li>
         &lt;a 
            epub:type="toc"
            href="#toc">Table of Contents&lt;/a>
      &lt;/li>
      &lt;li>
         &lt;a
            epub:type="loi"
            href="front.html#loi">List of Images&lt;/a>
      &lt;/li>
      &lt;li>
         &lt;a
            epub:type="lot"
            href="front.html#lot">List of Tables&lt;/a>
      &lt;/li>
      &lt;li>
         &lt;a 
            epub:type="bodymatter"
            href="c01.html#c01">Start of Content&lt;/a>
      &lt;/li>
      &lt;li>
         &lt;a
            epub:type="glossary"
            href="gloss.html#gloss">Glossary&lt;/a>
      &lt;/li>
      &lt;li>
         &lt;a
            epub:type="bibliography"
            href="app.html#biblio">Bibliography&lt;/a>
      &lt;/li>
      &lt;li>
         &lt;a
            epub:type="index"
            href="index.html#index">Index&lt;/a>
      &lt;/li>
   &lt;/ol>
&lt;/nav></code></pre>
				</figure>
			</section>
			
			<section id="nav010-reqs" class="reqs">
				<h3>Compliance References and Standards</h3>
				<ul>
					<li>EPUB 3 &#8212; <a href="http://idpf.org/epub3/latest/contentdocs#sec-xhtml-nav-def-types-landmarks">The <code>landmarks nav</code> Element</a></li>
					<li>HTML5 &#8212; <a href="http://www.w3.org/TR/html5/sections.html#the-nav-element">The <code>nav</code> element</a></li>
				</ul>
			</section>
			
			<section id="nav010-res" class="res">
				<h3>Additional Resources</h3>
				<ul>
					<li>EPUB 2 &#8212; <a href="http://idpf.org/epub/20/spec/OPF_2.0.1_draft.htm#Section2.6">Guide</a></li>
				</ul>
			</section>
			
			<section id="nav010-faq" class="faq">
				<h3>Frequently Asked Questions</h3>
				
				<dl class="faq">
					<dt id="nav010-faq01">Why should I include a <code>landmarks nav</code> if the <code>toc nav</code> already links to everything?</dt>
					<dd><p>Not only does the <code>landmarks nav</code> simplify access to major sections of the publication,
						without having the navigate the entire table of contents, but it also facilitates reading system behaviors.
						A device that gives the option to automatically open to the first page of the body, for example, or provides
						quick links to the index or glossary can make use of the extra semantics in the <code>landmarks nav</code>
						to this end.</p></dd>
					<dt id="nav010-faq02">Do I need to include a <code>guide</code> in the package document?</dt>
					<dd><p>Like the ability to include an NCX file, the <code>guide</code> element exists in EPUB 3 only to facilitate
						forwards compatibility in older reading systems. You are not required to support older systems, but if you
						decide to you should include a <code>guide</code>.</p></dd>
				</dl>
			</section>
		</section>
		
		<?php include_once('../../includes/footer.php'); ?>
	</body>
</html>