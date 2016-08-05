<?php include_once('../../includes/xml-declaration.php'); ?>
<?php $id='xhtm040'; $nav=1; $nav_items=array('exes','reqs','res','faq'); $category='xhtml'; $page_name='Headings'; ?>
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
		
		<section id="xhtm040" class="section">
			<?php include_once('../../includes/page-title.php'); ?>
			
			<section id="xhtm040-desc" class="usage">
				<p>Headings remain one of the primary means of navigation for users of assistive technologies. Without
					widespread support for the HTML5 outline algorithm, and with the algorithm at risk of removal from
					HTML5, headings should be treated as the primary indicator of the structural outline of your content
					within each content document.</p>
				
				<p>Each <code>section</code> should have a numbered heading (e.g., <code>h1</code>) that reflects its level in the document 
					hierarchy, as numbered headings allow assistive technologies, regardless of their support for HTML5,
					to navigate the document structure.</p>
				
				<p>Only a single heading should be included in a section. If you need to include subheadings, it is best to
					incorporate them into the main heading or include them in subsequent paragraphs using a <code>header</code>
					tag to encapsulate (<a href="#xhtm040-ex03">Example 2</a> shows both usage examples).</p>
				
				<p>If a section does not have a heading, consider including a <code>title</code> or <code>aria-label</code> attribute 
					on the <code>section</code> with the implied nature (e.g., 'chapter' or 'part'). Although it is anticipated that 
					assistive technologies will be able to voice/render the <code>epub:type</code> semantics in such cases, a fallback 
					attribute is prudent at this time. (Note that the <code>title</code> attribute may present a visible tooltip in contexts
					where the content can be hovered (e.g., by a mouse), whereas <code>aria-label</code> will not.)</p>
				
				<div epub:type="note">
					<p class="label">Note</p>
					<p>It is not recommended that heading elements be used within <code>figure</code>, <code>blockquote</code>
						and other HTML5 sectioning root elements at this time. Although these headings are technically exempt 
						from the document outline, with only minimal support for the outline algorithm they will be treated as
						structural headings by assistive technologies, impeding progress through a document.</p>
				</div>
			</section>
			
			<section id="xhtm040-ex" class="example">
				<h3>Examples</h3>
				
				<figure id="xhtm040-ex01">
					<figcaption>Example 1 &#8212; Numbered headings</figcaption>
					<pre class="prettyprint linenums"><code>&lt;section epub:type="division">
  &lt;h1>Book One: 1805&lt;/h1>
      &lt;section epub:type="chapter">
         &lt;h2>Chapter 1&lt;/h2></code></pre>
				</figure>
				
				<figure id="xhtm040-ex02">
					<figcaption>Example 2 &#8212; Headings and Subtitles</figcaption>
					<p epub:type="bridgehead">Combined</p>
					<pre class="prettyprint linenums"><code>&lt;section epub:type="chapter">
   &lt;h1>&lt;span epub:type="title">ORIGIN OF THE WORLD.&#8212;FIRST DYNASTY.&lt;/span>
   &lt;span epub:type="subtitle">URANUS AND GÆA. (Cœlus and Terra.)&lt;/span>&lt;/h1>
</code></pre>
					<p epub:type="bridgehead">Using <code>header</code></p>
					<pre class="prettyprint linenums"><code>&lt;section epub:type="chapter">
   &lt;header>
      &lt;h1>ORIGIN OF THE WORLD.&#8212;FIRST DYNASTY.&lt;/h1>
      &lt;p epub:type="subtitle">URANUS AND GÆA. (Cœlus and Terra.)&lt;/p>
   &lt;/header>
</code></pre>
				</figure>
				
				<figure id="xhtm040-ex03">
					<figcaption>Example 3 &#8212; Headingless sections</figcaption>
					<p epub:type="bridgehead"><code>title</code> attribute</p>
					<pre class="prettyprint linenums"><code>&lt;section epub:type="preamble" title="preamble">
   &lt;p>
      How these papers have been placed in sequence 
      will be made manifest in the reading of them.
      &#8230;
   &lt;/p>
&lt;/section></code></pre>
					<p epub:type="bridgehead"><code>aria-label</code> attribute</p>
					<pre class="prettyprint linenums"><code>&lt;section epub:type="preamble" aria-label="preamble"></code></pre>
				</figure>
			</section>
			
			<section id="xhtm040-reqs" class="reqs">
				<h3>Compliance References and Standards</h3>
				
				<ul>
					<li>HTML5 &#8212; <a href="http://www.w3.org/TR/html5/sections.html#the-h1,-h2,-h3,-h4,-h5,-and-h6-elements">The <code>h1</code>, <code>h2</code>, <code>h3</code>, <code>h4</code>, <code>h5</code>, and <code>h6</code> elements</a></li>
					<li>HTML5 &#8212; <a href="http://www.w3.org/TR/html5/sections.html#headings-and-sections">Headings and sections</a></li>
					<li>HTML5 &#8212; <a href="http://www.w3.org/TR/html5/common-idioms.html#sub-head">Subheadings, subtitles, alternative titles and taglines</a></li>
					<li>WCAG 2.0 &#8212; <a href="http://www.w3.org/TR/WCAG20-TECHS/H42.html">H42: Using h1-h6 to identify headings</a></li>
					<li>WCAG 2.0 &#8212; <a href="http://www.w3.org/TR/WCAG20-TECHS/H69.html">H69: Providing heading elements at the beginning of each section of content</a></li>
					<li>WCAG 2.0 &#8212; <a href="http://www.w3.org/TR/WCAG20-TECHS/G130.html">G130: Providing descriptive headings</a></li>
					<li>WCAG 2.0 &#8212; <a href="http://www.w3.org/TR/WCAG20-TECHS/G141.html">G141: Organizing a page using headings</a></li>
				</ul>
			</section>
			
			<section id="xhtm040-res" class="res">
				<h3>Additional Resources</h3>
				<ul>
					<li><a href="http://www.paciellogroup.com/blog/2011/11/html5-semantics-and-accessibility/">HTML5 semantics and accessibility</a></li>
				</ul>
			</section>
			
			<section id="xhtm040-faq" class="faq">
				<h3>Frequently Asked Questions</h3>
				
				<dl class="faq">
					<dt id="xhtm040-faq01">Why not use generic <code>h1</code> headings?</dt>
					<dd><p>Not all assistive technologies handle HTML5's new allowance that a <code>section</code> can begin anew with
						an <code>h1</code> heading. It is best to avoid the problems this will cause until it is clearer whether the
						document outline algorithm will remain a part of HTML5 and what devices support it.</p>
					</dd>
					<dt id="xhtm040-faq02">Why not use <code>hgroup</code> for multiple headings?</dt>
					<dd><p>The <code>hgroup</code> element has been removed from HTML 5.0. Its future is uncertain.</p>
					</dd>
				</dl>
			</section>
		</section>
		
		<?php include_once('../../includes/footer.php'); ?>
	</body>
</html>