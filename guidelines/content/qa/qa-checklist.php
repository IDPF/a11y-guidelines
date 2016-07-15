<?php include_once('../../includes/xml-declaration.php'); ?>
<?php $id='accesslist'; $nav=0; $nav_items=array('semantics' => 'Semantics', 'xhtml' => 'XHTML Content Documents', 'svg' => 'SVG Content Documents and Images', 'css' => 'EPUB Style Sheets', 'fixed' => 'Fixed Layout', 'nav' => 'Navigation', 'meta' => 'Metadata', 'overlays' => 'Media Overlays', 'tts' => 'Text to Speech', 'script' => 'Scripted Interactivity'); $category='compliance'; $page_name='Accessibility QA Checklist'; ?>
<?php
	$show_all = $_POST['generate'] == "1" ? false : true;
	$show_script = ($_POST['forms'] or $_POST['script'] or $_POST['controls'] or $_POST['regions'] or $_POST['canvas']) ? true : false;
	$show_tts = ($_POST['pls'] or $_POST['ssml'] or $_POST['css3speech']) ? true : false;
	$show_css = ($_POST['color'] or $_POST['bgcolor'] or $_POST['hid']) ? true : false;
	
	$all_priority = false;
	$any_priority = false;
	
	$priority['req'] = $_POST['req'];
	$priority['rec'] = $_POST['rec'];
	$priority['opt'] = $_POST['opt'];
	
	if ($priority['req'] and $priority['rec'] and $priority['opt']) {
		$any_priority = true;
		$all_priority = true;
	}
	
	elseif ($priority['req'] or $priority['rec'] or $priority['opt']) {
		$any_priority = true;
	}
	
	else {
		unset($priority);
	}
