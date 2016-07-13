<?php include_once('../../includes/xml-declaration.php'); ?>
<?php $id='xhtm030'; $nav=1; $nav_items=array('exes','samp','reqs','res'); $category='xhtml'; $page_name='Table of Contents'; ?>
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
		
		<section id="xhtm030" class="section">
			<?php include_once('../../includes/page-title.php'); ?>
			
			<section id="xhtm030-desc" class="usage">
				<p>Although the <a href="../nav/toc.php">EPUB navigation document</a> provides full navigation capabilities for
					the publication as a whole, embedding tables of contents within the body can further facilitate comprehension and navigation 
					(e.g., a table of contents in the front matter or a reduced table of contents or mini tables of contents at the 
					start of each section). Embedding can also provide a measure of consistency across reading system implementations, 
					since the rendering of the navigation document may vary from device to device.</p>
				
				<p>You can re-use the navigation document for your primary table of contents, as the navigation document is a valid 
					XHTML document. It can be included in the <code>spine</code> and rendered as content 
					(see <a href="#xhtm030-ex03">Example 1</a>). CSS styling can be applied to make the table visually appealing.</p>
				
				<p>If the navigation document contains additional <code>nav</code> types (e.g., a <code>page-list nav</code>), 
					and you don't want those elements rendered in the body, add the <code>hidden</code> attribute to each unwanted 
					list to hide it.</p>
				
				<p>If you embed other tables of contents in the body of your publication, try to construct them in the same way you 
					would the navigation document, using the <code>nav</code> element and ordered lists. Lists simplify access for persons 
					using assistive technologies.</p>
				
				<p>When including a sectional table of contents, the <code>nav</code> element should be included in a 
					<code>header</code> element with the section's title (see <a href="#xhtm030-ex03">Example 3</a>).</p>
				
			</section>
			
			<section id="xhtm030-ex" class="example">
				<h3>Examples</h3>
				
				<figure id="xhtm030-ex01">
					<figcaption>Example 1 &#8212; Re-using the <code>nav toc</code> by including it in the spine</figcaption>
					<pre class="prettyprint linenums"><code>&lt;package &#8230;>
   &#8230;
   &lt;manifest>
      &#8230;
      &lt;item id="htmltoc"
      	    properties="nav"
      	    media-type="application/xhtml+xml"
      	    href="bk01-toc.xhtml"/>
      &#8230;
   &lt;/manifest>
   &#8230;
   &lt;spine>
      &#8230;
      &lt;itemref idref="htmltoc" linear="yes"/>
      &#8230;
   &lt;/spine>
&lt;/manifest></code></pre>
					<p class="ack">See in context in <a href="http://code.google.com/p/epub-samples/source/browse/trunk/30/accessible_epub_3/EPUB/package.opf">Accessible EPUB 3 package file</a></p>
				</figure>
				
				<figure id="xhtm030-ex02">
					<figcaption>Example 2 &#8212; Adding a table of contents to the publication body</figcaption>
					<pre class="prettyprint linenums"><code>&lt;section epub:type="toc">
   &lt;h1>Table of Contents&lt;/h1>
   &lt;nav id="pub-toc">
      &lt;ol class="toc">
         &lt;li>
            &lt;a href="ch01.xhtml">1. Introduction&lt;/a>
         &lt;/li>
         &lt;li>
            &lt;a href="ch02.xhtml">2. Building a 
               Better EPUB: Fundamental
               Accessibility&lt;/a>
         &lt;/li>
         &lt;li>
            &lt;a href="ch03.xhtml">3. It’s Alive:
               Rich Content Accessibility&lt;/a>
         &lt;/li>
         &lt;li>
            &lt;a href="ch04.xhtml">4. Conclusion&lt;/a>
         &lt;/li>
      &lt;/ol>
   &lt;/nav>
&lt;/section></code></pre>
				</figure>
				
				<figure id="xhtm030-ex03">
					<figcaption>Example 3 &#8212; A mini table of contents at the start of a section</figcaption>
					<pre class="prettyprint linenums"><code>&lt;section>
   &lt;header>
      &lt;h2>
         3. It’s Alive: Rich Content Accessibility
      &lt;/h3>
      &lt;nav id="ch3-toc">
         &lt;ol>
            &lt;li>
               &lt;a href="#s01">The Sound and 
               the Fury: Audio and Video&lt;/a>
            &lt;/li>
            &lt;li>
               &lt;a href="#s02">Talk to Me: 
               Media Overlays&lt;/a>
            &lt;/li>
            &lt;li>
               &lt;a href="#s03">Tell It Like 
               It Is: Text-to-Speech (TTS)&lt;/a>
            &lt;/li>
            &lt;li>
               &lt;a href="#s04">The Coded Word:
               Scripted Interactivity&lt;/a>
            &lt;/li>
            &lt;li>
               &lt;a href="#s05">A Little Help:
               WAI-ARIA&lt;/a>
            &lt;/li>
            &lt;li>
               &lt;a href="#s06">A Blank Slate:
               Canvas&lt;/a>
            &lt;/li>
         &lt;/ol>
      &lt;/nav>
   &lt;/header>
   &#8230;
&lt;/section></code></pre>
				</figure>				
			</section>
			
			<section id="xhtm030-samp" class="sample">
				<h3>Samples</h3>
				
				<p>The <a href="http://code.google.com/p/epub-samples/">EPUB Samples Project</a> contains the following 
					publications that include embedded tables of contents:</p>
				
				<ul>
					<li><a href="http://code.google.com/p/epub-samples/source/browse/trunk/30/mahabharata/EPUB/nav/nav.xhtml">Mahabharata</a> &#8212; uses the <code>hidden</code> attribute to hide additional <code>nav</code> elements</li>
				</ul>
			</section>
			
			<section id="xhtm030-reqs" class="reqs">
				<h3>Compliance References and Standards</h3>
				
				<ul>
					<li>WCAG 2.0 &#8212; <a href="http://www.w3.org/TR/WCAG20-TECHS/G126.html">G126: Providing a list of links to all other Web pages</a></li>
				</ul>
			</section>
			
			<section id="xhtm030-res" class="res">
				<h3>Additional Resources</h3>
				<ul>
					<li>EPUB 3 &#8212; <a href="http://idpf.org/epub3/latest/contentdocs#sec-xhtml-nav">EPUB Navigation Documents</a></li>
					<li>EPUB 3 &#8212; <a href="http://idpf.org/epub3/latest/contentdocs#sec-xhtml-nav-def-types-toc">The <code>toc nav</code> Element</a></li>
					<li>HTML5 &#8212; <a href="http://www.w3.org/TR/html5/sections.html#the-nav-element">The <code>nav</code> element</a></li>
				</ul>
			</section>
			
			
			<section id="xhtm030-faq" class="faq">
				<h3>Frequently Asked Questions</h3>
				
				<dl class="faq">
					<dt id="xhtm030-faq01">Do I have to use the navigation document in the body?</dt>
					<dd><p>No, it's just a convenience. If the navigation document format is too restrictive or otherwise not conducive
						to your needs, you can create your own for the body. As a table of contents in the body is not explicitly an accessibility 
						aid, you have greater freedom to lay it out how you need. Maintaining an accessible structure to it is still recommended,
						however.</p>
					</dd>
				</dl>
			</section>
		</section>
		
		<?php include_once('../../includes/footer.php'); ?>
	</body>
</html>