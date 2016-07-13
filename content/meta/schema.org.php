<?php include_once('../../includes/xml-declaration.php'); ?>
<?php $id='meta010'; $nav=1; $nav_items=array('exes','reqs','res'); $category='meta'; $page_name='Schema.org Accessibility Metadata'; ?>
<!DOCTYPE html>
<html xml:lang="en" lang="en"
	xmlns="http://www.w3.org/1999/xhtml"
	xmlns:epub="http://www.idpf.org/2007/ops">
	
	<head>
		<?php include_once('../../includes/title.php'); ?>
		<?php include_once('../../includes/html5-shiv.php'); ?>
		<link type="text/css" rel="stylesheet" href="../../css/epub3.css"/>
		<style type="text/css">
			dt { font-weight: bold; font-size: 105%; padding-top: 2em; }
			span.draft { color: rgb(190,0,0); }
		</style>
		<?php include_once('../../includes/js.php'); ?>
	</head>
	
	<body>
		<?php include_once('../../includes/header.php'); ?>
		
		<section id="meta010" class="section">
			<?php include_once('../../includes/page-title.php'); ?>
			
			<section id="meta010-desc" class="usage">
				<p>The <a href="http://www.schema.org/CreativeWork">schema.org CreativeWork class</a> includes properties 
					defined by the <a href="http://www.a11ymetadata.org/">Acessibility Metadata Project</a> that can be
					used to identify the accessible qualities of a publication. This metadata can be expressed in 
					XHTML content documents using RDFa or microdata attributes to identify the accessible qualities
					of the content (e.g., videos). It can also be included in the EPUB package document to provide an
					overall picture of the accessibility of the given rendition of the publication.</p>
				
				<div epub:type="note">
					<p class="label">Note</p>
					<p>Until <a href="http://www.idpf.org/epub/301/">EPUB 3.0.1</a> becomes a recommended specification, 
						and <a href="http://mvnrepository.com/artifact/org.idpf/epubcheck">epubcheck</a> is updated, 
						the <code>schema:</code> prefix in the examples on this page has to be declared in the package 
						document using the <a href="http://www.idpf.org/epub3/latest/publications#sec-prefix-attr"><code>epub:prefix</code> 
							attribute</a>.</p>
				</div>
				
				<dl>
					<dt id="accessMode">accessMode <span class="draft">[draft]</span></dt>
					<dd><p><em>This property is still under discussion and not yet formally a part of schema.org.</em></p>
						<p>An access mode through which the intellectual content of a described resource or adaptation is communicated
						(i.e., the human sensory perceptual system or cognitive faculty through which a person may process or perceive 
						information). If adaptations for the resource are known, the access modes of those adaptations are not included.</p>
						<p>The following values are recommended for this property:</p>
						<ul>
							<li>auditory</li>
							<li>colorDependent</li>
							<li>tactile</li>
							<li>textual</li>
							<li>visual</li>
							<li>visual/chart</li>
							<li>visual/chem</li>
							<li>visual/diagram</li>
							<li>visual/math</li>
							<li>visual/music</li>
							<li>visual/text</li>
						</ul>
						<p>This property is related to the rendition:accessMode property proposed for rendition selection.</p>
						<p>Package Document usage:</p>
						<pre class="prettyprint linenums"><code>&lt;meta property="schema:accessMode">textual&lt;/meta></code></pre>
						<p>XHTML Content Documents usage: (RDFa)</p>
						<pre class="prettyprint linenums"><code>&lt;meta property="accessMode" content="textual"/></code></pre>
					</dd>
					
					<dt id="accessibilityFeature">accessibilityFeature</dt>
					<dd><p>Content features of the resource, such as accessible media, supported enhancements for accessibility and alternatives.</p>
						<p>The following values are recommended for this property:</p>
						<ul>
							<li>alternativeText</li>
							<li>audioDescription</li>
							<li>braille</li>
							<li>captions</li>
							<li>ChemML</li>
							<li>displayTransformability</li>
							<li>enhancedAudio</li>
							<li>highContrast</li>
							<li>largePrint</li>
							<li>latex</li>
							<li>longDescription</li>
							<li>MathML</li>
							<li>resizeText</li>
							<li>signLanguage</li>
							<li>structuralNavigation</li>
							<li>tactileGraphic</li>
							<li>tactileObject</li>
							<li>transcript</li>
						</ul>
						<p>Package Document usage:</p>
						<pre class="prettyprint linenums"><code>&lt;meta property="schema:accessibilityFeature">captions&lt;/meta></code></pre>
						<p>XHTML Content Documents usage: (RDFa)</p>
						<pre class="prettyprint linenums"><code>&lt;p>Video includes &lt;span 
