<?php include_once('../../includes/xml-declaration.php'); ?>
<?php $id='xhtm090'; $nav=1; $nav_items=array( 'exes','reqs','res','faq'); $category='xhtml'; $page_name='Context Breaks'; ?>
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
		
		<section id="xhtm090" class="section">
			<?php include_once('../../includes/page-title.php'); ?>
			
			<section id="xhtm090-desc" class="usage">
				<p>A context break represents a shift in thought, time, location, etc. in a work of fiction or non-fiction
					below the level of a section. These changes are typically represented by an extra blank line between
					paragraphs, sometimes including asterisms and other decorations (traditionally when the shift occurs
					immediately at the bottom of a print page).</p>
				
				<p>In the past, CSS margins and images have been used to include context breaks, but the HTML5 specification 
					has redefined the semantics of the <code>hr</code> element specifically for this purpose. The element 
					should now always be used to represent these context changes. CSS  styling can be applied to change 
					the default appearance.</p>
				
				<p>The <code>hr</code> element should never be used for decorative purposes, such as between sections or 
					at the beginning or end of them.</p>
			</section>
			
			<section id="xhtm090-ex" class="example">
				<h3>Examples</h3>
				
				<figure id="xhtm090-ex01">
					<figcaption>Example 1 &#8212; Blank-line context change</figcaption>
					<pre class="prettyprint linenums"><code>&lt;style type="text/css">hr.transition {
   width: 0em;
   margin: 0.5em 0em;
}
&lt;/style>

&lt;p>&lt;/p>
&lt;hr class="transition"/>
&lt;p>&lt;/p></code></pre>
				</figure>
				
				<figure id="xhtm090-ex02">
					<figcaption>Example 2 &#8212; Asterism (CSS only)</figcaption>
					<pre class="prettyprint linenums"><code class="language-css">hr.transition {
   background: url('img/asterisks.gif') no-repeat center;
   height: 1em;
   border: none;
   margin: 0.5em 0em;
}</code></pre>
				</figure>
			</section>
			
			<section id="xhtm090-reqs" class="reqs">
				<h3>Compliance References and Standards</h3>
				
				<ul>
					<li>HTML5 &#8212; <a href="http://www.w3.org/TR/html5/grouping-content.html#the-hr-element">The <code>hr</code> element</a></li>
				</ul>
			</section>
			
			<section id="xhtm090-faq" class="faq">
				<h3>Frequently Asked Questions</h3>
				
				<dl class="faq">
					<dt id="xhtm090-faq01">Why shouldn't I use CSS to increase padding or margins to get the same effect?</dt>
					<dd><p>Although you may get the same visual effect, the reader is given no information that a change in
						context has occurred. CSS class names carry no semantic meaning.</p>
						<p>Print-first workflow tools often use this CSS technique to indicate context changes when 
							exporting, but it is inherently inaccessible.</p></dd>
					
					<dt id="xhtm090-faq02">Can I insert an <code>img</code> tag to indicate context change?</dt>
					<dd><p>Again, images are a suboptimal way to indicate a context change because they carry no
						semantic information. Unlike pure CSS solutions, the <code>alt</code> attribute can be
						used to indicate the context change, but that doesn't compensate for the more uniform experience
						that the <code>hr</code> element can provide.</p></dd>
				</dl>
			</section>
		</section>
		
		<?php include_once('../../includes/footer.php'); ?>
	</body>
</html>