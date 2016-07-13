<?php include_once('../../includes/xml-declaration.php'); ?>
<?php $id='svg005'; $nav=1; $nav_items=array( 'ex','reqs','res','faq'); $category='svg'; $page_name='Language'; ?>
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
		
		<section id="svg005" class="section">
			<?php include_once('../../includes/page-title.php'); ?>
			
			<section id="svg005-desc" class="usage">
				<p>The language of any text content contained within an SVG image should always be set to
					ensure that assistive technologies render the content properly.</p>
				
				<p>When attached to the root <code>svg</code> element, the <code>xml:lang</code>
					attribute identifies the default language of any text content in the image.</p>
				
				<p>The <code>xml:lang</code> may also be attached to individual components and text
					elements within the image to designate that they contain prose in a language other
					than the default for the image.</p>
			</section>
			
			<section id="svg005-ex" class="example">
				<h3>Examples</h3>
				
				<p>Default language specification</p>
				<pre class="prettyprint linenums"><code>&lt;svg xmlns="http://www.w3.org/2000/svg" xml:lang="en">
   &#8230;
&lt;/svg></code></pre>
			
				<p>Language override</p>
				<pre class="prettyprint linenums"><code>&lt;svg xmlns="http://www.w3.org/2000/svg" xml:lang="en">
   &#8230;
   &lt;text &#8230; >I think therefore I am...&lt;/text>
   &lt;text &#8230; xml:lang="fr">Je pense donc je suis...&lt;/text></code>
   &lt;text &#8230; xml:lang="it">Penso dunque sono...&lt;/text>
   &lt;text &#8230; xml:lang="ja">私は私は思う&lt;/text>
   &#8230;
<code>&lt;/svg></code></pre>
			</section>
			
			<section id="svg005-reqs" class="reqs">
				<h3>Compliance References and Standards</h3>
				
				<ul>
					<li>SVG 1.1 &#8212; <a href="http://www.w3.org/TR/SVG/struct.html#LangSpaceAttrs">The 'xml:lang' and 'xml:space' attributes</a></li>
					<li>SVG 1.1 &#8212; <a href="http://www.w3.org/TR/SVG/access.html#SVGAccessibilityGuidelines">SVG Content Accessibility Guidelines</a></li>
					<li>WCAG 2.0 &#8212; <a href="http://www.w3.org/TR/WCAG20-TECHS/H57.html">H57: Using language attributes on the html element</a></li>
					<li>WCAG 2.0 &#8212; <a href="http://www.w3.org/TR/WCAG20-TECHS/H58.html">H58: Using language attributes to identify changes in the human language</a></li>
				</ul>
			</section>
			
			<section id="svg005-res" class="res">
				<h3>Additional Resources</h3>
				<ul>
					<li><a href="http://www.w3.org/International/getting-started/language">Language on the Web</a></li>
					<li><a href="http://www.w3.org/International/articles/language-tags/">Language tags in HTML and xml</a></li>
					<li><a href="http://www.rfc-editor.org/rfc/rfc5646.txt">RFC5646 &#8212; Tags for Identifying Languages</a></li>
					<li>Mozilla Developer's Network &#8212; <a href="https://developer.mozilla.org/en/SVG">SVG</a></li>
				</ul>
			</section>
			
			<section id="svg005-faq" class="faq">
				<h3>Frequently Asked Questions</h3>
				
				<dl class="faq">
					<dt id="svg005-faq01">Do I need to specify the language when my image is embedded in an XHTML content document with
						an in-scope language attribute?</dt>
					<dd><p>Technically no, since the SVG image will inherit the default language that has been specified.
						It is, however, more prudent to always specify the default language for any encapsulated 
						instances of xml markup, like SVG images and MathML. You will ensure that any text content is rendered 
						properly by assistive technologies regardless of the default context (e.g., in case your image gets
						rendered in an unanticipated way, such as in a pop-out window).
					</p>
					</dd>
				</dl>
			</section>
		</section>
		
		<?php include_once('../../includes/footer.php'); ?>
	</body>
</html>