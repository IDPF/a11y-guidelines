<?php include_once('../../includes/xml-declaration.php'); ?>
<?php $id='xhtm075'; $nav=1; $nav_items=array( 'exes','reqs','res'); $category='xhtml'; $page_name='Video'; ?>
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
		
		<section id="xhtm075" class="section">
			<?php include_once('../../includes/page-title.php'); ?>
			
			<section id="xhtm075-desc" class="usage">
				<p>When including video clips, ensure that the native reading system controls are enabled by default.
					If a reading system supports custom controls, the native controls can be disabled by the JavaScript code.</p>
				
				<p>The following methods for making video content accessible are recommended in the HTML5 specification:</p>
				
				<ul>
					<li>The <code>track</code> element can be used to include subtitles, captions
						and descriptions.</li>
					<li>Subtitles and captions can be embedded directly in the video.</li>
					<li>The <code>track</code> element can be used to provide navigation by scene
						(the <code>chapters</code> track type).</li>
					<li>A link to a transcript can be provided.</li>
				</ul>
				
				<p>Although the <code>video</code> element allows child content for fallback purposes, such content is not 
					intended to serve as an accessible alternative (it is only made available to the reader if video is 
					not supported by the reading system).</p>
				
				<p>The <code>video</code> element also includes the <code>poster</code> attribute to allow a default 
					image to be set for display while no data is available. This image can also serve as a fallback
					in EPUB publications when video, or the video format, is not supported. There is currently no
					way to describe this image, however, so text fallbacks should be preferred. (Discussions are 
					ongoing in the HTML5 Working Group to find ways to redress the problem of video being supported
					and the poster image conveying additional information of interest to the reader.)</p>
				
				<p>Agreement on universal support for a video codec and container could not be reached in HTML5, and
					is a similar issue for EPUB 3. Although the EPUB 3 specification technically allows any format
					(without fallback), the IDPF recommends one or both of the following formats be included:</p>
				
				<ul>
					<li>H.264</li>
					<li>WebM</li>
				</ul>
				
				<p>While this might not seem like an accessibility issue, consider that it means that many more
					readers might be relying on fallbacks than you might at first anticipate.</p>
			</section>
			
			<section id="xhtm075-ex" class="example">
				<h3>Examples</h3>
				<figure id="xhtm075-ex01">
					<figcaption>Example 1 &#8212; Including a video using the <code>src</code> attribute</figcaption>
					<pre class="prettyprint linenums"><code>&lt;video
   src="video/the_general.webm"
   controls="controls">
   &#8230;
&lt;/video></code></pre>
				</figure>
				
				<figure id="xhtm075-ex02">
					<figcaption>Example 2 &#8212; Including more than one video option using the <code>source</code> element</figcaption>
					<pre class="prettyprint linenums"><code>&lt;video controls="controls">
   &lt;source
       src="video/the_general.webm"
       type="video/webm"/>
   &lt;source
       src="video/the_general.mp4"
       type="video/mp4"/>
   &#8230;
&lt;/video></code></pre>
				</figure>
				
				<figure id="xhtm075-ex03">
					<figcaption>Example 3 &#8212; Including timed tracks</figcaption>
					<pre class="prettyprint linenums"><code>&lt;video controls="controls">
       src="video/big-hollywood-blockbuster.mp4"
       controls="controls">
   &lt;track
       kind="subtitles"
       src="subtitles.en.vtt"
       srclang="en"
       label="English"/>
   &lt;track
       kind="captions"
       src="captions.en.vtt"
       srclang="en"
       label="English"/>
&lt;/video></code></pre>
				</figure>
				
				<figure id="xhtm075-ex04">
					<figcaption>Example 4 &#8212; Including a <code>poster</code> image</figcaption>
					<pre class="prettyprint linenums"><code>&lt;video
   src="video/the_general.mp4"
   poster="graphics/the_general.jpg"
   controls="controls">
   &#8230;
&lt;/video></code></pre>
				</figure>
				
				<figure id="xhtm075-ex05">
					<figcaption>Example 5 &#8212; Including a fallback error message</figcaption>
					<pre class="prettyprint linenums"><code>&lt;video
       src="video/the_general.mp4"
       controls="controls">
   &#8230;
   &lt;div class="err">
      &lt;p>
         Sorry, it appears your system 
         either does not support video 
         playback or cannot play the 
         MP4 format provided.
      &lt;/p>
   &lt;/div>
&lt;/video></code></pre>
				</figure>
			</section>
			
			<section id="xhtm075-reqs" class="reqs">
				<h3>Compliance References and Standards</h3>
				
				<ul>
					<li>HTML5 &#8212; <a href="http://www.w3.org/TR/html5/embedded-content-0.html#the-video-element">The <code>video</code> element</a></li>
					<li>HTML5 &#8212; <a href="http://www.w3.org/TR/html5/embedded-content-0.html#the-track-element">The <code>track</code> element</a></li>
					<li>WCAG 2.0 &#8212; <a href="http://www.w3.org/TR/WCAG20-TECHS/G15.html">G15: Using a tool to ensure that content does not violate the general flash threshold or red flash threshold</a></li>
					<li>WCAG 2.0 &#8212; <a href="http://www.w3.org/TR/WCAG20-TECHS/G19.html">G19: Ensuring that no component of the content flashes more than three times in any 1-second period</a></li>
					<li>WCAG 2.0 &#8212; <a href="http://www.w3.org/TR/WCAG20-TECHS/G78.html">G78: Providing a second, user-selectable, audio track that includes audio descriptions</a></li>
					<li>WCAG 2.0 &#8212; <a href="http://www.w3.org/TR/WCAG20-TECHS/G81.html">G81: Providing a synchronized video of the sign language interpreter that can be displayed in a different viewport or overlaid on the image by the player</a></li>
					<li>WCAG 2.0 &#8212; <a href="http://www.w3.org/TR/WCAG20-TECHS/G87.html">G87: Providing closed captions</a></li>
					<li>WCAG 2.0 &#8212; <a href="http://www.w3.org/TR/WCAG20-TECHS/G93.html">G93: Providing open (always visible) captions</a></li>
				</ul>
			</section>
			
			<section id="xhtm075-res" class="res">
				<h3>Additional Resources</h3>
				<ul>
					<li><a href="http://www.apress.com/9781430230908">The Definitive Guide to HTML5 Video</a>, Sylvia Pfeiffer (Apress)</li>
					<li><a href="http://dev.opera.com/articles/view/more-accessible-html5-video-player/">A more accessible HTML5 &lt;video> player</a></li>
					<li><a href="http://net.tutsplus.com/tutorials/html-css-techniques/an-in-depth-overview-of-html5-multimedia-and-accessibility/">An in Depth Analysis of HTML5 Multimedia and Accessibility</a></li>
				</ul>
			</section>
		</section>
		
		<section id="xhtm075-rev" class="rev">
			<h3>Revision History</h3>
			<?php include_once('../../rev/history.php'); ?>
		</section>
		
		<?php include_once('../../includes/footer.php'); ?>
	</body>
</html>