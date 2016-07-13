<?php include_once('../../includes/xml-declaration.php'); ?>
<?php $id='xhtm025'; $nav=1; $nav_items=array('ex','res'); $category='xhtml'; $page_name='Published Works'; ?>
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
		
		<section id="xhtm025" class="section">
			<?php include_once('../../includes/page-title.php'); ?>
			
			<section id="xhtm025-desc" class="usage">
				<p>When including a list of works also by an author (e.g. on the series title page), use either 
					ordered or unordered lists to itemize the entries.</p>
				
				<p>If the list of works conveys information that would be lost if re-ordered (e.g., chronological
					listing by publication date), use an ordered list to indicate the importance to readers
					using assistive technologies. If the titles are ordered alphabetically, 
					or in any other general way, use an unordered list.</p>
				
				<p>The <a href="http://www.daisy.org/z3998/2012/vocab/structure/">Z39.98 Structural Semantics Vocabulary</a> 
					includes a <code class="property">published-works</code> property for identifying the section, but you will 
					need to define a prefix in order to use it.</p>
			</section>
			
			<section id="xhtm025-ex" class="example">
				<h3>Example</h3>
				
				<p>Simple list of works</p>
				<pre class="prettyprint linenums"><code>&lt;html &#8230;
      epub:prefix="z3998:
      http://www.daisy.org/z3998/2012/vocab/structure/">
   &#8230;
   &lt;section epub:type="z3998:published-works">
      &lt;h2>Also by the author&lt;/h2>
      &lt;ul class="works">
         &lt;li>The Tempest&lt;/li>
         &lt;li>Henry IV, Part 2&lt;/li>
         &lt;li>King Lear&lt;/li>
      &lt;/ul>
   &lt;/section></code></pre>
				
				<p>Complex list of works</p>
				<pre class="prettyprint linenums"><code>&lt;html &#8230;
      epub:prefix="z3998:
      http://www.daisy.org/z3998/2012/vocab/structure/">
   &#8230;
   &lt;section epub:type="z3998:published-works">
      &lt;h2>Also by the author&lt;/h2>
         
      &lt;section>
         &lt;h3>Comedies&lt;/h3>
         &lt;ul>
            &lt;li>The Tempest&lt;/li>
         &lt;/ul>
      &lt;/section>
         
      &lt;section>
         &lt;h3>Histories&lt;/h3>
         &lt;ul>
            &lt;li>Henry IV, Part 2&lt;/li>
         &lt;/ul>
      &lt;/section>
         
      &lt;section>
         &lt;h3>Tragedies&lt;/h3>
         &lt;ul>
            &lt;li>King Lear&lt;/li>
         &lt;/ul>
      &lt;/section>
   &lt;/section>
   &#8230;
&lt;/html></code></pre>
			</section>
			
			<section id="xhtm025-res" class="res">
				<h3>Additional Resources</h3>
				
				<ul>
					<li><a href="http://www.daisy.org/z3998/2012/vocab/structure/">Z39.98 Structural Semantics Vocabulary</a></li>
				</ul>
			</section>
		</section>
		
		<?php include_once('../../includes/footer.php'); ?>
	</body>
</html>