property="accessibilityFeature">captions&lt;/span>.&lt;/p></code></pre>
					</dd>
					
					<dt id="accessibilityHazard">accessibilityHazard</dt>
					<dd><p>A characteristic of the described resource that is physiologically dangerous to some users. Related to 
						<a href="http://www.w3.org/TR/UNDERSTANDING-WCAG20/seizure.html">WCAG 2.0 guideline 2.3</a>.</p>
						<p>The following values are recommended for this property:</p>
						<ul>
							<li>flashing</li>
							<li>motionSimulation</li>
							<li>sound</li>
						</ul>
						<p>It is recommended that the above properties all be set either in the positive or negative sense.
							To indicate that no flashing hazard is known to exist, the value would be "noFlashing". The same
							pattern is used for the other two properties.</p>
						<p>A publication that omits some or all of these properties is assumed to have not been checked
							for that hazard.</p>
						<p>Package Document usage:</p>
						<pre class="prettyprint linenums"><code>&lt;meta property="schema:accessibilityHazard">flashing&lt;/meta></code></pre>
						<p>XHTML Content Documents usage: (RDFa)</p>
						<pre class="prettyprint linenums"><code>&lt;p>&lt;strong>Warning&lt;/strong>: &lt;span
property="accessibilityHazard">flashing&lt;/span> 
in this video may cause seizures in some 
individuals.&lt;/p></code></pre>
					</dd>
					
					<dt id="accessibilityControl">accessibilityControl</dt>
					<dd><p>Identifies one or more input methods can be used that allow access to all of the application functionality.</p>
						<p>The following values are recommended for this property:</p>
						<ul>
							<li>fullAudioControl</li>
							<li>fullKeyboardControl</li>
							<li>fullMouseControl</li>
							<li>fullTouchControl</li>
							<li>fullVideoControl</li>
							<li>timing</li>
						</ul>
						<p>Package Document usage:</p>
						<pre class="prettyprint linenums"><code>&lt;meta property="schema:accessibilityControl">
