<?php include_once('../../includes/xml-declaration.php'); ?>
<?php $id='tts005'; $nav=1; $nav_items=array('samp','res'); $category='tts'; $page_name='Text-to-Speech Overview'; ?>
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
		
		<section id="tts001" class="section">
			<?php include_once('../../includes/page-title.php'); ?>
			
			<section id="tts001-def" class="usage">
				<p>The ability to synthetically voice a publication is an important accessibility feature that
					many readers rely on, regardless of whether human narration is also provided (e.g., many readers
					prefer the faster playback that TTS engines make possible).</p>
				
				<p>While basic playback is possible so long as a reading system includes TTS technology, or access
					to a similarly-enabled assistive technology, any complexity in the vocabulary used typically leads
					to mispronunciations by synthetic speech engines without enhancement.</p>
				
				<p>EPUB 3 adds three new complimentary technologies to enable content authors to enhance the quality 
					of TTS playback:</p>
				
				<dl>
					<dt id="tts001-def-pls"><a href="pls.php">PLS lexicons</a></dt>
					<dd><p>The Pronunciation Lexicon Specification defines an XML format for defining globally-applicable
						pronunciations. When words are encountered in the prose that match the defined entries, the
						provided pronunciation is used in place of the engine's default rendering. Lexicons provide
						a simple way to define pronunciations for words whose meanings do not change based on context.</p></dd>
					<dt id="tts001-def-ssml"><a href="ssml.php">SSML markup</a></dt>
					<dd><p>The Synthetic Speech Markup Language (SSML) allows pronunciations to be embedded directly
						in the markup. When SSML attributes are encountered on elements, the provided pronunciation is
						used in place of either the engine's default rendering or a PLS entry. SSML can be used to define
						all pronunciations, but is better used as a compliment to PLS lexicons (e.g., to disambiguate heteronyms
						and ambiguous number forms).</p></dd>
					<dt id="tts001-def-speech"><a href="speech.php">CSS3 Speech properties</a></dt>
					<dd><p>The CSS3 Speech modules includes a grab-bag of properties that can be used to control playback. From
						providing control over the spelling out of words and numbers to inserting aural cues and pauses, these
						properties allow control of playback beyond the traditional enhancement of pronunciation.</p></dd>
				</dl>
			</section>
			
			<section id="tts001-samp" class="sample">
				<h3>Samples</h3>
				
				<p>The <a href="http://code.google.com/p/epub-samples/">EPUB Samples Project</a> contains the following 
					publications that implement enhanced TTS functionality:</p>
				
				<ul>
					<li><a href="http://code.google.com/p/epub-samples/source/browse/#svn%2Ftrunk%2F30%2Fgeorgia-pls-ssml%2FEPUB">Georgia</a></li>
				</ul>
			</section>
			
			<section id="tts001-res" class="res">
				<h3>Additional Resources</h3>
				<ol>
					<li>EPUB 3 &#8212; <a href="http://idpf.org/epub3/latest/contentdocs#sec-pls">PLS Documents</a></li>
					<li><a href="http://www.w3.org/TR/pronunciation-lexicon/">Pronunciation Lexicon Specification (PLS) Version 1.0</a></li>
					<li>EPUB 3 &#8212; <a href="http://idpf.org/epub3/latest/contentdocs#sec-xhtml-ssml-attrib">SSML Attributes</a></li>
					<li><a href="http://www.w3.org/TR/speech-synthesis11/">Speech Synthesis Markup Language (SSML) Version 1.1</a></li>
					<li>EPUB 3 &#8212; <a href="http://idpf.org/epub3/latest/contentdocs#sec-css-voice-characteristics">CSS 3.0 Speech</a></li>
					<li><a href="http://www.w3.org/TR/2011/WD-css3-speech-20110818/">CSS3 Speech Module</a> (working draft referenced by EPUB 3)</li>
					<li><a href="http://www.phon.ucl.ac.uk/home/sampa/x-sampa.htm">Computer-coding the IPA: a proposed extension of SAMPA</a> (X-SAMPA)</li>
					<li><a href="http://www.langsci.ucl.ac.uk/ipa/ipachart.html">Reproduction of The International Phonetic Alphabet (Revised to 2005)</a></li>
				</ol>
			</section>
			
		</section>
		
		<?php include_once('../../includes/footer.php'); ?>
	</body>
</html>