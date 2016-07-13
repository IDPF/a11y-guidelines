<?php include_once('../../includes/xml-declaration.php'); ?>
<?php $id='mo005'; $nav=1; $nav_items=array('samp','res'); $category='overlays'; $page_name='Media Overlays Overview'; ?>
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
		
		<section id="mo001" class="section">
			<?php include_once('../../includes/page-title.php'); ?>
			
			<section id="mo001-def" class="usage">
				<p>The EPUB 3.0 Media Overlays specification defines a profile of the 
					<a href="http://www.w3.org/TR/2008/REC-SMIL3-20081201/">SMIL</a> grammar for 
					synchronizing text rendering with audio playback.</p>
				
				<p>Media Overlays documents are built using the following elements:</p>
				
				<table class="elemDef">
					<thead>
						<tr>
							<th>Element</th>
							<th>Use</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="root"><a href="http://idpf.org/epub3/latest/mediaoverlays#sec-smil-smil-elem">smil</a></td>
							<td class="use">The <code>smil</code> element is the root element of each Media Overlay, and contains an optional <code>head</code> and required <code>body</code> element</td>
						</tr>
						<tr>
							<td class="firstChild"><a href="http://idpf.org/epub3/latest/mediaoverlays#sec-smil-head-elem">head</a></td>
							<td class="use">The <code>head</code> element may contain metadata in an optional <code>metadata</code> element, but none is required by the EPUB 3 specification</td>
						</tr>
						<tr>
							<td class="secondChild"><a href="http://idpf.org/epub3/latest/mediaoverlays#sec-smil-seq-elem">metadata</a></td>
							<td class="use">The <code>metadata</code> element is an extension element that allows metadata from foreign namespaces to be included in the overlay</td>
						</tr>
						<tr>
							<td class="firstChild"><a href="http://idpf.org/epub3/latest/mediaoverlays#sec-smil-body-elem">body</a></td>
							<td class="use">The <code>body</code> element defines playback through the order of <code>seq</code> and <code>par</code> elements it contains</td>
						</tr>
						<tr>
							<td class="secondChild"><a href="http://idpf.org/epub3/latest/mediaoverlays#sec-smil-seq-elem">seq</a></td>
							<td class="use">The <code>seq</code> element is used to structure an overlay. It is used to represent complex structures such as sections, tables and lists that a reader may want to skip or escape from</td>
						</tr>
						<tr>
							<td class="secondChild"><a href="http://idpf.org/epub3/latest/mediaoverlays#sec-smil-par-elem">par</a></td>
							<td class="use">The <code>par</code> element defines a synchronization point in its child <code>text</code> and/or <code>audio</code> elements</td>
						</tr>
						<tr>
							<td class="thirdChild"><a href="http://idpf.org/epub3/latest/mediaoverlays#sec-smil-text-elem">text</a></td>
							<td class="use">The <code>text</code> element identifies the content document and element to synchronize visual rendering to</td>
						</tr>
						<tr>
							<td class="thirdChild"><a href="http://idpf.org/epub3/latest/mediaoverlays#sec-smil-audio-elem">audio</a></td>
							<td class="use">The <code>audio</code> element identifies the audio file and optional start and end points for playback</td>
						</tr>
					</tbody>
				</table>
				
				<p>In order to synchronize a publication, each content document in a publication must have its own overlay 
					associated with it. Overlays are tied to content documents in the package document manifest using a
					<code>media-overlay</code> attribute with the ID of the <code>item</code> that defines the overlay.</p>
				
			</section>
			
			<section id="mo001-ex" class="example">
				<h3>Examples</h3>
				<figure id="mo001-ex01">
					<figcaption>Example 1 &#8212; A basic overlay document</figcaption>
					
					<p>The following example shows an overlay document for a chapter that consists of
						only a heading and two paragraphs.</p>
					
					<pre class="prettyprint linenums"><code>&lt;smil xmlns="http://www.w3.org/ns/SMIL"
      xmlns:epub="http://www.idpf.org/2007/ops"
      version="3.0">
   &lt;body>
      &lt;seq id="id1"
           epub:textref="chapter_001.xhtml"
           epub:type="bodymatter chapter">
      
         &lt;par id="heading1">
            &lt;text src="chapter_001.xhtml#c01h01"/>
            &lt;audio
                   src="audio/c01.mp4"
                   clipBegin="0:00:00.000" 
                   clipEnd="0:00:05.250"/>
         &lt;/par>
         
         &lt;par id="para1">
            &lt;text src="chapter_001.xhtml#c01p0001"/>
            &lt;audio
                   src="audio/c01.mp4"
                   clipBegin="0:00:05.250"
                   clipEnd="0:00:58.100"/>
         &lt;/par>
         
         &lt;par id="para2">
            &lt;text src="chapter_001.xhtml#c01p0002"/>
            &lt;audio
                   src="audio/c01.mp4"
                   clipBegin="0:00:58.100"
                   clipEnd="0:02:04.000"/>
         &lt;/par>
      &lt;/seq>
   &lt;/body>
&lt;/smil></code></pre>
				</figure>
				
				<figure id="mo001-ex02">
					<figcaption>Example 2 &#8212; Linking a chapter document to its overlay</figcaption>
					
					<pre class="prettyprint linenums"><code>&lt;item id="xchapter_001"
      href="chapter_001.xhtml"
      media-type="application/xhtml+xml"
      media-overlay="chapter_001_overlay"/>

&lt;item id="chapter_001_overlay"
      href="chapter_001_overlay.smil"
      media-type="application/smil+xml"/></code></pre>
				</figure>
			</section>
			
			<section id="mo001-samp" class="sample">
				<h3>Samples</h3>
				
				<p>The <a href="http://code.google.com/p/epub-samples/">EPUB Samples Project</a> contains the following 
					publications that implement Media Overlays:</p>
				
				<ul>
					<li><a href="http://code.google.com/p/epub-samples/source/browse/#svn%2Ftrunk%2F30%2Fmoby-dick-mo%2FOPS">Moby Dick</a></li>
				</ul>
			</section>
			
			<section id="mo001-res" class="res">
				<h3>Additional Resources</h3>
				<ul>
					<li><a href="http://idpf.org/epub3/latest/mediaoverlays">EPUB Media Overlays 3.0</a></li>
					<li><a href="http://www.w3.org/TR/2008/REC-SMIL3-20081201/">Synchronized Multimedia Integration Language (SMIL 3.0)</a></li>
				</ul>
			</section>
		</section>
		
		<?php include_once('../../includes/footer.php'); ?>
	</body>
</html>