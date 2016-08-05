<?php include_once('../../includes/xml-declaration.php'); ?>
<?php $id='xhtm042'; $nav=1; $nav_items=array('ex','reqs','res'); $category='xhtml'; $page_name='Bolding and Italics'; ?>
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
		
		<section id="xhtm042" class="section">
			<?php include_once('../../includes/page-title.php'); ?>
			
			<section id="xhtm042-desc" class="usage">
				<p>Bolding and italics are often misunderstood as nothing more than styling, but they
					carry various kinds of information pertinent to the text: emphasized points, 
					changes in tone or location, special names, etc. Unless the correct semantic tagging 
					is used to apply this formatting, however, the same information cannot be conveyed
					to non-visual readers.</p>
				
				<p>The following table outlines how to apply the various HTML5 and CSS methods for
					bolding and italics:</p>
				
				<table>
					<colgroup>
						<col style="width: 10em;"/>
						<col style="width: *;"/>
					</colgroup>
					<tr>
						<th>Element/Propety</th>
						<th>Purpose</th>
					</tr>
					<tr>
						<td class="center"><code>em</code></td>
						<td>The <code>em</code> element indicates the text is to be vocally stressed.</td>
					</tr>
					<tr>
						<td class="center"><code>strong</code></td>
						<td>The <code>strong</code> element indicates importance, such as when making imperative statements or using signal words like 'warning' and 'alert'.</td>
					</tr>
					<tr>
						<td class="center"><code>i</code></td>
						<td>The <code>i</code> element is used when the use of italics indicate a change in tone
							or voice. An example provided in the HTML5 specification is for an extended dream sequence,
							but could be any similar divergence from the main narrative into thought or
							remembrance. The <code>i</code> element is also used whenever there is semantic 
							significance behind the emphasis (e.g., the italicized words indicate a technical term,
							foreign words, etc.).</td>
					</tr>
					<tr>
						<td class="center"><code>b</code></td>
						<td>The <code>b</code> element is used whenever the bolding conveys semantic meaning,
							similar to the use of <code>i</code> for semantic tagging (e.g., keywords).</td>
					</tr>
					<tr>
						<td class="center">
							<code class="property">font-style: italic</code><br/>
							<code class="property">font-weight: bold</code>
						</td>
						<td>The CSS properties for bolding and italics should be used whenever the use of bolding and italics 
							is presentational (for example, on headings and lead-in words). CSS formatting carries no semantics,
							so the emphasis will not be noted by assistive technologies.</td>
					</tr>
				</table>
			</section>
			
			<section id="xhtm042-ex" class="example">
				<h3>Example</h3>
				<figure id="xhtm042-ex01">
					<figcaption>Example 1 &#8212; Use of the <code>em</code> for vocal stress</figcaption>
					<pre class="prettyprint linenums"><code>&lt;p>
   &#8230; There was nothing so &lt;em>very&lt;/em> remarkable
   in that; nor did Alice think it so &lt;em>very&lt;/em>
   much out of the way to hear the Rabbit say to
   itself, &lt;q>Oh dear! Oh dear! I shall be 
   late!&lt;/q> &#8230;
&lt;/p></code></pre>
					<pre class="prettyprint linenums"><code>&lt;p>
   &#8230; 'Really this is what is meant by the Fourth
   Dimension, though some people who talk about the 
   Fourth Dimension do not know they mean it. It is 
   only another way of looking at Time. &lt;em>There 
   is no difference between Time and any of the 
   three dimensions of Space except that our 
   consciousness moves along it&lt;/em>. &#8230;
&lt;/p></code></pre>
				</figure>
				<figure id="xhtm042-ex02">
					<figcaption>Example 2 &#8212; Use of <code>strong</code> for indicating importance</figcaption>
					<pre class="prettyprint linenums"><code>&lt;p>
   &lt;strong>Warning&lt;/strong>, all features should 
   be considered unstable &#8230;
&lt;/p></code></pre>
					<pre class="prettyprint linenums"><code>&lt;p>
   &lt;strong>Do not feed the bears!&lt;/strong> 
&lt;/p></code></pre>
				</figure>
				<figure id="xhtm042-ex03">
					<figcaption>Example 3 &#8212; Use of <code>i</code> element for latin terms</figcaption>
					<pre class="prettyprint linenums"><code>&lt;p>
   When hybrids are able to breed &lt;i>inter se&lt;/i>, 
   they transmit &#8230;
&lt;/p></code></pre>
					<pre class="prettyprint linenums"><code>&lt;p>
   Among the sea-shells, the most abundant was the 
   &lt;i>Patella deaurat&lt;/i> &#8230;
&lt;/p></code></pre>
				</figure>
			</section>
			
			<section id="xhtm042-reqs" class="reqs">
				<h3>Compliance References and Standards</h3>
				
				<ul>
					<li>HTML5 &#8212; <a href="http://www.w3.org/TR/html5/text-level-semantics.html#the-em-element">The <code>em</code> element</a></li>
					<li>HTML5 &#8212; <a href="http://www.w3.org/TR/html5/text-level-semantics.html#the-strong-element">The <code>strong</code> element</a></li>
					<li>HTML5 &#8212; <a href="http://www.w3.org/TR/html5/text-level-semantics.html#the-i-element">The <code>i</code> element</a></li>
					<li>HTML5 &#8212; <a href="http://www.w3.org/TR/html5/text-level-semantics.html#the-b-element">The <code>b</code> element</a></li>
					<li>WCAG 2.0 &#8212; <a href="http://www.w3.org/TR/WCAG20-TECHS/H49.html">H49: Using semantic markup to mark emphasized or special text</a></li>
				</ul>
			</section>
			
			<section id="xhtm042-res" class="res">
				<h3>Additional Resources</h3>
				<ul>
					<li><a href="http://accessibility.psu.edu/boldface">Bold and Italic Formatting</a></li>
				</ul>
			</section>
		</section>
		
		<?php include_once('../../includes/footer.php'); ?>
	</body>
</html>