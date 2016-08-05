<?php include_once('../../includes/xml-declaration.php'); ?>
<?php $id='xhtm095'; $nav=1; $nav_items=array('exes','reqs','res','faq'); $category='xhtml'; $page_name='Bibliographies'; ?>
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
		
		<section id="xhtm095" class="section">
			<?php include_once('../../includes/page-title.php'); ?>
			
			<section id="xhtm095-desc" class="usage">
				<p>Bibliographies should be marked up using list elements. Unordered lists are appropriate for traditional
					print bibliographies, as the alphabetization of entries does not infer sequential order (e.g., the
					bibliography can be reverse sorted without losing meaning). Definition lists can also be used for
					non-traditional layouts (e.g., for web link-based bibliographies).</p>
				
				<p>The <code>section</code> element containing the bibliography should be identified using the
					<code>epub:type</code> attribute with the property <code class="property">bibliography</code>.</p>
				
				<p>To faciliate navigating a bibliography, use nested <code>section</code> elements to enclose 
					alphabetically- and numerically-related entries. The <code>title</code> attribute 
					can be attached to the enclosing section to include a title if the sections do not 
					have headings.</p>
					
				<p>The use of lists is recommended as it simplifies navigation by users of assistive technologies.
					Not only does it speed up the movement through entries, but the position within the list can be
				announced, allowing the reader to quickly return to the same spot again later, if needed.</p>
			</section>
			
			<section id="xhtm095-ex" class="example">
				<h3>Examples</h3>
				<figure id="xhtm095-ex01">
					<figcaption>Example 1 &#8212; Bibliography using unordered list</figcaption>
					<pre class="prettyprint linenums"><code>&lt;section epub:type="bibliography">
   &lt;h1>Bibliography&lt;/h1>
   &lt;ul>
      &lt;li>&lt;/li>
      &lt;li>&lt;/li>
      &#8230;
   &lt;/ul>
&lt;/section></code></pre>
				</figure>
				
				<figure id="xhtm095-ex02">
					<figcaption>Example 2 &#8212; Bibliography using sections</figcaption>
					<pre class="prettyprint linenums"><code>&lt;section epub:type="bibliography">
   &lt;h1>Bibliography&lt;/h1>
   
   &lt;section>
      &lt;h3>A&lt;/h3>
      &lt;ul>
         &lt;li>&lt;/li>
         &#8230;
      &lt;/ul>
   &lt;/section>
     
   &lt;section title="B">
      &#8230;
   &lt;/section>
   &#8230;
&lt;/section></code></pre>
				</figure>
				
				<figure id="xhtm095-ex03">
					<figcaption>Example 3 &#8212; Bibliography using definition list</figcaption>
					<pre class="prettyprint linenums"><code>&lt;section epub:type="bibliography">
   &lt;h1>Bibliography&lt;/h1>
   &lt;dl>
      &lt;dt>&lt;/dt>
      &lt;dd>&lt;/dd>
      &#8230;
   &lt;/dl>
&lt;/section></code></pre>
				</figure>
			</section>
			
			<section id="xhtm095-reqs" class="reqs">
				<h3>Compliance References and Standards</h3>
				
				<ul>
					<li>WCAG 2.0 &#8212; <a href="http://www.w3.org/TR/WCAG20-TECHS/G125.html">G125: Providing links to navigate to related Web pages</a></li>
					<li>WCAG 2.0 &#8212; <a href="http://www.w3.org/TR/WCAG20-TECHS/G126.html">G126: Providing a list of links to all other Web pages</a></li>
				</ul>
			</section>
			
			<section id="xhtm095-faq" class="faq">
				<h3>Frequently Asked Questions</h3>
				
				<dl class="faq">
					<dt id="xhtm095-faq01">How can I get a hanging indent?</dt>
					<dd><p>If using an unordered list, first remove any padding or margin from the parent list:</p>
						<pre class="prettyprint linenums"><code class="language-css">section[epub|type~='bibliography'] ul {
   list-style-type: none; 
   margin-left: 0em;
   padding-left: 0em;
}</code></pre>
						
						<p>You can create the hanging indent by manipulating the list item formatting:</p>
						
						<pre class="prettyprint linenums"><code class="language-css">section[epub|type~='bibliography'] li {
   margin-left: 0em;
   padding-left: 2.4em;
   text-indent: -2.4em;
}</code></pre>
						
						<p>Although it's possible to create a hanging indent by using just a negative <code>text-indent</code>
							on the list items, variations in rendering may affect whether the first line is completely
							flush left (i.e., there is no common value).</p>
					</dd>
				</dl>
			</section>
    	</section>
		
		<?php include_once('../../includes/footer.php'); ?>
	</body>
</html>