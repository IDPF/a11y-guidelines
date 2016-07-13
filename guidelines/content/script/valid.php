<?php include_once('../../includes/xml-declaration.php'); ?>
<?php $id='sc010'; $nav=1; $nav_items=array('exes','reqs'); $category='xhtml'; $page_name='Content Validity'; ?>
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
		
		<section id="s000" class="section">
			<?php include_once('../../includes/page-title.php'); ?>
			
			<section id="s000-desc" class="usage">
				<p>Although it is possible for validators to check the initial state of an EPUB prior to its
					being loaded and consumed in a reading system, it is not so easy to determine whether scripted
					interactions will result in invalid markup being injected into a publication.</p>
				
				<p>Developers should note that the <code>write</code> method is 
					<a href="http://www.w3.org/MarkUp/2004/xhtml-faq#docwrite">not available in XHTML</a>. New 
					elements must be created using DOM node functionality. The <code>innerHTML</code> function
					for writing strings of markup is similarly not available.</p>
				
				<p>Using DOM methods will ensure that you create well-formed markup, but the JavaScript functions
					do not check if the content is valid at the point of insertion (or leaves valid markup after
					a deletion). A simple typo, for example, might result in a table cell being added to a forced 
					line break (<code>br</code>), instead of a table row (<code>tr</code>).</p>
				
				<p>While many developers only look at the visual result of their actions, consideration must
					be given to how an assistive technology will process such aberrations. In some cases the mistakes might
					be benign, but often they result in unexpected behaviors being triggered at unexpected
					times, and can limit, or take away, access to the content.</p><br/>
			</section>
			
			<section id="sc010-ex" class="example">
				<h3>Examples</h3>
				<figure id="sc00-ex01">
					<figcaption>Example 1 &#8212; Adding text via the DOM</figcaption>
					<pre class="prettyprint linenums small"><code>&lt;script type="text/javascript">
&lt;![CDATA[
   function writeResult(pass, msg) {
   
       /* get the results div */
       var rDiv = document.getElementById('results');
       
       /* create a new span element */
       var result = document.createElement('span');
           result.setAttribute('class', pass ? 'win' : 'lose');
       
       /* create a text node with the result */
       var message = document.createTextNode(msg);
       
       /* add the message to the span */
       result.appendChild(message);
       
       /* show the new message for to reader */
       rDiv.appendChild(result);
   
   }
]]&gt;
&lt;/script></code></pre>
				</figure>
				
				<figure id="sc00-ex02">
					<figcaption>Example 2 &#8212; Invalid use of the DOM</figcaption>
					<p>The following example inserts a new <code>html</code> element at the start of the
						body.</p>
					<pre class="prettyprint linenums small bad"><code>&lt;script type="text/javascript">
&lt;![CDATA[
   var invalid = document.createElement('html');
       invalid.appendChild(document.createTextNode(msg));
   
   document.body.insertBefore(invalid, document.body.firstChild);
]]&gt;
&lt;/script></code></pre>
				</figure>
			</section>
			
			<section id="s000-reqs" class="reqs">
				<h3>Compliance References and Standards</h3>
				
				<ul>
					<li>WCAG 2.0 &#8212; <a href="http://www.w3.org/TR/WCAG20-TECHS/G134.html">G134: Validating Web pages</a></li>
					<li>WCAG 2.0 &#8212; <a href="http://www.w3.org/TR/WCAG20-TECHS/G192.html">G192: Fully conforming to specifications</a></li>
					<li>WCAG 2.0 &#8212; <a href="http://www.w3.org/TR/WCAG20-TECHS/SCR21.html">SCR21: Using functions of the Document Object Model (DOM) to add content to a page</a></li>
					<li>WCAG 2.0 &#8212; <a href="http://www.w3.org/TR/WCAG20-TECHS/SCR26.html">SCR26: Inserting dynamic content into the Document Object Model immediately following its trigger element</a></li>
				</ul>
			</section>
		</section>
		
		<?php include_once('../../includes/footer.php'); ?>
	</body>
</html>