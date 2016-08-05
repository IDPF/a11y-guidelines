<?php include_once('includes/xml-declaration.php'); ?>
<?php $id='root'; $nav=0; $nav_items=array(''); $category='toc-nav'; $page_name='EPUB 3 Accessibility Guidelines'; ?>
<!DOCTYPE html>
<html xml:lang="en" lang="en"
	xmlns="http://www.w3.org/1999/xhtml"
	xmlns:epub="http://www.idpf.org/2007/ops">
	
	<head>
		<title>EPUB 3 Accessibility Guidelines</title>
		<?php include_once('guidelines/includes/html5-shiv.php'); ?>
		<link type="text/css" rel="stylesheet" href="css/epub3.css"/>
		<link type="text/css" rel="stylesheet" href="css/nav.css"/>
	</head>
	
	<body>
		<?php include_once('includes/header.php'); ?>
		
		<nav epub:type="toc" id="toc">
			<h2>Table of Contents</h2>
			<ol>
				<li id="about" class="first"><a href="content/about.php">About this Guide</a></li>
				<li id="wcag-aria"><a href="content/wcag-aria.php">EPUB and Web Accessibility</a></li>
				<li id="getting-started"><span class="nav-h1">Getting Started</span>
					<ol>
						<li id="whatisepub3"><a href="http://shop.oreilly.com/product/0636920022442.do">What is EPUB 3?</a></li>
						<li id="accessibleepub3"><a href="http://shop.oreilly.com/product/0636920025283.do">Accessible EPUB 3</a></li>
						<li id="epub3bestpractices"><a href="http://shop.oreilly.com/product/0636920024897.do">EPUB 3 Best Practices</a></li>
						<li id="epub3a11y"><a href="http://www.idpf.org/epub/latest/accessibility">EPUB Accessibility Specification</a></li>
						<li id="epub3a11ytechs"><a href="http://www.idpf.org/epub/latest/accessibility/techniques">EPUB Accessibility Techniques</a></li>
						<li id="epub3specs"><a href="http://www.idpf.org/epub3/latest/">EPUB 3 Specification</a></li>
					</ol>
				</li>
				<li id="qa"><span class="nav-h1">Quality Assurance</span>
					<ol>
						<li id="checklist-generator"><a href="content/qa/checklist-generator.php">QA Checklist Generator</a></li>
						<li id="checklist"><a href="content/qa/qa-checklist.php">Full QA Checklist</a></li>
					</ol>
				</li>
				<li id="seamntics"><span class="nav-h1">Semantics</span>
					<ol>
						<li id="reading-order"><a href="content/semantics/order.php">Logical Reading Order</a></li>
						<li id="epub-type"><a href="content/semantics/epub-type.php">The <code>epub:type</code> attribute</a></li>
						<li id="sep-style"><a href="content/semantics/separation.php">Separation of Style</a></li>
					</ol>
				</li>
				<li id="xhtml"><span class="nav-h1">XHTML Content Documents</span>
					<ol>
						<li id="xhtml-general"><span class="nav-h2">General</span>
							<ol>
								<li id="xhtml-lang"><a href="content/xhtml/lang.php">Language</a></li>
								<li id="xhtml-pagenum"><a href="content/xhtml/pagenum.php">Page Numbers</a></li>
								<li id="xhtml-iframes"><a href="content/xhtml/iframes.php">Inline Frames</a></li>
							</ol>
						</li>
						<li id="formatting"><span class="nav-h2">Formatting</span>
							<ol>
								<li id="xhtml-emphasis"><a href="content/xhtml/emphasis.php">Bolding and Italics</a></li>
								<li id="xhtml-links"><a href="content/xhtml/links.php">Links</a></li>
							</ol>
						</li>
						<li id="xhtml-frontmatter"><span class="nav-h2">Front matter</span>
							<ol>
								<li id="xhtml-works"><a href="content/xhtml/works.php">Published Works</a></li>
								<li id="xhtml-toc"><a href="content/xhtml/toc.php">Table of Contents</a></li>
								<li id="xhtml-loi"><a href="content/nav/loi.php">List of Illustrations</a></li>
								<li id="xhtml-lot"><a href="content/nav/lot.php">List of Tables</a></li>
							</ol>
						</li>
						<li id="xhtml-bodymatter"><span class="nav-h2">Body matter</span>
							<ol>
								<li id="xhtml-sections"><a href="content/xhtml/sections.php">Parts, Chapters and Sections</a></li>
								<li id="xhtml-headings"><a href="content/xhtml/headings.php">Headings</a></li>
								<li id="xhtml-tables"><a href="content/xhtml/tables.php">Tables</a></li>
								<li id="xhtml-lists"><a href="content/xhtml/lists.php">Lists</a></li>
								<li id="xhtml-descriptions"><a href="content/xhtml/descriptions.php">Descriptions</a></li>
								<li id="xhtml-figures"><a href="content/xhtml/figures.php">Figures</a></li>
								<li id="xhtml-images"><a href="content/xhtml/images.php">Images</a></li>
								<li id="xhtml-image-maps"><a href="content/xhtml/maps.php">Image Maps</a></li>
								<li id="xhtml-audio"><a href="content/xhtml/audio.php">Audio</a></li>
								<li id="xhtml-video"><a href="content/xhtml/video.php">Video</a></li>
								<li id="xhtml-notes"><a href="content/xhtml/notes.php">Footnotes and Endnotes</a></li>
								<li id="xhtml-annotations"><a href="content/xhtml/annotations.php">Annotations</a></li>
								<!-- <li id=""><a href="content/xhtml/code.php">Computer Code</a></li> -->
								<li id="xhtml-context"><a href="content/xhtml/context.php">Context Breaks</a></li>
							</ol>
						</li>
						<li id="xhtml-backmatter"><span class="nav-h2">Back matter</span>
							<ol>
								<li id="xhtml-bibliographies"><a href="content/xhtml/biblio.php">Bibliographies</a></li>
								<li id="xhtml-indexes"><a href="content/xhtml/indexes.php">Indexes</a></li>
							</ol>
						</li>
					</ol>
				</li>
				<li id="mathml"><span class="nav-h1">MathML</span>
					<ol>
						<li id="mathml-desc"><a href="content/mathml/desc.php">Descriptions</a></li>
					</ol>
				</li>
				<li id="svg"><span class="nav-h1">SVG</span>
					<ol>
						<li id="svg-lang"><a href="content/svg/lang.php">Language</a></li>
						<li id="svg-desc"><a href="content/svg/desc.php">Titles and Descriptions</a></li>
						<li id="svg-components"><a href="content/svg/components.php">Components</a></li>
						<li id="svg-text"><a href="content/svg/text.php">Text Content</a></li>
						<li id="svg-linking"><a href="content/svg/linking.php">Linking</a></li>
						<li id="svg-style"><a href="content/svg/css.php">Styling</a></li>
						<li id="svg-interactivity"><a href="content/svg/script.php">Interactivity</a></li>
					</ol>
				</li>
				<li id="css"><span class="nav-h1">EPUB Style Sheets</span>
					<ol>
						<li id="css-color"><a href="content/style/color.php">Colors</a></li>
						<li id="css-backgrounds"><a href="content/style/backgrounds.php">Background Images</a></li>
						<li id="css-hidden"><a href="content/style/hidden.php">Hidden Content</a></li>
						<li id="css-ref"><a href="content/style/reference.php">CSS Property Reference</a></li>
					</ol>
				</li>
				<li id="fxl"><span class="nav-h1">Fixed Layouts</span>
					<ol>
						<li id="fxl-xhtml"><a href="content/fixed/xhtml.php">XHTML</a></li>
						<li id="fxl-image"><a href="content/fixed/img.php">Image</a></li>
					</ol>
				</li>
				<li id="nav"><span class="nav-h1">Navigation</span>
					<ol>
						<li id="nav-toc"><a href="content/nav/toc.php">Table of Contents</a></li>
						<li id="nav-landmarks"><a href="content/nav/landmarks.php">Landmarks</a></li>
						<li id="nav-pagelist"><a href="content/nav/pagelist.php">Page List</a></li>
						<li id="nav-loi"><a href="content/nav/loi.php">List of Illustrations</a></li>
						<li id="nav-lot"><a href="content/nav/lot.php">List of Tables</a></li>
					</ol>
				</li>
				<li id="metadata"><span class="nav-h1">Metadata</span>
					<ol>
						<li id="meta-onix"><a href="content/meta/onix.php">ONIX Code List 196</a></li>
						<li id="meta-schema.org"><a href="content/meta/schema.org.php">Schema.org Accessibility Metadata</a></li>
					</ol>
				</li>
				<li id="media-overlays"><span class="nav-h1">Media Overlays</span>
					<ol>
						<li id="mo-overview"><a href="content/overlays/overview.php">Overview</a></li>
						<li id="mo-highlight"><a href="content/overlays/hilite.php">Highlighting</a></li>
						<li id="mo-lists"><a href="content/overlays/lists.php">Lists</a></li>
						<li id="mo-tables"><a href="content/overlays/tables.php">Tables</a></li>
					</ol>
				</li>
				<li id="tts"><span class="nav-h1">Text-to-Speech</span>
					<ol>
						<li id="tts-overview"><a href="content/tts/overview.php">Overview</a></li>
						<li id="tts-pls"><a href="content/tts/pls.php">PLS Lexicons</a></li>
						<li id="tts-ssml"><a href="content/tts/ssml.php">SSML</a></li>
						<li id="tts-speech"><a href="content/tts/speech.php">CSS3 Speech</a></li>
					</ol>
				</li>
				<li id="interactivity"><span class="nav-h1">Scripted Interactivity</span>
					<ol>
						<li id="script-pe"><a href="content/script/pe.php">Progressive Enhancement</a></li>
						<li id="script-validity"><a href="content/script/valid.php">Content Validity</a></li>
						<li id="script-wai-aria"><a href="content/script/aria.php">WAI-ARIA &amp; Custom Controls</a></li>
						<li id="script-forms"><a href="content/script/forms.php">Forms</a></li>
						<li id="script-regions"><a href="content/script/regions.php">Live Regions</a></li>
						<li id="script-canvas"><a href="content/script/canvas.php">Canvas</a></li>
					</ol>
				</li>
				<li id="compliance"><span class="nav-h1">Compliance</span>
					<ol>
						<li id="sec508"><a href="content/compliance/s508.php">Section 508 (US)</a></li>
					</ol>
				</li>
				<li id="glossary"><a class="back" href="content/glossary.php">Glossary</a></li>
			</ol>
		</nav>
		
		<?php include_once('includes/footer.php'); ?>
	</body>
</html>