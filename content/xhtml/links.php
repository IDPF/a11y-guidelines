<?php include_once('../../includes/xml-declaration.php'); ?>
<?php $id='xhtm043'; $nav=1; $nav_items=array('ex','reqs','faq'); $category='xhtml'; $page_name='Links'; ?>
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
		
		<section id="xhtm043" class="section">
			<?php include_once('../../includes/page-title.php'); ?>
			
			<section id="xhtm043-desc" class="usage">
				<p>Hyperlinking text seems like such an innocuous thing to do that most people don't consider the 
					nuisance and problems that the links can cause to the reading experience.</p>
				<p epub:type="bridgehead">Context</p>
				<p>One of the first sins committed when creating hyperlinks is that the text inside of the link does
					not provide the full context of what is being linked to. The assumption most people make is that
					links are only encountered where they are placed in the text, when in reality many assistive technologies
					will present all of the links to the reader prior to beginning to read the content. The result
					can be a confusing mess of "see here" and "read more" link text being offered with no indication of
					where those links go.</p>
				<p>To avoid this problem, always ensure that the text you hyperlink is meaningful on its own. If you
					can read the link out of the context of its surrounding prose, and it clearly indicates where links
					to, you will improve the experience for readers using ATs.</p>
				<p>If it's not possible for the linked text to convey the meaning, add a <code>title</code> attribute
					to the <code>a</code> tag explaining its nature.</p>
				<p epub:type="bridgehead">Overuse</p>
				<p>A more complicated issue with links is the number to include in a document. The more that you use, the
					more inconvenience it can cause to your readers. For example, keyboard users may have to tab through
					all of the links to get to specific locations and, as noted above, some readers may be presented every
					link in the document. Another problem is that linked text is often preceded by the word "link" being
					announced to the reader, which can disrupt the reading experience when done in excess.</p>
				<p>The complicating factor is that generous hyperlinking can also be of benefit to many readers, too. Keywords
					are often hyperlinked to their definitions, for example, which can quickly lead to tens and hundreds 
					of hyperlinked words in a chapter. Although an impediment to some readers, the ease of access often 
					facilitate the process for readers with learning disabilities and cognitive issues.</p>
				<p>Removing redunant links from EPUBs is a good idea, but what constitutes redundant linking has to be addreesed
					on a case-by-case basis. Hyperlinking only the first instance of a keyword in each chapter might be one
					method of reducing the overall number, for example.</p>
				<p epub:type="bridgehead">Perception</p>
				<p>Another problem with links is that they cannot always be perceived by a reader (e.g., color blindness
					may make the links imperceptible from the surrounding text), in which case the person 
					will not be aware that they are potentially missing access to information.</p>
				<p>To avoid the problem of links blending into their surroundings, hyperlinked text should be discoverable 
					by more than just its color. Underlining of links is not required, but some other visual cue should be 
					provided if underlines are removed (e.g., increased bolding of the font).</p>
				<p>Avoid overriding the color of visited links to make them match unvisited links, particularly in heavily
					cross-referenced works. A lack of visual distinguishment of where the reader has already
					been can cause navigation problems for some readers.</p>
			</section>
			
			<section id="xhtm043-ex" class="example">
				<h3>Example</h3>
				<figure id="xhtm043-ex01">
					<figcaption>Example 1 &#8212; Alternate Text</figcaption>
					<pre class="prettyprint linenums"><code>&lt;a href="&#8230;" title="The EPUB specifications">click here&lt;/a></code></pre>
				</figure>
				<figure id="xhtm043-ex02">
					<figcaption>Example 2 &#8212; Bolding Links</figcaption>
					<pre class="prettyprint linenums"><code>a {
	text-decoration: none;
	font-weight: bolder;
	color: rgb(51,102,204);
}</code></pre>
					<p>(By specifying <code>bolder</code>, the next weight, either a medium font
						or a bold one, is selected).</p>
				</figure>
			</section>
			
			<section id="xhtm043-reqs" class="reqs">
				<h3>Compliance References and Standards</h3>
				
				<ul>
					<li>WCAG 2.0 &#8212; <a href="http://www.w3.org/TR/WCAG20-TECHS/G183.html">G183: Using a contrast ratio of 3:1 with surrounding text and providing additional visual cues on focus for links or controls where color alone is used to identify them</a></li>
				</ul>
			</section>
			
			<section id="xhtm043-faq" class="faq">
				<h3>Frequently Asked Questions</h3>
				<dl class="faq">
					<dt>Does this rule apply to the table of contents?</dt>
					<dd><p>No, readers expect to find hyperlinks in specialized structures like the table of contents.
							Additional visual cues are not necessary in such cases, but if you mix linked and unlinked
							text it should still be perceivable which is which.</p></dd>
				</dl> 
			</section>
		</section>
		
		<?php include_once('../../includes/footer.php'); ?>
	</body>
</html>