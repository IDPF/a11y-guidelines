<?php include_once('../../includes/xml-declaration.php'); ?>
<?php $id='xhtm010'; $nav=1; $nav_items=array( 'ex','reqs','res','faq'); $category='xhtml'; $page_name='Language'; ?>
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
		
		<section id="xhtm010" class="section">
			<?php include_once('../../includes/page-title.php'); ?>
			
			<section id="xhtm010-desc" class="usage">
				<p>Specifying a document's default language &#8212; as well as any changes within the document, such as instances 
					of foreign language terms or dialogue or passages in another language &#8212; helps ensure that assistive 
					technologies can correctly render the text (e.g., that the correct braille characters are presented or a voice 
					capable of rendering the language gets used).</p>
				
				<p>To define the default language for an XHTML document, the <code>lang</code> and <code>xml:lang</code>
					language attributes need to be attached to the root <code>html</code> element. The language code defined
					in these attributes should match one of the language codes specified in a <code>dc:language</code> element 
					in the package document's metadata section (<a href="#xhtm010-faq01">see the faq</a> for more information).</p>
				
				<p>When attached to elements within the body, the language attributes identify the language of the text 
					content of that element (i.e., to identify a change in language).</p>
			</section>
			
			<section id="xhtm010-ex" class="example">
				<h3>Example</h3>
				
				<figure id="xhtm010-ex01">
					<pre class="prettyprint linenums"><code>&lt;html &#8230; lang="en" xml:lang="en">
   &#8230;
   &lt;body>
      &#8230;
      &lt;p>
         Harsh gargoyle face that warred against me 
         over our mess of hash of lights in 
         &lt;span xml:lang="fr" lang="fr">rue 
         Saint-André-des-Arts&lt;/span>. In words of
         words for words, palabras. Oisin with
         Patrick. Faunman he met in Clamart woods,
         brandishing a winebottle.
         &lt;i xml:lang="fr" lang="fr">C'est 
         vendredi saint!&lt;/i> Murthering Irish.
         His image, wandering, he met. I mine. I 
         met a fool i'the forest.
      &lt;/p>
      &#8230;
   &lt;/body>
&lt;/html></code></pre>
				</figure>
			</section>
			
			<section id="xhtm010-reqs" class="reqs">
				<h3>Compliance References and Standards</h3>
				
				<ul>
					<li>HTML5 &#8212; <a href="http://www.w3.org/TR/html5/dom.html#the-lang-and-xml:lang-attributes">The lang and xml:lang attributes</a></li>
					<li>WCAG 2.0 &#8212; <a href="http://www.w3.org/TR/WCAG20-TECHS/H57.html">H57: Using language attributes on the html element</a></li>
					<li>WCAG 2.0 &#8212; <a href="http://www.w3.org/TR/WCAG20-TECHS/H58.html">H58: Using language attributes to identify changes in the human language</a></li>
				</ul>
			</section>
			
			<section id="xhtm010-res" class="res">
				<h3>Additional Resources</h3>
				<ul>
					<li><a href="http://www.w3.org/International/getting-started/language">Language on the Web</a></li>
					<li><a href="http://www.w3.org/International/articles/language-tags/">Language tags in HTML and xml</a></li>
					<li><a href="http://www.rfc-editor.org/rfc/rfc5646.txt">RFC5646 &#8212; Tags for Identifying Languages</a></li>
					<li><a href="http://www.w3.org/International/questions/qa-css-lang#xmllang">Styling using language attributes</a></li>
				</ul>
			</section>
			
			<section id="xhtm010-faq" class="faq">
				<h3>Frequently Asked Questions</h3>
				
				<dl class="faq">
					<dt id="xhtm010-faq01">Is it necessary to specify a default language in content files?</dt>
					<dd><p>The default language(s) for the publication are formally defined in the package document,
							but that information may not be available to assistive technologies depending on the
							reading system used. A cloud reader may only have access to the current XHTML content
							document, for example, in which case the proper language for braille rendering or TTS 
							playback may not be available.</p>
						<p>In the case of multilingual publications, it additionally may not be clear to any
							reading system or assistive technology which of the specified languages in the package 
							document is the correct default for any given content document.</p>
						<p>Best practice is to always specify the language in each content document
							to ensure proper rendering.</p></dd>
					<dt id="xhtm010-faq02">Is it necessary to specify both the <code>lang</code> and <code>xml:lang</code> attributes?</dt>
					<dd><p>Again, for optimal accessibility both should be specified at this time. Assistive technologies
							may only recognize one or the other attribute.</p>
						<p>In addition, if XHTML content documents are rendered as HTML by a reading system, only the 
							<code>lang</code> attribute may be recognized.</p></dd>
				</dl>
			</section>
		</section>
		
		<?php include_once('../../includes/footer.php'); ?>
	</body>
</html>