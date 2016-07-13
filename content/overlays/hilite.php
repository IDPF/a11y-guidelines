<?php include_once('../../includes/xml-declaration.php'); ?>
<?php $id='mo010'; $nav=1; $nav_items=array( 'samp','reqs','faq'); $category='overlays'; $page_name='Highlighting'; ?>
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
		
		<section id="overlay005" class="section">
			<?php include_once('../../includes/page-title.php'); ?>
			
			<section id="overlay005-desc" class="usage">
				<p>When text is synchronized during playback, it can also be styled to make it more obvious which
					passage is being narrated. EPUB 3 allows you to define the CSS class to apply to the active
					element in the package document metadata using the special 
					<code class="property">media:active-class</code> property:</p>
				
				<pre class="prettyprint linenums"><code>&lt;meta property="media:active-class">
   -epub-overlay-active
&lt;/meta></code></pre>
				
				<p>In this case, the reading system will check all attached CSS files for a class named
					<code class="value">-epub-overlay-active</code> and will apply whatever styles are defined
					in it to each synchronized element for the duration of its playback</p>
				
				<div epub:type="note">
					<p class="label">Note</p>
					<p>The name that you use for the CSS class is not important. It can be any name you choose, 
						but for clarity a name that indicates its purpose is recommended.</p>
				</div>
				
				<p>For example, to apply a yellow background to the active text a basic rule such as the 
					following could be created:</p>
				
				<pre class="prettyprint linenums"><code class="language-css">.-epub-overlay-active {
   background-color: rgb(255,255,0);
}</code></pre>
				
				<p>Be aware when applying background shading that it may not contrast well with text colors you've already
					assigned. If the shading will cause insufficient contrast in some situations, consider also specifying a
					default color:</p>
				
				<pre class="prettyprint linenums"><code class="language-css">.-epub-overlay-active {
   color: rgb(0,0,0);
   background-color: rgb(255,255,0);
}</code></pre>
			</section>
			
			<section id="overlay005-samp" class="sample">
				<h3>Samples</h3>
				
				<p>The <a href="http://code.google.com/p/epub-samples/">EPUB Samples Project</a> contains the following 
					publications that implement Media Overlays:</p>
				
				<ul>
					<li>Moby Dick: <a href="http://code.google.com/p/epub-samples/source/browse/trunk/30/moby-dick-mo/OPS/package.opf#36">OPF</a> <a href="http://code.google.com/p/epub-samples/source/browse/trunk/30/moby-dick-mo/OPS/css/stylesheet.css#359">CSS</a></li>
				</ul>
			</section>
			
			<section id="overlay005-reqs" class="reqs">
				<h3>Compliance References and Standards</h3>
				
				<ul>
					<li>EPUB 3 &#8212; <a href="http://idpf.org/epub3/latest/mediaoverlays#sec-docs-assoc-style">Associating Style Information</a></li>
					<li>WCAG 2.0 &#8212; <a href="http://www.w3.org/TR/WCAG20-TECHS/G17.html">G17: Ensuring that a contrast ratio of at least 7:1 exists between text (and images of text) and background behind the text</a></li>
					<li>WCAG 2.0 &#8212; <a href="http://www.w3.org/TR/WCAG20-TECHS/G18.html">G18: Ensuring that a contrast ratio of at least 4.5:1 exists between text (and images of text) and background behind the text</a></li>
					<li>WCAG 2.0 &#8212; <a href="http://www.w3.org/TR/WCAG20-TECHS/G145.html">G145: Ensuring that a contrast ratio of at least 3:1 exists between text (and images of text) and background behind the text</a></li>
				</ul>
			</section>
			
			<section id="overlay005-faq" class="faq">
				<h3>Frequently Asked Questions</h3>
				
				<dl class="faq">
					<dt id="overlay005-faq01">Can I only use background shading with overlays?</dt>
					<dd><p>No, you can make any changes to the active text, but be aware that the choices you make may
						impact on the accessibility of the publication.</p>
						<p>Also consider the ebook medium. Increasing the font size might seem to be a good choice
							to make the active text more pronounced, but the practical result may be text that jumps around
							on the page. As one paragraph loses focus, for example, its text size will shrink and 
							the next will increase, causing the layout to "move" on the reader. It may also be the case
							that text that was visible when the page was originally rendered will get pushed out
							of the viewport as the new highlighting is applied.</p>
					</dd>
					<dt id="overlay005-faq02">Can I highlight words within sentences (or within paragraphs) using overlays?</dt>
					<dd><p>Yes and no. If you are using pre-recorded audio, you cannot. The playback will only be as 
						granular as your overlay file, as highlighting is applied to each <code>par</code> in turn.</p>
						<p>Highlighting at both the sentence and word level is common in reading systems that provide
							text-to-speech playback. This rendering is typical a combination of heuristic lookaheads
							to determine each sentence (or part of a sentence) combined with word-level highlighting as
							each word is fed to the TTS engine for rendering.</p>
						<p>Overlays can take advantage of TTS playback to offer similar functionality, but at the price
							of audio quality (synthesized voices) and assurance that the content will render (not all
							reading systems provide TTS voicing). If no <code>audio</code> element is provided in a
							<code>par</code>, the reading system is expected to render text content synthetically
							(audio/video content referenced from the <code>text</code> element would be initiated).
							Any word-by-word highlighting offered by the TTS engine would compliment the active
							overlay highlighting.</p>
						<p>But choosing this kind of playback is suboptimal for the pitfalls already listed and
							because of the further conflicts that may arise between the highlighting you apply
							and the highlighting the reading system applies during TTS playback. Color clashes
							could make the text illegible for readers.</p>
						<p>When mixing overlays and TTS technologies is necessary (e.g., to narrate the body and
							synthetically render indexes and other tedious to narrate backmatter), it's best to
							err on the side of a simple highlighting scheme for the overlays.</p>
					</dd>
				</dl>
			</section>
		</section>
		
		<?php include_once('../../includes/footer.php'); ?>
	</body>
</html>