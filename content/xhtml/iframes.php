<?php include_once('../../includes/xml-declaration.php'); ?>
<?php $id='xhtm110'; $nav=1; $nav_items=array('ex','reqs','res','faq'); $category='xhtml'; $page_name='Inline Frames'; ?>
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
		
		<section id="xhtm110" class="section">
			<?php include_once('../../includes/page-title.php'); ?>
			
			<section id="xhtm110-desc" class="usage">
				<p>Although HTML5 no longer includes frame sets, inline frames (<code>iframe</code>) are still available
					for embedding content within a page.</p>
				
				<p>Inline frames generally integrate well with assistive technologies, but the following accessibility 
					considerations should always be adhered to when using them:</p>
				
				<ul>
					<li>Each inline frame should include an explanatory title that clearly indicates the purpose of 
						the embedded content (in a <code>title</code> attribute on the <code>iframe</code> element).</li>
					<li>If the frame does not contain content for the reader, indicate as much in the <code>title</code>,
						set its CSS <code>display</code> property to <code>none</code>, and height and width to 0. To ensure that
						readers cannot tab to the element, set the <code>tabindex</code> attribute to <code>-1</code>.</li>
					<li>The body of the <code>iframe</code> element should provide a fallback for reading systems 
						that do not support inline frames (e.g., a direct link to the content file).</li>
					<li>The <code>seamless</code> attribute should be set to <code class="value">true</code> when
						the content in the frame is intended to be integrated into the page without distinction. 
						When set, the reading system should not announce in speech media that the frame is 
						present, removing a potential nuisance for readers. <span class="atrisk">(Note: this attribute
							has been marked as at risk for removal from HTML5.)</span></li>
					<li>When setting the height and width of the <code>iframe</code>, a relative unit such as percentage or
						ems should be used to facilitate resizing.</li>
					<li>Scrolling should be set to <code>auto</code> so that if the reader resizes the 
						content in the frame it can still be accessed if it becomes bigger than the available
						space.</li>
				</ul>
			</section>
			
			<section id="xhtm110-ex" class="example">
				<h3>Example</h3>
				<figure id="xhtm110-ex01">
					<figcaption>Example 1 &#8212; An accessible <code>iframe</code></figcaption>
					<pre class="prettyprint linenums"><code>&lt;iframe
        href="quiz01.xhtml"
        title="Quiz 1"
        class="quiz">
   Your reading system does not support inline 
   frames or support has been disabled. Please 
   follow &lt;a href="quiz01.xhtml">this link&lt;/a> 
   to open the associated content document.
&lt;/iframe></code></pre>
				</figure>
				
				<figure id="xhtm110-ex02">
					<figcaption>Example 2 &#8212; An invisible <code>iframe</code></figcaption>
					<pre class="prettyprint linenums"><code>&lt;iframe
        href="script.xhtml"
        title="empty"
        tabindex="-1"
        height="0"
        width="0"
        class="hidden">
&lt;/iframe></code></pre>
				</figure>
			</section>
			
			<section id="xhtm110-reqs" class="reqs">
				<h3>Compliance References and Standards</h3>
				
				<ul>
					<li>HTML5 &#8212; <a href="http://www.w3.org/TR/html5/embedded-content-0.html#the-iframe-element">The <code>iframe</code> element</a></li>
					<li>WCAG 2.0 &#8212; <a href="http://www.w3.org/TR/WCAG20-TECHS/H64.html">H64: Using the title attribute of the frame and iframe elements</a></li>
				</ul>
			</section>
			
			<section id="xhtm110-res" class="res">
				<h3>Additional Resources</h3>
				<ul>
					<li><a href="http://www.paciellogroup.com/blog/2010/04/making-sure-hidden-frames-are-hidden/">Making sure hidden frames are hidden</a></li>
				</ul>
			</section>
			
			<section id="xhtm110-faq" class="faq">
				<h3>Frequently Asked Questions</h3>
				<dl class="faq">
					<dt id="xhtm110-faq01">Should I set <code>role="presentation"</code> when indicating an <code>iframe</code> does not contain user content?</dt>
					<dd><p>No, it is not valid to use the presentation role on <code>iframe</code> elements. The presentation role only removes the
						element it is on from the accessibility tree, not its descendant content, so would not have the desired effect if used.</p></dd>
				</dl>
			</section>
		</section>
		
		<?php include_once('../../includes/footer.php'); ?>
	</body>
</html>