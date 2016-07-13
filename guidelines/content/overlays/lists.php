<?php include_once('../../includes/xml-declaration.php'); ?>
<?php $id='mo015'; $nav=1; $nav_items=array('ex','reqs','res'); $category='overlays'; $page_name='Lists'; ?>
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
		
		<section id="mo015" class="section">
			<?php include_once('../../includes/page-title.php'); ?>
			
			<section id="mo015-desc" class="usage">
				<p>In order to facilitate the navigation of lists, Media Overlay documents must be marked up so that 
					lists are discoverable &#8212; and consequently escapable and skippable &#8212; by the reader 
					without having to drop out of playback mode.</p>
				
				<p>Although the basic markup for lists in overlays is the same regardless of list type, HTML5
					includes two different types of lists that need to be accommodated.</p>
				
				<p epub:type="bridgehead">Ordered and Unordered Lists</p>
				
				<p>The HTML <code>ol</code> and <code>ul</code> list elements each represent sets of items, 
					and are marked up similarly as follows:</p>
				
				<ul>
					<li>A single <code>seq</code> element encloses all the items in the list. This <code>seq</code> must have
						an <code>epub:type</code> attribute specifying the property <code class="property">list</code>.</li>
					<li>Complex list item (those that contain two or more synchronization points) must also be identified 
						using <code>seq</code> elements. These <code>seq</code> elements must have an <code>epub:type</code> 
						attribute specifying the property <code class="property">list-item</code>. If the list item contains
						complex structures like sublists or tables, those structures must be marked up as appropriate
						to ensure escapability and skippability.</li>
					<li>Simple list items &#8212; containing only a single synchronization point &#8212; can be represented using 
						<code>par</code> elements with an <code>epub:type</code> attribute specifying the property
						<code class="property">list item</code>.</li>
				</ul>
				
				<p epub:type="bridgehead">Definition Lists</p>
				
				<p>HTML definition lists (the <code>dl</code> element) associate one or more names
					(<code>dt</code> elements) with one or more values (<code>dd</code> elements). When constructing these
					lists in an overlay document, the following markup rules should be followed:</p>
				
				<ul>
					<li>A single <code>seq</code> element should enclose all the terms and definitions in the list. This 
						<code>seq</code> must have an <code>epub:type</code> attribute specifying the property 
						<code class="property">list</code>, idnetical to ordered and unordered lists.</li>
					<li>A <code>seq</code> elements should enclose all the related <code>dt</code> and <code>dd</code>
						pairings, and include an <code>epub:type</code> attribute specifying the property 
						<code class="property">list-item</code>.</li>
				</ul>
			</section>
			
			<section id="mo015-ex" class="example">
				<h3>Examples</h3>
				<figure id="mo015-ex01">
					<figcaption>Example 1 &#8212; Comparison of ordered and unordered lists</figcaption>
					
					<pre class="prettyprint linenums small"><code>&lt;ul>
   &lt;li>&#8230;&lt;/li>
   &lt;li>
      &lt;p>&#8230;&lt;/p>
      &lt;p>&#8230;&lt;/p>
   &lt;li>
   &lt;li>
      &lt;ol>
         &lt;li>&#8230;&lt;/li>
      &lt;/ol>
   &lt;li>
&lt;/ul></code></pre>
					
					<pre class="prettyprint linenums small"><code>&lt;seq epub:type="list">
   &lt;par epub:type="list-item">&#8230;&lt;/par>
   &lt;seq epub:type="list-item">
      &lt;par>&#8230;&lt;/par>
      &lt;par>&#8230;&lt;/par>
   &lt;/seq>
   &lt;seq epub:type="list-item">
      &lt;seq epub:type="list">
         &lt;par epub:type="list-item">&#8230;&lt;/par>
      &lt;/seq>
   &lt;/seq>
&lt;/seq></code></pre>
				</figure>
				
				<figure id="mo015-ex02">
					<figcaption>Example 2 &#8212; Comparison of definition lists</figcaption>
					
					<pre class="prettyprint linenums small"><code>&lt;dl>
   &lt;dt>&#8230;&lt;/dt>
   &lt;dd>&#8230;&lt;/dd>
   
   &lt;dt>&#8230;&lt;/dt>
   &lt;dt>&#8230;&lt;/dt>
   &lt;dd>&#8230;&lt;/dd>
   &lt;dd>
      &lt;p>&#8230;&lt;/p>
      &lt;p>&#8230;&lt;/p>
   &lt;dd>
&lt;/dl></code></pre>
					
					<pre class="prettyprint linenums small"><code>&lt;seq epub:type="list">
   &lt;seq epub:type="list-item">
      &lt;par>&#8230;&lt;/par>
      &lt;par>&#8230;&lt;/par>
   &lt;/seq>
   &lt;seq epub:type="list-item">
      &lt;par>&#8230;&lt;/par>
      &lt;par>&#8230;&lt;/par>
      &lt;par>&#8230;&lt;/par>
      &lt;par>&#8230;&lt;/par>
      &lt;par>&#8230;&lt;/par>
   &lt;/seq>
&lt;/seq></code></pre>
				</figure>
			</section>
			
			<section id="mo015-reqs" class="reqs">
				<h3>Compliance References and Standards</h3>
				<ul>
					<li>EPUB 3 &#8212; <a href="http://idpf.org/epub3/latest/mediaoverlays#sec-smil-seq-elem">The <code>seq</code> Element</a></li>
					<li>EPUB 3 &#8212; <a href="http://idpf.org/epub3/latest/mediaoverlays#sec-smil-par-elem">The <code>par</code> Element</a></li>
					<li>EPUB 3 &#8212; <a href="http://idpf.org/epub3/latest/mediaoverlays#sec-skippability">Skippability</a></li>
					<li>EPUB 3 &#8212; <a href="http://idpf.org/epub3/latest/mediaoverlays#sec-escabaility">Escapability</a></li>
					<li>EPUB 3 &#8212; <a href="http://idpf.org/epub/vocab/structure/#h_lists">Stuctural Semantics Vocabulary &#8212; Lists</a></li>
				</ul>
			</section>
			
			<section id="mo015-res" class="res">
				<h3>Additional Resources</h3>
				<ul>
					<li><a href="http://www.w3.org/TR/2008/REC-SMIL3-20081201/">Synchronized Multimedia Integration Language (SMIL 3.0)</a></li>
				</ul>
			</section>
		</section>
		
		<?php include_once('../../includes/footer.php'); ?>
	</body>
</html>