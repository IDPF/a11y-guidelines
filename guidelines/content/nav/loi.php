<?php include_once('../../includes/xml-declaration.php'); ?>
<?php $id='nav020'; $nav=1; $nav_items=array( 'ex','reqs','res','faq'); $category='nav'; $page_name='Lists of Illustrations'; ?>
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
		
		<section id="nav020" class="section">
			<?php include_once('../../includes/page-title.php'); ?>
			
			<section id="nav020-desc" class="usage">
				<p>To facilitate navigation of the content, publications should include a guide to all the 
					illustrations and figures they contain. Without these quick links, there is often no easy
					way for many readers to locate them again. They instead have to navigate through the content
					of the book until they reach the location.</p>
				
				<p>The EPUB navigation document can be used to provide this functionality. A list of illustrations can 
					be defined in the same manner as the table of contents <a href="toc.php">the <code>toc nav</code></a>, 
					but using a <code>nav</code> element with an <code>epub:type</code> attribute with the value 
					<code class="property">loi</code> (see <a href="#nav020-ex01">Example 1</a>). The <code>loi nav</code>
					should contain only a single ordered list of entries, with each entry linking to a figure or illustration.</p>
				
				<p>Note that although this navigation aid is not formally defined in the EPUB specification, 
					navigation documents were made extensible for this purpose.
					When creating an <code>loi nav</code>, however, you should also embed the navigation document as 
					content within the publication. Reading systems that minimally comply with the specification may 
					not provide specialized access to an <code>loi nav</code>.</p>
				
				<p>An entry for the list of illustrations should also be included in <a href="landmarks.php">the 
					<code>landmarks nav</code></a>. If the reading system does not support specialized rendering of the 
					list, a landmarks entry will enable quick reference to the embedded version.</p>
			</section>
			
			<section id="nav020-ex" class="example">
				<h3>Example</h3>
				<figure id="nav020-ex01">
					<figcaption>Example 1 &#8212; List of Illustrations</figcaption>
					<pre class="prettyprint linenums"><code>&lt;nav epub:type="loi">
   &lt;h2>List of Illustrations&lt;/h2>
   &lt;ol>
      &lt;li>
         &lt;a href="ch01.html#fig01">Figure 1.1&lt;/a>
      &lt;/li>
      &lt;li>
         &lt;a href="ch01.html#fig02">Figure 1.2&lt;/a>
      &lt;/li>
      &#8230;
   &lt;/ol>
&lt;/nav></code></pre>
				</figure>
				
				<figure id="nav020-ex02">
					<figcaption>Example 2 &#8212; Referencing from the landmarks nav</figcaption>
					<p>The <code>landmarks nav</code> can reference elements in the same file as itself using
						an <code>href</code> attribute that references the list's <code>id</code>:</p>
					<pre class="prettyprint linenums"><code>&lt;nav epub:type="loi" id="illustrations">
   &#8230;
&lt;/nav>

&lt;nav epub:type="landmarks">
   &#8230;
   &lt;li>
      &lt;a href="#illustrations" epub:type="loi">List of 
      Illustrations&lt;/a>
   &lt;/li>
   &#8230;
&lt;/nav></code></pre>
				</figure>
			</section>
			
			<section id="nav020-reqs" class="reqs">
				<h3>Compliance References and Standards</h3>
				<ul>
					<li>EPUB 3 &#8212; <a href="http://idpf.org/epub3/latest/contentdocs#sec-xhtml-nav-def-types-other">Other <code>nav</code> Elements</a></li>
					<li>HTML5 &#8212; <a href="http://www.w3.org/TR/html5/sections.html#the-nav-element">The <code>nav</code> element</a></li>
				</ul>
			</section>
			
			<section id="nav020-faq" class="faq">
				<h3>Frequently Asked Questions</h3>
				
				<dl class="faq">
					<dt id="nav020-faq01">Do I have to use the EPUB navigation document to define my list of illustrations?</dt>
					<dd><p>No, using the navigation document simplifies the creation process (i.e., requires creating only
						one instance for two uses), but is not required for accessibility or other purposes.</p>
					</dd>
				</dl>
			</section>
		</section>
		
		<?php include_once('../../includes/footer.php'); ?>
	</body>
</html>