?>
<!DOCTYPE html>
<html xml:lang="en" lang="en"
	xmlns="http://www.w3.org/1999/xhtml">
	
	<head>
		<?php include_once('../../includes/title.php'); ?>
		<?php include_once('../../includes/html5-shiv.php'); ?>
		<link type="text/css" rel="stylesheet" href="../../css/epub3.css"/>
		<link type="text/css" rel="stylesheet" href="../../css/checklist.css"/>
	</head>
	
	<body>
		<?php include_once('../../includes/header.php'); ?>
		
		<section class="section">
			<?php include_once('../../includes/page-title.php'); ?>
			
		<?php if ($show_all or $_POST['xhtml']): ?>
			<section id="markup-semantics">
				<h3>Semantics</h3>
				
				<?php if ($show_all or $priority['req']): ?>
					<section id="semantics-epubtype">
						<h4><a href="../semantics/epub-type.php">The <code>epub:type</code> attribute</a></h4>
						<ul class="req">
							<?php if (!isset($priority) or $priority['req']): ?><li id="M-SE1">Semantics from the EPUB Structural Semantics Vocabulary added to identify structural sections and significant content structures</li><?php endif; ?>
						</ul>
					</section>
				<?php endif; ?>
				
				<?php if ($show_all or $priority['req']): ?>
					<section id="semantics-order">
						<h4><a href="../semantics/order.php">Logical Reading Order</a></h4>
						<ul class="req">
							<?php if (!isset($priority) or $priority['req']): ?><li id="M-SO1">Secondary content is identifiable from logical reading order by inclusion in <code>aside</code> and <code>figure</code> tags</li><?php endif; ?>
							<?php if (!isset($priority) or $priority['req']): ?><li id="M-SO3">The order of the markup in content files matches the primary narrative</li><?php endif; ?>
							<?php if (!isset($priority) or $priority['req']): ?><li id="M-SO4">The publication is readable from beginning to end without scripting or styles applied</li><?php endif; ?>
						</ul>
					</section>
				<?php endif; ?>
				
				<?php if ($show_all or $priority['rec']): ?>
					<section id="semantics-separation">
						<h4><a href="../semantics/separation.php">Separation of Style</a></h4>
						<ul class="req">
							<?php if (!isset($priority) or $priority['rec']): ?><li id="M-SC1">CSS properties not defined using the <code>style</code> attribute <abbr class="rec" title="Recommended">[R]</abbr></li><?php endif; ?>
						</ul>
					</section>
				<?php endif; ?>
			</section>
		<?php endif; ?>
			
			
			
		<?php if ($show_all or $_POST['xhtml']): ?>
			<section id="markup-xhtml">
				<h3>XHTML Content Documents</h3>
				
				<?php if ($show_all or $priority['req']): ?>
					<section id="xhtml-lang">
						<h4><a href="../xhtml/lang.php">Language</a></h4>
						<ul class="req">
							<?php if (!isset($priority) or $priority['req']): ?><li id="M-XLA1">The <code>lang</code> and <code>xml:lang</code> attributes are set on all root <code>html</code> elements</li><?php endif; ?>
							<?php if (!isset($priority) or $priority['req']): ?><li id="M-XLA2">The <code>lang</code> and <code>xml:lang</code> attributes are set on all instances of foreign language prose</li><?php endif; ?>
						</ul>
					</section>
				<?php endif; ?>
				
				<?php if ($show_all or ($_POST['emph'] and $priority['rec'])): ?>
					<section id="xhtml-emphasis">
						<h4><a href="../xhtml/emphasis.php">Emphasis and Bolding</a></h4>
						<ul class="req">
							<?php if (!isset($priority) or $priority['rec']): ?><li id="M-XE1"><code>em</code>, <code>strong</code>, <code>i</code> and <code>b</code> tags used as per their definitions in HTML5 <abbr class="rec" title="Recommended">[R]</abbr></li><?php endif; ?>
							<?php if (!isset($priority) or $priority['rec']): ?><li id="M-EX2">CSS styling used for presentational bolding and italics <abbr class="rec" title="Recommended">[R]</abbr></li><?php endif; ?>
						</ul>
					</section>
				<?php endif; ?>
				
				<?php if ($show_all or ($_POST['links'] and ($priority['req'] or $priority['rec']))): ?>
					<section id="xhtml-links">
						<h4><a href="../xhtml/links.php">Links</a></h4>
						<ul class="req">
							<?php if (!isset($priority) or $priority['req']): ?><li id="M-XX1">Link text clearly indicates destination, or meaningful alternative is provided in a <code>title</code> attribute</li><?php endif; ?>
							<?php if (!isset($priority) or $priority['req']): ?><li id="M-XX2">A secondary means of identifying linked text has been provided <abbr class="rec" title="Recommended">[R]</abbr></li><?php endif; ?>
							<!-- <?php if (!isset($priority) or $priority['req']): ?><li id="M-XX2">Links colored so that they can be perceived by color-blind readers</li><?php endif; ?>
								<?php if (!isset($priority) or $priority['rec']): ?><li id="M-XX3">Visited links distinguishable from unvisited <abbr class="rec" title="Recommended">[R]</abbr></li><?php endif; ?> -->
						</ul>
					</section>
				<?php endif; ?>
				
				<?php if ($show_all or $priority['rec']): ?>
					<section id="xhtml-sec">
						<h4><a href="../xhtml/sections.php">Sections</a></h4>
						<ul class="req">
							<?php if (!isset($priority) or $priority['rec']): ?><li id="M-XS1">All structurally-significant content grouped in <code>section</code> elements <abbr class="rec" title="Recommended">[R]</abbr></li><?php endif; ?>
						</ul>
					</section>
				<?php endif; ?>
				
				<?php if ($show_all or $priority['req']): ?>
					<section id="xhtml-hd">
						<h4><a href="../xhtml/headings.php">Headings</a></h4>
						<ul class="req">
							<?php if (!isset($priority) or $priority['req']): ?><li id="M-XH1">Numbered headings accurately reflect the document hierarchy</li><?php endif; ?>
							<?php if (!isset($priority) or $priority['req']): ?><li id="M-XH2">Each sectioning element has only a single heading</li><?php endif; ?>
							<?php if (!isset($priority) or $priority['rec']): ?><li id="M-XH3">Headings have not been used in <code>blockquote</code> and <code>figure</code> elements <abbr class="rec" title="Recommended">[R]</abbr></li><?php endif; ?>
						</ul>
					</section>
				<?php endif; ?>
				
				<?php if ($show_all or ($_POST['lists'] and $priority['req'])): ?>
					<section id="xhtml-lists">
						<h4><a href="../xhtml/lists.php">Lists</a></h4>
						<ul class="req">
							<?php if (!isset($priority) or $priority['req']): ?><li id="M-XL1">Sets of related items marked up using <code>ol</code> or <code>ul</code> elements, as appropriate</li><?php endif; ?>
							<?php if (!isset($priority) or $priority['req']): ?><li id="M-XL2">Glossaries, dictionaries, faqs and similar name/value association lists marked up using <code>dl</code> elements</li><?php endif; ?>
						</ul>
					</section>
				<?php endif; ?>
				
				<?php if ($show_all or ($_POST['tables'] and ($priority['req'] or $priority['rec']))): ?>
					<section id="xhtml-tables">
						<h4><a href="../xhtml/tables.php">Tables</a></h4>
						<ul class="req">
							<?php if (!isset($priority) or $priority['req']): ?><li id="M-XT1">All table heading cells identified using <code>th</code> elements</li><?php endif; ?>
							<?php if (!isset($priority) or $priority['req']): ?><li id="M-XT2">The <code>thead</code> element used to group multi-row headings</li><?php endif; ?>
							<?php if (!isset($priority) or $priority['rec']): ?><li id="M-XT3">The <code>scope</code> attribute added when heading cell applicability is not clear <abbr class="rec" title="Recommended">[R]</abbr></li><?php endif; ?>
							<?php if (!isset($priority) or $priority['rec']): ?><li id="M-XT4">The <code>headers</code> attribute added to cells when their heading is ambiguous or contained in more than one cell <abbr class="rec" title="Recommended">[R]</abbr></li><?php endif; ?>
							<?php if (!isset($priority) or $priority['rec']): ?><li id="M-XT5">A summary of the table layout and content provided for all complex tables <abbr class="rec" title="Recommended">[R]</abbr></li><?php endif; ?>
							<?php if (!isset($priority) or $priority['rec']): ?><li id="M-XT6">Captions provided, as applicable <abbr class="rec" title="Recommended">[R]</abbr></li><?php endif; ?>
							<?php if (!isset($priority) or $priority['req']): ?><li id="M-XT7">Tables not used for presentational or fixed layout of content</li><?php endif; ?>
						</ul>
					</section>
				<?php endif; ?>
				
				<?php if ($show_all or ($_POST['audio'] and ($priority['req'] or $priority['rec']))): ?>
					<section id="xhtml-audio">
						<h4><a href="../xhtml/audio.php">Audio</a></h4>
						<ul class="req">
							<?php if (!isset($priority) or $priority['req']): ?><li id="M-XA1">Native controls enabled by default</li><?php endif; ?>
							<?php if (!isset($priority) or $priority['req']): ?><li class="labeled"><span>To assist when audio may not be audible, one or more of the following provided: <abbr class="rec" title="Recommended">[R]</abbr></span>
								<ul class="req">
									<li id="M-XA2">Transcripts of audio content provided</li>
									<li id="M-XA3">Sign-language interpretation provided via an associated video element</li>
								</ul>
							</li><?php endif; ?>
							<?php if (!isset($priority) or $priority['rec']): ?><li id="M-XA4">Navigation by scene provided, when applicable <abbr class="opt" title="Optional">[O]</abbr></li><?php endif; ?>
						</ul>
					</section>
				<?php endif; ?>
				
				<?php if ($show_all or ($_POST['video'] and $any_priority)): ?>
					<section id="xhtml-video">
						<h4><a href="../xhtml/video.php">Video</a></h4>
						<ul class="req">
							<?php if (!isset($priority) or $priority['req']): ?><li id="M-XV1">Native controls enabled by default</li><?php endif; ?>
							<?php if (!isset($priority) or $priority['req']): ?><li class="labeled"><span>To assist when audio may not be audible, one or more of the following provided: <abbr class="rec" title="Recommended">[R]</abbr></span>
								<ul class="req">
									<li id="M-XV2">Captions for all video content containing audio content</li>
									<li id="M-XV3">Subtitles for all video content contain ing spoken language</li>
									<li id="M-XV4">Sign-language interpretation track for all video content</li>
									<li id="M-XV5">Transcripts of video content provided</li>
								</ul>
							</li><?php endif; ?>
							<?php if (!isset($priority) or $priority['req']): ?><li class="labeled"><span>To assist when video may not be visible: <abbr class="rec" title="Recommended">[R]</abbr></span>
								<ul class="req">
									<li id="M-XV6">Text description tracks provided</li>
								</ul>
							</li><?php endif; ?>
							<?php if (!isset($priority) or $priority['opt']): ?><li id="M-XV7">Navigation by scene provided, when applicable <abbr class="opt" title="Optional">[O]</abbr></li><?php endif; ?>
						</ul>
					</section>
				<?php endif; ?>
				
				<?php if ($show_all or ($_POST['figures'] and ($priority['req'] or $priority['rec']))): ?>
					<section id="xhtml-fig">
						<h4><a href="../xhtml/figures.php">Figures</a></h4>
						<ul class="req">
							<?php if (!isset($priority) or $priority['req']): ?><li id="M-XF1">Images, charts, code samples and other secondary content encapsulated in <code>figure</code> tags</li><?php endif; ?>
							<?php if (!isset($priority) or $priority['req']): ?><li id="M-XF2">The <code>figcaption</code> element used to identify figure captions</li><?php endif; ?>
						</ul>
					</section>
				<?php endif; ?>
				
				<?php if ($show_all or ($_POST['images'] and ($priority['req'] or $priority['rec']))): ?>
					<section id="xhtml-img">
						<h4><a href="../xhtml/images.php">Images</a></h4>
						<ul class="req">
							<?php if (!isset($priority) or $priority['req']): ?><li id="M-XI1">Text alternatives provided for all significant images</li><?php endif; ?>
							<?php if (!isset($priority) or $priority['req']): ?><li id="M-XI2">Descriptions provided for all significant images <abbr class="rec" title="Recommended">[R]</abbr></li><?php endif; ?>
							<?php if (!isset($priority) or $priority['req']): ?><li id="M-XI3"><code>alt</code> attribute left empty for all decorative images</li><?php endif; ?>
							<?php if (!isset($priority) or $priority['rec']): ?><li id="M-XI4">The ARIA <code>role</code> attribute included with the property <code class="property">presentation</code> for all decorative images <abbr class="rec" title="Recommended">[R]</abbr></li><?php endif; ?>
						</ul>
					</section>
				<?php endif; ?>
				
				<?php if ($show_all or ($_POST['maps'] and ($priority['req'] or $priority['rec']))): ?>
					<section id="xhtml-maps">
						<h4><a href="../xhtml/maps.php">Image Maps</a></h4>
						<ul class="req">
							<?php if (!isset($priority) or $priority['req']): ?><li id="M-XM1"><code>alt</code> attribute used to provide meaningful labels to image map areas</li><?php endif; ?>
							<?php if (!isset($priority) or $priority['rec']): ?><li id="M-XM2">Server-side image maps not used <abbr class="rec" title="Recommended">[R]</abbr></li><?php endif; ?>
						</ul>
					</section>
				<?php endif; ?>
				
				<?php if ($show_all or ($_POST['iframes'] and ($priority['req'] or $priority['rec']))): ?>
					<section id="xhtml-iframes">
						<h4><a href="../xhtml/iframes.php">Inline Frames</a></h4>
						<ul class="req">
							<?php if (!isset($priority) or $priority['req']): ?><li id="M-XIF1">A meaningful title added to all significant <code>iframe</code> elements</li><?php endif; ?>
							<?php if (!isset($priority) or $priority['rec']): ?><li id="M-XIF3">A link to the associated content document included as a fallback for all significant <code>iframe</code> elements <abbr class="rec" title="Recommended">[R]</abbr></li><?php endif; ?>
							<?php if (!isset($priority) or $priority['rec']): ?><li id="M-XIF4">Relative sizing units used for all <code>iframe</code> elements <abbr class="rec" title="Recommended">[R]</abbr></li><?php endif; ?>
							<?php if (!isset($priority) or $priority['req']): ?><li id="M-XIF5">Scrolling not disabled by default on <code>iframe</code> elements <abbr class="rec" title="Recommended">[R]</abbr></li><?php endif; ?>
						</ul>
					</section>
				<?php endif; ?>
				
				<?php if ($show_all or ($_POST['notes'] and ($priority['req'] or $priority['rec']))): ?>
					<section id="xhtml-notes">
						<h4><a href="../xhtml/notes.php">Notes</a></h4>
						<ul class="req">
							<?php if (!isset($priority) or $priority['req']): ?><li id="M-XN1">Notes within the primary narrative identified using the <code>aside</code> element with an appropriate <code>epub:type</code> value</li><?php endif; ?>
							<?php if (!isset($priority) or $priority['req']): ?><li id="M-XN2">Groups of notes identified by an appropriate <code>epub:type</code> value</li><?php endif; ?>
							<?php if (!isset($priority) or $priority['req']): ?><li id="M-XN3">Note references identified using the <code>epub:type</code> attribute with the value <code class="property">noteref</code></li><?php endif; ?>
						</ul>
					</section>
				<?php endif; ?>
				
				<?php if ($show_all or ($_POST['annotations'] and ($priority['req'] or $priority['rec']))): ?>
					<section id="xhtml-anno">
						<h4><a href="../xhtml/annotations.php">Annotations</a></h4>
						<ul class="req">
							<?php if (!isset($priority) or $priority['req']): ?><li id="M-XAN1">Annotations within the primary narrative identified using the <code>aside</code> element with an <code>epub:type</code> attribute with the value <code>annotation</code></li><?php endif; ?>
							<?php if (!isset($priority) or $priority['rec']): ?><li id="M-XAN2">Inline annotations identified using the <code>ruby</code> element <abbr class="rec" title="Recommended">[R]</abbr></li><?php endif; ?>
							<?php if (!isset($priority) or $priority['req']): ?><li id="M-XAN3">Annotation references identified using the <code>epub:type</code> attribute with the value <code class="property">annoref</code></li><?php endif; ?>
						</ul>
					</section>
				<?php endif; ?>
				
				<?php if ($show_all or ($_POST['cbr'] and $priority['rec'])): ?>
					<section id="xhtml-context">
						<h4><a href="../xhtml/context.php">Context Breaks</a></h4>
						<ul class="req">
							<?php if (!isset($priority) or $priority['rec']): ?><li id="M-XC1">Changes in context identified using <code>hr</code> elements <abbr class="rec" title="Recommended">[R]</abbr></li><?php endif; ?>
						</ul>
					</section>
				<?php endif; ?>
				
				<?php if ($show_all or ($_POST['pages'] and ($priority['req'] or $priority['rec']))): ?>
					<section id="xhtml-pgnum">
						<h4><a href="../xhtml/pagenum.php">Page Numbers</a></h4>
						<ul class="req">
							<?php if (!isset($priority) or $priority['req']): ?><li id="M-XP1">The print source identified in a <code>dc:source</code> element in the package document <code>metadata</code> section</li><?php endif; ?>
							<?php if (!isset($priority) or $priority['rec']): ?><li id="M-XP2">Print page break locations included when the EPUB has a print equivalent <abbr class="rec" title="Recommended">[R]</abbr></li><?php endif; ?>
							<?php if (!isset($priority) or $priority['rec']): ?><li id="M-XP3">The navigation document includes a <code>page-list nav</code> to facilitate page navigation <abbr class="rec" title="Recommended">[R]</abbr></li><?php endif; ?>
						</ul>
					</section>
				<?php endif; ?>
			</section>
		<?php endif; ?>
			
			
			
		<?php if ($show_all or ($_POST['mathml'] and ($any_priority or $priority['req'] or $priority['rec']))): ?>
			<section id="markup-mathml">
				<h3>MathML</h3>
				
				<section id="mathml-desc">
					<h4><a href="../mathml/desc.php">Descriptions</a></h4>
					<ul class="req">
						<?php if (!isset($priority) or $priority['req']): ?><li id="M-M1">MathML markup included for all math content</li><?php endif; ?>
						<?php if (!isset($priority) or $priority['req']): ?><li id="M-M2">Simple MathML content described using the <code>alttext</code> attribute <abbr class="rec" title="Recommended">[R]</abbr></li><?php endif; ?>
						<?php if (!isset($priority) or $priority['req']): ?><li id="M-M3">Complex MathML content described using an embedded <code>annotation-xml</code> element <abbr class="rec" title="Recommended">[R]</abbr></li><?php endif; ?>
					</ul>
				</section>
			</section>
		<?php endif; ?>
			
			
			
		<?php if ($show_all or ($_POST['svg'] and $any_priority)): ?>
			<section id="markup-svg">
				<h3>SVG Content Documents and Images</h3>
				
				<?php if ($show_all or $priority['req']): ?>
					<section id="svg-lang">
						<h4><a href="../svg/lang.php">Language</a></h4>
						<ul class="req">
							<?php if (!isset($priority) or $priority['req']): ?><li id="M-GLA1">The <code>xml:lang</code> attribute set on all root <code>svg</code> elements</li><?php endif; ?>
							<?php if (!isset($priority) or $priority['req']): ?><li id="M-GLA2">The <code>xml:lang</code> attribute set on all instances of foreign language text within each SVG image</li><?php endif; ?>
						</ul>
					</section>
				<?php endif; ?>
				
				<?php if ($show_all or $priority['req'] or $priority['rec']): ?>
					<section id="svg-desc">
						<h4><a href="../svg/desc.php">Titles and Descriptions</a></h4>
						<ul class="req">
							<?php if (!isset($priority) or $priority['req']): ?><li id="M-GD1">All significant images include a title (<code>title</code> element)</li><?php endif; ?>
							<?php if (!isset($priority) or $priority['req']): ?><li id="M-GD2">All complex images include a description (<code>desc</code> element)</li><?php endif; ?>
							<?php if (!isset($priority) or $priority['req']): ?><li id="M-GD3">All components within an SVG image include a <code>title</code> and <code>desc</code></li><?php endif; ?>
							<?php if (!isset($priority) or $priority['rec']): ?><li id="M-GD4">All presentational SVG images marked using the ARIA <code>role</code> attribute <abbr class="rec" title="Recommended">[R]</abbr></li><?php endif; ?>
						</ul>
					</section>
				<?php endif; ?>
				
				<?php if ($show_all or $priority['rec'] or $priority['opt']): ?>
					<section id="svg-components">
						<h4><a href="../svg/components.php">Components</a></h4>
						<ul class="req">
							<?php if (!isset($priority) or $priority['rec']): ?><li id="M-GC1">Component definitions re-used whenever possible to simplify overall comprehension <abbr class="rec" title="Recommended">[R]</abbr></li><?php endif; ?>
						</ul>
					</section>
				<?php endif; ?>
				
				<?php if ($show_all or $priority['req']): ?>
					<section id="svg-text">
						<h4><a href="../svg/text.php">Text Content</a></h4>
						<ul class="req">
							<?php if (!isset($priority) or $priority['req']): ?><li id="M-GT1">All embedded text content contained in <code>text</code> elements</li><?php endif; ?>
							<?php if (!isset($priority) or $priority['req']): ?><li id="M-GT2">Sufficient contrast maintained between embedded text and background image</li><?php endif; ?>
							<?php if (!isset($priority) or $priority['req']): ?><li id="M-GT3">Custom fonts used in place of creating text as images</li><?php endif; ?>
						</ul>
					</section>
				<?php endif; ?>
				
				<?php if ($show_all or $priority['req'] or $priority['rec']): ?>
					<section id="svg-linking">
						<h4><a href="../svg/linking.php">Linking</a></h4>
						<ul class="req">
							<?php if (!isset($priority) or $priority['req']): ?><li id="M-GL1">All embedded links include an <code>xlink:title</code> attribute explaining the target location</li><?php endif; ?>
							<?php if (!isset($priority) or $priority['rec']): ?><li id="M-GL2">Linked components are visually distinguishable from unlinked components <abbr class="rec" title="Recommended">[R]</abbr></li><?php endif; ?>
						</ul>
					</section>
				<?php endif; ?>
				
				<?php if ($show_all or $any_priority): ?>
					<section id="svg-css">
						<h4><a href="../svg/css.php">Styling</a></h4>
						<ul class="req">
							<?php if (!isset($priority) or $priority['req']): ?><li id="M-GS1">CSS rules defined for <code>title</code> and <code>desc</code> elements to enable rendering</li><?php endif; ?>
							<?php if (!isset($priority) or $priority['rec']): ?><li id="M-GS2">Visual styling of components separated into CSS style sheets to facilitate reader customization <abbr class="rec" title="Recommended">[R]</abbr></li><?php endif; ?>
						</ul>
					</section>
				<?php endif; ?>
				
				<?php if ($show_all or $priority['req']): ?>
					<section id="svg-script">
						<h4><a href="../svg/script.php">Interactivity</a></h4>
						<ul class="req">
							<?php if (!isset($priority) or $priority['req']): ?><li id="M-GI1">Scripting not required to render or understand SVG images</li><?php endif; ?>
							<?php if (!isset($priority) or $priority['req']): ?><li id="M-GI2">ARIA roles, states and properties used to enhance the accessibility of scripted content</li><?php endif; ?>
							<?php if (!isset($priority) or $priority['req']): ?><li id="M-GI3">Text equivalents are updated whenever dynamic content changes</li><?php endif; ?>
							<?php if (!isset($priority) or $priority['req']): ?><li id="M-GI4">Device-independent events used for all interactive actions</li><?php endif; ?>
						</ul>
					</section>
				<?php endif; ?>
			</section>
		<?php endif; ?>
			
			
			
		<?php if ($show_all or ($show_css and ($priority['req'] or $priority['rec']))): ?>
			<section id="markup-css">
				<h3>EPUB Style Sheets</h3>
				
				<?php if ($show_all or ($_POST['color'] and ($priority['req'] or $priority['rec']))): ?>
					<section id="css-colors">
						<h4><a href="../style/color.php">Colors</a></h4>
						<ul class="req">
							<?php if (!isset($priority) or $priority['req']): ?><li id="M-CC1">Semantic markup used whenever colors convey information visually</li><?php endif; ?>
							<?php if (!isset($priority) or $priority['req']): ?><li id="M-CC2">Sufficient contrast levels maintained between the text and any background colors and images (as defined in WCAG 2.0)</li><?php endif; ?>
							<?php if (!isset($priority) or $priority['rec']): ?><li id="M-CC3">Text not positioned over pictures and other images with noisy backgrounds <abbr class="rec" title="Recommended">[R]</abbr></li><?php endif; ?>
							<?php if (!isset($priority) or $priority['rec']): ?><li id="M-CC4">Red/green combinations have been avoided <abbr class="rec" title="Recommended">[R]</abbr></li><?php endif; ?>
							<?php if (!isset($priority) or $priority['rec']): ?><li id="M-CC5">Red/black combinations have been avoided <abbr class="rec" title="Recommended">[R]</abbr></li><?php endif; ?>
							<?php if (!isset($priority) or $priority['rec']): ?><li id="M-CC6">Brightly colored hue combinations have been avoided <abbr class="rec" title="Recommended">[R]</abbr></li><?php endif; ?>
						</ul>
					</section>
				<?php endif; ?>
				
				<?php if ($show_all or ($_POST['bgcolor'] and $priority['req'])): ?>
					<section id="css-bg">
						<h4><a href="../style/backgrounds.php">Backgrounds</a></h4>
						<ul class="req">
							<?php if (!isset($priority) or $priority['req']): ?><li id="M-CB1">Background images not used to convey information</li><?php endif; ?>
							<?php if (!isset($priority) or $priority['req']): ?><li id="M-CB2">Sufficient contrast levels maintained between the text and any background colors and images (as defined in WCAG 2.0)</li><?php endif; ?>
						</ul>
					</section>
				<?php endif; ?>
				
				<?php if ($show_all or ($_POST['hid'] and $priority['req'])): ?>
					<section id="css-hiding">
						<h4><a href="../style/importance.php">Hidden Content</a></h4>
						<ul class="req">
							<?php if (!isset($priority) or $priority['req']): ?><li id="M-CH1">Content critical to the logical flow of a publication not initialized in a hidden state</li><?php endif; ?>
							<?php if (!isset($priority) or $priority['req']): ?><li id="M-CH2">HTML5 and ARIA techniques used to include optional text and descriptions</li><?php endif; ?>
							<?php if (!isset($priority) or $priority['req']): ?><li id="M-CH3">The state of the <code>aria-hidden</code> attribute maintained as the visibility of content is toggled</li><?php endif; ?>
						</ul>
					</section>
				<?php endif; ?>
			</section>
		<?php endif; ?>
	
    	<?php if ($show_all or ($_POST['importance'] and $priority['req'])): ?>
					<section id="css-importance">
						<h4><a href="../style/importance.php">Importance</a></h4>
						<ul class="req">
							<?php if (!isset($priority) or $priority['req']): ?><li id="M-CH1">Importance can be overridden by CSS rules</li><?php endif; ?>
						</ul>
					</section>
				<?php endif; ?>
			</section>
		<?php endif; ?>
        
		
		<?php if ($show_all or ($_POST['fixed'] and $priority['req'])): ?>
			<section id="markup-fixed">
				<h3>Fixed Layout</h3>
				
			<?php if ($show_all or $_POST['xhtml']): ?>
				<section id="fixed-xhtml">
					<h4><a href="../fixed/xhtml.php">XHTML</a></h4>
					<ul class="req">
						<?php if (!isset($priority) or $priority['req']): ?><li id="M-FX1">Logical reading order maintained in markup</li><?php endif; ?>
						<?php if (!isset($priority) or $priority['req']): ?><li id="M-FX2">Semantic markup applied to content to facilitate comprehension of layout</li><?php endif; ?>
					</ul>
				</section>
			<?php endif; ?>
				
			<?php if ($show_all or $_POST['svg']): ?>
				<section id="fixed-img">
					<h4><a href="../fixed/img.php">Image</a></h4>
					<ul class="req">
						<?php if (!isset($priority) or $priority['req']): ?><li id="M-FI1">Publication does not contain empty documents that employ the <code class="property">background-image</code> property to display images</li><?php endif; ?>
					</ul>
				</section>
			<?php endif; ?>
			</section>
		<?php endif; ?>
			
		
		<?php if ($show_all or $priority['req'] or $priority['rec']): ?>
			<section id="markup-nav">
				<h3>Navigation</h3>
				
				<?php if ($show_all or $any_priority): ?>
					<section id="nav-toc">
						<h4><a href="../nav/toc.php">Table of Contents</a></h4>
						<ul class="req">
							<?php if (!isset($priority) or $priority['req']): ?><li id="M-NC1">The <code>toc nav</code> includes the full structure of the publication</li><?php endif; ?>
							<?php if (!isset($priority) or $priority['rec']): ?><li id="M-NC2">The <code>hidden</code> attribute used to disable visual rendering of unwanted levels <abbr class="rec" title="Recommended">[R]</abbr></li><?php endif; ?>
						</ul>
					</section>
				<?php endif; ?>
				
				<?php if ($show_all or ($_POST['landmarks'] and ($priority['req'] or $priority['rec']))): ?>
					<section id="nav-landmarks">
						<h4><a href="../nav/landmarks.php">Landmarks</a></h4>
						<ul class="req">
							<?php if (!isset($priority) or $priority['rec']): ?><li id="M-NL1">Links to all significant sections of the publication added <abbr class="rec" title="Recommended">[R]</abbr></li><?php endif; ?>
						</ul>
					</section>
				<?php endif; ?>
					
				<?php if ($show_all or ($_POST['pages'] and $priority['rec'])): ?>
					<section id="nav-pagelist">
						<h4><a href="../nav/pagelist.php">Page List</a></h4>
						<ul class="req">
							<?php if (!isset($priority) or $priority['req']): ?><li id="M-NP2">The package document metadata includes a <code>dc:source</code> element identifying the print edition</li><?php endif; ?>
						</ul>
					</section>
				<?php endif; ?>
					
				<?php if ($show_all or ($_POST['figures'] and $priority['rec'])): ?>
					<section id="nav-loi">
						<h4><a href="../nav/loi.php">List of Illustrations</a></h4>
						<ul class="req">
							<?php if (!isset($priority) or $priority['rec']): ?><li id="M-NI1">Links to all illustrations and figures in the publication provided <abbr class="rec" title="Recommended">[R]</abbr></li><?php endif; ?>
						</ul>
					</section>
				<?php endif; ?>
					
				<?php if ($show_all or ($_POST['tables'] and $priority['rec'])): ?>
					<section id="nav-lot">
						<h4><a href="../nav/lot.php">List of Tables</a></h4>
						<ul class="req">
							<?php if (!isset($priority) or $priority['rec']): ?><li id="M-NT1">Links to all tables in the publication provided <abbr class="rec" title="Recommended">[R]</abbr></li><?php endif; ?>
						</ul>
					</section>
				<?php endif; ?>
			</section>
		<?php endif; ?>
			
			
		<?php if ($show_all or ($_POST['overlays'] and ($priority['req'] or $priority['rec']))): ?>
			<section id="markup-overlays">
				<h3>Media Overlays</h3>
				
				<?php if ($show_all or $priority['req']): ?>
					<section id="overlays-hilite">
						<h4><a href="../overlays/hilite.php">Highlighting</a></h4>
						<ul class="req">
							<?php if (!isset($priority) or $priority['req']): ?><li id="M-OH1">Sufficient contrast maintained between active text and the highlighting color</li><?php endif; ?>
						</ul>
					</section>
				<?php endif; ?>
				
				<?php if ($show_all or ($_POST['lists'] and $priority['rec'])): ?>
					<section id="overlays-lists">
						<h4><a href="../overlays/lists.php">Lists</a></h4>
						<ul class="req">
							<?php if (!isset($priority) or $priority['rec']): ?><li id="M-OL1">Each list in the markup represented by a <code>seq</code> element with its <code>epub:type</code> attribute set to <code class="property">list</code> <abbr class="rec" title="Recommended">[R]</abbr></li><?php endif; ?>
							<?php if (!isset($priority) or $priority['rec']): ?><li id="M-OL2">Each list item in the markup represented either by a <code>seq</code> or <code>par</code> element with its <code>epub:type</code> attribute set to <code class="property">list-item</code> <abbr class="rec" title="Recommended">[R]</abbr></li><?php endif; ?>
							<?php if (!isset($priority) or $priority['rec']): ?><li id="M-OL3">All related <code>dt</code> and <code>dd</code> elements in a definition list are grouped together in a <code>seq</code> element with its <code>epub:type</code> attribute set to <code class="property">list-item</code> <abbr class="rec" title="Recommended">[R]</abbr></li><?php endif; ?>
						</ul>
					</section>
				<?php endif; ?>
					
				<?php if ($show_all or ($_POST['tables'] and $priority['rec'])): ?>
					<section id="overlays-tables">
						<h4><a href="../overlays/tables.php">Tables</a></h4>
						<ul class="req">
							<?php if (!isset($priority) or $priority['rec']): ?><li id="M-OT1">Each table in the markup represented by a <code>seq</code> element with its <code>epub:type</code> attribute set to <code class="property">table</code> <abbr class="rec" title="Recommended">[R]</abbr></li><?php endif; ?>
							<?php if (!isset($priority) or $priority['rec']): ?><li id="M-OT2">Each table row in the markup represented by a <code>seq</code> element with its <code>epub:type</code> attribute set to <code class="property">table-row</code> <abbr class="rec" title="Recommended">[R]</abbr></li><?php endif; ?>
							<?php if (!isset($priority) or $priority['rec']): ?><li id="M-OT3">Each table cell in the markup represented either by a <code>seq</code> or <code>par</code> element with its <code>epub:type</code> attribute set to <code class="property">table-cell</code> <abbr class="rec" title="Recommended">[R]</abbr></li><?php endif; ?>
						</ul>
					</section>
				<?php endif; ?>
			</section>
		<?php endif; ?>
		
		
		
		<?php if ($show_all or ($show_tts and $priority['rec'])): ?>
			<section id="markup-tts">
				<h3>Text-to-Speech</h3>
				
				<?php if ($show_all or ($_POST['pls'] and $priority['rec'])): ?>
					<section id="tts-pls">
						<h4><a href="../tts/pls.php">PLS Lexicons</a></h4>
						<ul class="req">
							<?php if (!isset($priority) or $priority['rec']): ?><li id="M-TL1">The lexicon defines all unique proper names, nouns and other complex words <abbr class="rec" title="Recommended">[R]</abbr></li><?php endif; ?>
							<?php if (!isset($priority) or $priority['rec']): ?><li id="M-TL2">The lexicon includes the default pronunciation for any heteronyms <abbr class="rec" title="Recommended">[R]</abbr></li><?php endif; ?>
						</ul>
					</section>
				<?php endif; ?>
					
				<?php if ($show_all or ($_POST['ssml'] and $priority['rec'])): ?>
					<section id="tts-ssml">
						<h4><a href="../tts/ssml.php">SSML</a></h4>
						<ul class="req">
							<?php if (!isset($priority) or $priority['rec']): ?><li id="M-TS1">Pronunciations defined to disambiguate heteronyms <abbr class="rec" title="Recommended">[R]</abbr></li><?php endif; ?>
							<?php if (!isset($priority) or $priority['rec']): ?><li id="M-TS2">Pronunciations defined for ambiguous number forms <abbr class="rec" title="Recommended">[R]</abbr></li><?php endif; ?>
							<?php if (!isset($priority) or $priority['rec']): ?><li id="M-TS3">Pronunciations defined for jargon, slang, slurred and other non-standard speech forms <abbr class="rec" title="Recommended">[R]</abbr></li><?php endif; ?>
						</ul>
					</section>
				<?php endif; ?>
					
				<?php if ($show_all or ($_POST['speech'] and $priority['rec'])): ?>
					<section id="tts-speech">
						<h4><a href="../tts/speech.php">CSS3 Speech</a></h4>
						<ul class="req">
							<?php if (!isset($priority) or $priority['rec']): ?><li id="M-TC1">All abbreviations, acronyms, numbers and other constructs that should be spelled out have the <code>spell-out</code> property defined <abbr class="rec" title="Recommended">[R]</abbr></li><?php endif; ?>
						</ul>
					</section>
				<?php endif; ?>
			</section>
		<?php endif; ?>
			
			
			
		<?php if ($show_all or ($show_script and $priority['req'])): ?>
			<section id="markup-script">
				<h3>Scripted Interactivity</h3>
				
				<?php if ($show_all or $priority['req']): ?> 
					<section id="script-pe">
						<h4><a href="../script/pe.php">Progressive Enhancement</a></h4>
						<ul class="req">
							<?php if (!isset($priority) or $priority['req']): ?><li id="M-IE1">Scripting not required in order to traverse the complete logical reading order of the publication</li><?php endif; ?>
							<?php if (!isset($priority) or $priority['req']): ?><li id="M-IE2">Scripting not required in order to make content visible</li><?php endif; ?>
							<?php if (!isset($priority) or $priority['req']): ?><li id="M-IE3">Readers can access all content regardless of location, preference settings, etc. <abbr class="rec" title="Recommended">[R]</abbr></li><?php endif; ?>
						</ul>
					</section>
				<?php endif; ?>
				
				<?php if ($show_all or $priority['req']): ?> 
					<section id="script-valid">
						<h4><a href="../script/valid.php">Content Validity</a></h4>
						<ul class="req">
							<?php if (!isset($priority) or $priority['req']): ?><li id="M-IV1">Scripting not used to manipulate the HTML DOM in such a way that it produces invalid markup</li><?php endif; ?>
						</ul>
					</section>
				<?php endif; ?>
				
				<?php if ($show_all or (($_POST['controls'] or $_POST['script']) and $priority['req'])): ?> 
					<section id="script-controls">
						<h4><a href="../script/aria.php">WAI-ARIA &amp; Custom Controls</a></h4>
						<ul class="req">
							<?php if (!isset($priority) or $priority['req']): ?><li id="M-IC1">All custom controls are reachable in a device-independent manner</li><?php endif; ?>
							<?php if (!isset($priority) or $priority['req']): ?><li id="M-IC2">All custom controls fully implement ARIA roles, states and properties, as appropriate</li><?php endif; ?>
						</ul>
					</section>
				<?php endif; ?>
					
				<?php if ($show_all or ($_POST['forms'] and $priority['req'])): ?> 
					<section id="script-forms">
						<h4><a href="../script/forms.php">Forms</a></h4>
						<ul class="req">
							<?php if (!isset($priority) or $priority['req']): ?><li id="M-IF1">Labels and controls linked via markup</li><?php endif; ?>
							<?php if (!isset($priority) or $priority['req']): ?><li id="M-IF2">All custom controls are reachable in a device-independent manner</li><?php endif; ?>
							<?php if (!isset($priority) or $priority['req']): ?><li id="M-IF3">Form controls laid out in logical order or <code>tabindex</code> attribute used to give order</li><?php endif; ?>
							<?php if (!isset($priority) or $priority['req']): ?><li id="M-IF4">All custom controls made accessible via use of ARIA roles, states and properties</li><?php endif; ?>
							<?php if (!isset($priority) or $priority['req']): ?><li id="M-IF5">The <code>aria-invalid</code> attribute set when fields contain invalid data</li><?php endif; ?>
						</ul>
					</section>
				<?php endif; ?>
					
				<?php if ($show_all or ($_POST['regions'] and $priority['req'])): ?> 
					<section id="script-regions">
						<h4><a href="../script/regions.php">Live Regions</a></h4>
						<ul class="req">
							<?php if (!isset($priority) or $priority['req']): ?><li id="M-IR1">All live regions identified using ARIA roles and properties</li><?php endif; ?>
							<?php if (!isset($priority) or $priority['req']): ?><li id="M-IR2">Assertiveness of all announcements matches their importance to the reading experience</li><?php endif; ?>
						</ul>
					</section>
				<?php endif; ?>
					
				<?php if ($show_all or ($_POST['canvas'] and $priority['req'])): ?> 
					<section id="script-canvas">
						<h4><a href="../script/canvas.php">Canvas</a></h4>
						<ul class="req">
							<?php if (!isset($priority) or $priority['req']): ?><li id="M-ICV1"><code>figure</code> and <code>figcaption</code> used to add context when <code>canvas</code> represents a static image</li><?php endif; ?>
							<?php if (!isset($priority) or $priority['req']): ?><li id="M-ICV2"><code>canvas</code> only used to enhance graph, chart and similar data representations</li><?php endif; ?>
							<?php if (!isset($priority) or $priority['req']): ?><li id="M-ICV3">ARIA roles, states and properties used to make interactive <code>canvas</code> elements accessible</li><?php endif; ?>
							<?php if (!isset($priority) or $priority['req']): ?><li id="M-ICV4">Alternate representations and fallbacks included when accessible scripting not possible</li><?php endif; ?>
						</ul>
					</section>
				<?php endif; ?>
			</section>
		<?php endif; ?>
			
			<section id="meta">
				<p>Note: Always consider including an ONIX metadata record with your publication indicating the applicable 
					accessibility criteria that have been met (see the <a href="../meta/onix.php">ONIX metadata info page</a>).</p>
			</section>
		</section>
		
		<?php include_once('../../includes/footer.php'); ?>
	</body>
</html>