fullKeyboardControl&lt;/meta></code></pre>
						<p>XHTML Content Documents usage: (RDFa)</p>
						<pre class="prettyprint linenums"><code>&lt;meta property="accessibilityControl" content="fullKeyboardControl"/></code></pre>
					</dd>
					
					<dt id="accessibilityAPI">accessibilityAPI</dt>
					<dd><p>Indicates that the resource is compatible with the referenced accessibility API.</p>
						<p>The following values are recommended for this property:</p>
						<ul>
							<li>AndroidAccessibility</li>
							<li>ARIA</li>
							<li>ATK</li>
							<li>AT-SPI</li>
							<li>BlackberryAccessibility</li>
							<li>iAccessible2</li>
							<li>iOSAccessibility</li>
							<li>JavaAccessibility</li>
							<li>MacOSXAccessibility</li>
							<li>MSAA</li>
							<li>UIAutomation</li>
						</ul>
						<p>Package Document usage:</p>
						<pre class="prettyprint linenums"><code>&lt;meta property="schema:accessibilityAPI">ARIA&lt;/meta></code></pre>
						<p>XHTML Content Documents usage: (microdata)</p>
						<pre class="prettyprint linenums"><code>&lt;meta itemprop="accessibilityFeature" content="ARIA"/></code></pre>
					</dd>
				</dl>
			</section>
			
			<section id="meta010-ex" class="example">
				<h3>Examples</h3>
				
				<figure id="meta010-ex01">
					<figcaption>Example 1 &#8212; Package Document metadata</figcaption>
					<p>The following example shows a typical set of metadata for a math textbook with MathML and described images,
						and that includes accessible scripted content.</p>
					<pre class="prettyprint linenums small"><code>&lt;metadata>
  &lt;meta property="schema:accessibilityFeature">structuralNavigation&lt;/meta>
  &lt;meta property="schema:accessibilityFeature">MathML&lt;/meta>
  &lt;meta property="schema:accessibilityFeature">alternativeText&lt;/meta>
  &lt;meta property="schema:accessibilityFeature">longDescriptions&lt;/meta>
  &lt;meta property="schema:accessibilityAPI">ARIA&lt;/meta>
  &lt;meta property="schema:accessibilityControl">fullKeyboardControl&lt;/meta>
  &lt;meta property="schema:accessibilityControl">fullMouseControl&lt;/meta>
  &lt;meta property="schema:accessibilityControl">fullTouchControl&lt;/meta>
  &lt;meta property="schema:accessibilityHazard">noFlashing&lt;/meta>
  &lt;meta property="schema:accessibilityHazard">noSound&lt;/meta>
  &lt;meta property="schema:accessibilityHazard">noMotionSimulation&lt;/meta>
  …
&lt;/metadata></code></pre>
				</figure>
				
				<figure id="meta010-ex02">
					<figcaption>Example 2 &#8212; Embedded video metadata</figcaption>
					<pre class="prettyprint linenums small"><code>&lt;div vocab="http://www.schema.org" typeof="VideoObject" property="video">
  &lt;video controls="controls" src="croc.mp4"/>
  &lt;meta property="accessibilityFeature">captions&lt;/meta>
  &lt;meta property="accessibilityFeature">transcript&lt;/meta>
  &lt;meta property="accessibilityControl">fullKeyboardControl&lt;/meta>
  &lt;meta property="accessibilityControl">fullMouseControl&lt;/meta>
  &lt;meta property="accessibilityControl">fullTouchControl&lt;/meta>
  &lt;meta property="accessibilityHazard">noFlashing&lt;/meta>
  &lt;meta property="accessibilityHazard">noSound&lt;/meta>
  &lt;meta property="accessibilityHazard">noMotionSimulation&lt;/meta>
  &lt;p>A transcript of the video follows:&lt;/p>
  …
&lt;/div></code></pre>
				</figure>
			</section>
			
			
			<section id="meta010-reqs" class="reqs">
				<h3>Compliance References and Standards</h3>
				
				<ul>
					<li><a href="http://www.a11ymetadata.org">a11ymetadata project</a></li>
					<li><a href="http://www.imsglobal.org/accessibility/afav3p0pd//AfA3p0_DRDinfoModel_v1p0pd.html">IMS Global 
						Access For All (AfA) Digital Resource Description Specification Information Model Version 3.0 Specification</a></li>
				</ul>
			</section>
			
			<section id="meta010-res" class="res">
				<h3>Additional Resources</h3>
				<ul>
					<li><a href="http://www.schema.org">schema.org</a></li>
					<li><a href="http://www.idpf.org/epub3/latest/publications#sec-package-documents">EPUB 3 Package Document</a></li>
					<li><a href="http://www.w3.org/TR/rdfa-lite/">RDFa Lite</a></li>
					<li><a href="http://www.w3.org/TR/microdata/">microdata</a></li>
				</ul>
			</section>
		</section>
		
		<?php include_once('../../includes/footer.php'); ?>
	</body>
</html>