<?php include_once('../../includes/xml-declaration.php'); ?>
<?php $id='xhtm070'; $nav=1; $nav_items=array( 'exes','reqs','res'); $category='xhtml'; $page_name='Audio'; ?>
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
		
		<section id="xhtm070" class="section">
			<?php include_once('../../includes/page-title.php'); ?>
			
			<section id="xhtm070-desc" class="usage">
				<p>When including audio clips, ensure that the native reading system controls are enabled by default.
					If a reading system supports custom controls, the native controls can be disabled by the JavaScript code.</p>
				
				<p>The following methods for making audio content accessible are recommended in the HTML5 specification:</p>
				
				<ul>
					<li>If captions or a sign language video are available, the <code>video</code> element can be used 
						to play back the clip, allowing users to enable the necessary features.</li>
					<li>The <code>track</code> element can be used to provide navigation by scene.</li>
					<li>A link to a transcript can be provided.</li>
				</ul>
				
				<p>Although the <code>audio</code> element allows child content for fallback purposes, such content is not 
					intended to serve as an accessible alternative (it is only made available to the reader if audio is 
					not supported by the reading system).</p>
			</section>
			
			<section id="xhtm070-ex" class="example">
				<h3>Examples</h3>
				<figure id="xhtm070-ex01">
					<figcaption>Example 1 &#8212; Enabling the reading system's default controls</figcaption>
					<pre class="prettyprint linenums"><code>&lt;audio src="audio/clip01.mp3" controls="controls"/></code></pre>
				</figure>
				
				<figure id="xhtm070-ex02">
					<figcaption>Example 2 &#8212; Including a transcript</figcaption>
					<pre class="prettyprint linenums"><code>&lt;div>
   &lt;audio src="audio/01.mp3" controls="controls"/>
   &lt;a href="transcript01.html">Transcript&lt;/a>
&lt;/div></code></pre>
				</figure>
				
				<figure id="xhtm070-ex03">
					<figcaption>Example 3 &#8212; Including a fallback error message</figcaption>
					<pre class="prettyprint linenums"><code>&lt;audio src="audio/clip12.mp3" controls="controls">
   &lt;div class="err">
      &lt;p>
         Sorry, it appears your system 
         does not support audio playback.
      &lt;/p>
   &lt;/div>
&lt;/audio></code></pre>
				</figure>
			</section>
			
			<section id="xhtm070-reqs" class="reqs">
				<h3>Compliance References and Standards</h3>
				
				<ul>
					<li>HTML5 &#8212; <a href="http://www.w3.org/TR/html5/embedded-content-0.html#the-audio-element">The <code>audio</code> element</a></li>
					<li>HTML5 &#8212; <a href="http://www.w3.org/TR/html5/embedded-content-0.html#the-track-element">The <code>track</code> element</a></li>
					<li>WCAG 2.0 &#8212; <a href="http://www.w3.org/TR/WCAG20-TECHS/G78.html">G78: Providing a second, user-selectable, audio track that includes audio descriptions</a></li>
					<li>WCAG 2.0 &#8212; <a href="http://www.w3.org/TR/WCAG20-TECHS/G81.html">G81: Providing a synchronized video of the sign language interpreter that can be displayed in a different viewport or overlaid on the image by the player</a></li>
					<li>WCAG 2.0 &#8212; <a href="http://www.w3.org/TR/WCAG20-TECHS/G87.html">G87: Providing closed captions</a></li>
					<li>WCAG 2.0 &#8212; <a href="http://www.w3.org/TR/WCAG20-TECHS/G93.html">G93: Providing open (always visible) captions</a></li>
				</ul>
			</section>
			
			<section id="xhtm070-res" class="res">
				<h3>Additional Resources</h3>
				<ul>
					<li><a href="http://www.iso.org/iso/iso_catalogue/catalogue_tc/catalogue_detail.htm?csnumber=22412">ISO/IEC 11172-3:1993 - Information technology &#8212; Coding of moving pictures and associated audio for digital storage media at up to about 1,5 Mbit/s &#8212; Part 3: Audio</a></li>
					<li><a href="http://www.iso.org/iso/iso_catalogue/catalogue_ics/catalogue_detail_ics.htm?csnumber=53943">ISO/IEC 14496-3:2009 - Information technology &#8212; Coding of audio-visual objects &#8212; Part 3: Audio</a></li>
					<li><a href="http://www.iso.org/iso/iso_catalogue/catalogue_tc/catalogue_detail.htm?csnumber=38538">Information technology &#8212; Coding of audio-visual objects &#8212; Part 14: MP4 file format</a></li>
				</ul>
			</section>
		</section>
		
		<?php include_once('../../includes/footer.php'); ?>
	</body>
</html>