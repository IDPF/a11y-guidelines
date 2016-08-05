<?php include_once('../../includes/xml-declaration.php'); ?>
<?php $id='xhtm105'; $nav=1; $nav_items=array('ex','reqs','faq','res'); $category='xhtml'; $page_name='Indexes'; ?>
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
		
		<section id="xhtm105" class="section">
			<?php include_once('../../includes/page-title.php'); ?>
			
			<div epub:type="note">
				<p class="label">Note</p>
				<p>Work is currently ongoing in the IDPF to define a markup model for indexes. This page will
					be updated once production methods are clarified.</p>
			</div>
			
			<section id="xhtm105-desc" class="usage">
				<p>Indexes should be marked up using unordered lists, as the alphatized order of the entries is not
					significant (e.g., an index can be reverse sorted without loss of information). If page numbers 
					are included in the publication, page references in index entries can be linked.</p>
				
				<p>To faciliate navigating an index, use nested <code>section</code> elements to enclose alphabetically- and
					numerically-related entries. Many indexes include the number or letter as a heading, but if
					one is not present or wanted, include the number or letter in a <code>title</code> attribute 
					on the enclosing section so that it can be announced by assistive technologies.</p>
					
				<p>The use of lists is recommended as it simplifies navigation by users of assistive technologies.
					Not only does it speed up the movement through entries, but the position within the list can be
				announced, allowing the reader to quickly return to the same spot again later, if needed.</p>
			</section>
			
			<section id="xhtm105-ex" class="example">
				<h3>Examples</h3>
				
				<figure id="xhtm105-ex01">
					<figcaption>Example 1 &#8212; An index with headings</figcaption>
					<pre class="prettyprint linenums"><code>&lt;section epub:type="index">
   &lt;h1>Index&lt;/h1>
   &lt;section epub:type="part">
      &lt;h2>A&lt;/h2>
      &lt;ul>
         &lt;li>
            Apples, &lt;a href="#page01">1&lt;/a>, 
            &lt;a href="#page27">27&lt;/a>
         &lt;/li>
         &#8230;
      &lt;/ul>
   &lt;/section>
   &#8230;
   &lt;section epub:type="part">
      &lt;h2>O&lt;/h2>
      &lt;ul>
         &lt;li>Oranges
            &lt;ul>
               &lt;li>
                  Florida, &lt;a 
                  href="#page03">3&lt;/a>&#8211;&lt;a
                  href="#page05">5&lt;/a>
               &lt;/li>
               &#8230;
            &lt;/ul>
         &lt;/li>
         &#8230;
      &lt;/ul>
   &lt;/section>
   &#8230;
&lt;/section></code></pre>
				</figure>
				
				<figure id="xhtm105-ex02">
					<figcaption>Example 1 &#8212; A index without headings</figcaption>
					<pre class="prettyprint linenums"><code>&lt;section epub:type="index">
   &lt;h1>Index&lt;/h1>
   &lt;section epub:type="part" title="A">
      &#8230;
   &lt;/section>
   &lt;section epub:type="part" title="B">
      &#8230;
   &lt;/section>
   &lt;section epub:type="part" title="C">
      &#8230;
   &lt;/section>
   &#8230;
&lt;/section></code></pre>
				</figure>
			</section>
			
			<section id="xhtm105-reqs" class="reqs">
				<h3>Compliance References and Standards</h3>
				
				<ul>
					<li>HTML5 &#8212; <a href="http://dev.w3.org/html5/spec/single-page.html"></a></li>
					<li>WCAG 2.0 &#8212; <a href="http://www.w3.org/TR/WCAG20-TECHS/"></a></li>
				</ul>
			</section>
			
			<section id="xhtm105-faq" class="faq">
				<h3>Frequently Asked Questions</h3>
				
				<dl class="faq">
					<dt></dt>
					<dd><p></p></dd>
				</dl>
			</section>
			<section id="xhtm105-res" class="res">
				<h3>Additional Resources</h3>
				<ul>
					<li><a href="">...</a></li>
				</ul>
			</section>
		</section>
		
		<?php include_once('../../includes/footer.php'); ?>
	</body>
</html>