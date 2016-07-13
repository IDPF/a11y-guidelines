<?php include_once('../../includes/xml-declaration.php'); ?>
<?php $id='css020'; $nav=1; $nav_items=array('ex', 'reqs','faq'); $category='style'; $page_name='Importance Rules'; ?>
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
		
		<section id="css020" class="section">
			<?php include_once('../../includes/page-title.php'); ?> 
			
			<section id="css020-desc" class="usage">
				<p>CSS importance rules define who wins when matching CSS definitions are encountered, and 
					ensure that readers can override the author's default styles for critical features such 
					as the font family, size and color, and background color.</p>
				
				<p>To declare that a CSS property definition is important, an exclamation point (<code>!</code>) 
					followed by the keyword <code>important</code> must be included after 
					the declaration and before any semi-colon, as in the following example:</p>
				
				<pre class="prettyprint linenums"><code class="lang-css">body {
   color: rgb(0,0,0) !important;
}</code></pre>
				
				<div epub:type="note">
					<p class="label">Note</p>
					<p>This syntax is often counter-intuitive to programmers, as the exclamation point in programming languages
						typically negates the statement that follows (i.e., that color is <em>not</em> important). The 
						exclamation point here is nothing more than a delimiter. A space can be included between
						the exclamation point and the <code>important</code> keyword for additional clarity.</p>
				</div>
				
				<p>Although content creators may specify that their definitions are important, the CSS specification enshrines that
					the reader's important preferences always win out. The precedence order for applying matching style 
					definitions can be reformulated for EPUBs as follows:</p>
				
				<ol>
					<li>Reader important declarations </li>
					<li>Author important declarations</li>
					<li>Author normal declarations</li>
					<li>Reader normal declarations</li>
					<li>Reading System declarations</li>
				</ol>
				
				<p>Note that reading systems don't always provide full control over the layout, regardless of who specifies
					a definition. Although the reading system defaults are technically the lowest on the ladder, reading systems 
					often rigidly control such rendering aspects as the body margins and attempts at absolute positioning.</p>
				
				<p>Whether a reader has the option to change the default styles and style sheets is reading system-dependent,
					so authors should not take the approach that it is the reader's responsibility to fix known formatting
					problems. Reading systems typically provide built-in functionality to change font sizes, font colors, 
					background colors, etc. so that the reader does not have to be technically proficient with CSS and style 
					overrides. These basic overrides may be the only control readers can exert over problematic layouts,
					further making it problematic for readers to correct author-introduced accessibility roadblocks.</p>
				
				<p>One consideration related to precedence is to not define styles using the <code>style</code> 
					attribute. When applying a custom style sheet, the reader or reading system may remove any linked style sheets, 
					but leave any <code>style</code> attribute declarations in place. Unless the reader style 
					sheet declares all its definitions high importance, these artifacts in the markup have the potential to override 
					the reader's preference and interfere with their ability to read the document.</p>
			</section>
			
			<section id="css020-ex" class="example">
				<h3>Example</h3>
				<figure id="css020-ex01">
					<figcaption>Example 1 &#8212; Overriding the default font</figcaption>
					<p>Author style sheet declaration defining a dark-blue serif font on a light-grey background</p>
					<pre class="prettyprint linenums"><code class="lang-css">body {
   font-family: "Times New Roman",serif;
   font-size: 1em;
   color: rgb(0,0,130);
   background-color: rgb(240,240,240);
}</code></pre>
					<p>Reader's higher-precedence overrides to set black on white, double-sized, sans-serif font</p>
					<pre class="prettyprint linenums"><code class="lang-css">body {
   font-family: Arial,sans-serif !important;
   font-size: 200% !important;
   color: rgb(0,0,0) !important;
   background-color: rgb(255,255,255) !important;
}</code></pre>
				</figure>
			</section>
			
			<section id="css020-reqs" class="reqs">
				<h3>Compliance References and Standards</h3>
				
				<ul>
					<li>CSS2.1 &#8212; <a href="http://www.w3.org/TR/CSS2/cascade.html#important-rules">!important rules</a></li>
					<li>WCAG 2.0 &#8212; <a href="http://www.w3.org/TR/WCAG20-TECHS/C22.html">C22: Using CSS to control visual presentation of text</a></li>
				</ul>
			</section>
			
			<section id="css020-faq" class="faq">
				<h3>Frequently Asked Questions</h3>
				
				<dl class="faq">
					<dt id="css020-faq01">Why do some sites say the author rules always win?</dt>
					<dd><p>CSS1 allowed content creators to override all user rules. CSS2 fixed this problem back in favor
							of the reader, as the decorative needs of authors should always lose to the accessibility needs of
							readers.</p>
						<p>As EPUB 3 defines a profile of CSS 2.1 plus select CSS3 properties, this old conflict is not relevant
							to discussions of EPUB 3 content styling.</p></dd>
					<dt id="css020-faq02">What is the use of importance if the reader can always win?</dt>
					<dd><p>Although the reader wins, importance is not just about author versus reader. When authoring
						content, multiple style sheets may be imported. Each of these style sheets can define overlapping
						rules for the same content, but only some may be customizable by the author. Importance rules
						ensure the author can override any declarations regardless of the order of the important rule
						in the cascade chain.</p></dd>
				</dl>
			</section>
		</section>
		
		<?php include_once('../../includes/footer.php'); ?>
	</body>
</html>