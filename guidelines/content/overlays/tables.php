<?php include_once('../../includes/xml-declaration.php'); ?>
<?php $id='mo020'; $nav=1; $nav_items=array('ex','reqs','res'); $category='overlays'; $page_name='Tables'; ?>
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
		
		<section id="mo020" class="section">
			<?php include_once('../../includes/page-title.php'); ?>
			
			<section id="mo020-desc" class="usage">
				<p>In the same way that XHTML tables provide markup structure that can be navigated by readers using
					assistive technologies, so too must Media Overlay documents provide equivalent skippability and escapability
					functionality through markup to facilitate playback.</p>
				
				<p>This structure can be layered into an overlay using <code>seq</code> elements to represent the 
					corresponding rows and cells in the markup. The typical process for converting table markup to
					overlay markup follows:</p>
				
				<ul>
					<li>A single <code>seq</code> element encloses the entire table, and includes an <code>epub:type</code> 
						attribute specifying the property <code class="property">table</code>.</li>
					<li>Each row in the table is represented using a <code>seq</code> element with an <code>epub:type</code> 
						attribute specifying the property <code class="property">table-row</code>.</li>
					<li>Complex table cells &#8212; those that contain two or more synchronization points &#8212; are identified 
						using <code>seq</code> elements with an <code>epub:type</code> attribute specifying the property 
						<code class="property">table-cell</code>. If the cell contains a complex structure like a nested 
						table or list, that structure must be marked up as appropriate to ensure escapability and skippability
						from it.</li>
					<li>Simple table cells containing only a single synchronization point can be represented using 
						<code>par</code> elements with an <code>epub:type</code> attribute specifying the property
						<code class="property">table-cell</code>.</li>
				</ul>
			</section>
			
			<section id="mo020-ex" class="example">
				<h3>Example</h3>
				
				<figure id="mo020-ex01">
					<p>Example 1 &#8212; A comparison of XHTML table markup to overlay table markup</p>
					
					<pre class="prettyprint linenums small"><code>&lt;table>
   &lt;tr>
      &lt;td>
         &lt;p>&#8230;&lt;/p>
         &lt;p>&#8230;&lt;/p>
      &lt;/td>
      &lt;td>&#8230;&lt;/td>
      &lt;td>
         &lt;ul>
            &lt;li>&#8230;&lt;/lt>
         &lt;/ul>
      &lt;/td>
   &lt;/tr>
&lt;/table></code></pre>
					
					<pre class="prettyprint linenums small"><code>&lt;seq epub:type="table">
   &lt;seq epub:type="table-row">
      &lt;seq epub:type="table-cell">
         &lt;par>&#8230;&lt;/par>
         &lt;par>&#8230;&lt;/par>
      &lt;/seq>
      &lt;par epub:type="table-cell">&#8230;&lt;/par>
      &lt;seq epub:type="table-cell">
         &lt;seq epub:type="list">
            &lt;par epub:type="list-item">&#8230;&lt;/par>
         &lt;/seq>
      &lt;/seq>
   &lt;/seq>
&lt;/seq></code></pre>
				</figure>
			</section>
			
			
			<section id="mo020-reqs" class="reqs">
				<h3>Compliance References and Standards</h3>
				<ul>
					<li>EPUB 3 &#8212; <a href="http://idpf.org/epub3/latest/mediaoverlays#sec-smil-seq-elem">The <code>seq</code> Element</a></li>
					<li>EPUB 3 &#8212; <a href="http://idpf.org/epub3/latest/mediaoverlays#sec-smil-par-elem">The <code>par</code> Element</a></li>
					<li>EPUB 3 &#8212; <a href="http://idpf.org/epub3/latest/mediaoverlays#sec-skippability">Skippability</a></li>
					<li>EPUB 3 &#8212; <a href="http://idpf.org/epub3/latest/mediaoverlays#sec-escabaility">Escapability</a></li>
					<li>EPUB 3 &#8212; <a href="http://idpf.org/epub/vocab/structure/#h_tables">Stuctural Semantics Vocabulary &#8212; Tables</a></li>
				</ul>
			</section>
			
			<section id="mo020-res" class="res">
				<h3>Additional Resources</h3>
				<ul>
					<li><a href="http://www.w3.org/TR/2008/REC-SMIL3-20081201/">Synchronized Multimedia Integration Language (SMIL 3.0)</a></li>
				</ul>
			</section>
		</section>
		
		<?php include_once('../../includes/footer.php'); ?>
	</body>
</html>