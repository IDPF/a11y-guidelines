<?php include_once('../../includes/xml-declaration.php'); ?>
<?php $id='meta005'; $nav=1; $nav_items=array( 'ex','reqs','res','faq','rev'); $category='meta'; $page_name='ONIX'; ?>
<!DOCTYPE html>
<html xml:lang="en" lang="en"
	xmlns="http://www.w3.org/1999/xhtml"
	xmlns:epub="http://www.idpf.org/2007/ops">
	
	<head>
		<?php include_once('../../includes/title.php'); ?>
		<?php include_once('../../includes/html5-shiv.php'); ?>
		<link type="text/css" rel="stylesheet" href="../../css/epub3.css"/>
		<style type="text/css">
			dt { font-weight: bold; font-size: 95%; }
		</style>
		<?php include_once('../../includes/js.php'); ?>
	</head>
	
	<body>
		<?php include_once('../../includes/header.php'); ?>
		
		<section id="meta005" class="section">
			<?php include_once('../../includes/page-title.php'); ?>
			
			<section id="meta005-desc" class="usage">
				<p>ONIX Code List 196 enables the inclusion accessibility compliance metadata in
					an ONIX message. This information can then travel with the publication through distribution
					channels so that customers can be made aware of the accessible features the EPUB
					offers. Each success criteria will be handled in turn in this section.</p>
				
				<dl>
					<dt id="meta005-desc-onix01">01: LIA Compliance Scheme</dt>
					<dd><p>Indicates that the EPUB conforms to the Libri Italiani Accessibili guidelines.</p>
						<pre class="prettyprint linenums"><code>&lt;ProductFormFeature>
 &lt;ProductFormFeatureType>09&lt;/ProductFormFeatureType>
 &lt;ProductFormFeatureValue>01&lt;/ProductFormFeatureValue>
&lt;/ProductFormFeature></code></pre>
						<div epub:type="note">
							<p class="label">Note</p>
							<p>Additional codes may be added in the future as similar accessibility 
								standards emerge.</p>
						</div>
					</dd>
					
					<dt id="meta005-desc-onix10">10: No reading system accessibility options disabled (except)</dt>
					<dd><p>This criteria is not specific to EPUB 3. The enabling or disabling of accessibility
						features lies with content producers (for example, DRM restrictions). To meet the criteria,
						do not bundle or distribute your publications with restrictions on them that would disable
						access to the content by screen readers, etc.</p>
						<pre class="prettyprint linenums"><code>&lt;ProductFormFeature>
 &lt;ProductFormFeatureType>09&lt;/ProductFormFeatureType>
 &lt;ProductFormFeatureValue>10&lt;/ProductFormFeatureValue>
&lt;/ProductFormFeature></code></pre>
					</dd>
					
					<dt id="meta005-desc-onix11">11: Table of contents navigation</dt>
					<dd><p>The requirement to include an EPUB navigation document does not, in and of itself, satisfy 
						this requirement. A <code>toc nav</code> with links to the complete structure of your publication 
						is required.
						See the <a href="../nav/toc.php">Table of Contents section</a> for more information.
						Lists of <a href="../nav/lot.php">tables</a> and <a href="../nav/loi.php">illustrations</a> 
						must also be provided, if applicable.</p>
						<pre class="prettyprint linenums"><code>&lt;ProductFormFeature>
 &lt;ProductFormFeatureType>09&lt;/ProductFormFeatureType>
 &lt;ProductFormFeatureValue>11&lt;/ProductFormFeatureValue>
&lt;/ProductFormFeature></code></pre>
					</dd>
					
					<dt id="meta005-desc-onix12">12: Index navigation</dt>
					<dd><p>A linked index can be provided using ordered lists to meet this criteria, but work is
						ongoing at the IDPF on how to embed richer indexes. See the <a href="../xhtml/indexes.php">Indexes</a>
						section for more information.</p>
						<pre class="prettyprint linenums"><code>&lt;ProductFormFeature>
 &lt;ProductFormFeatureType>09&lt;/ProductFormFeatureType>
 &lt;ProductFormFeatureValue>12&lt;/ProductFormFeatureValue>
&lt;/ProductFormFeature></code></pre>
					</dd>
					
					<dt id="meta005-desc-onix13">13: Reading order</dt>
					<dd><p>The requirement to include a <code>spine</code> element does not satisfy this requirement.
						The logical reading order of the publication must be clearly delineated in the markup. Footnotes,
						tables, images, sidebars and all similar secondary content must be marked up so that it can be
						skipped over.</p>
						<pre class="prettyprint linenums"><code>&lt;ProductFormFeature>
 &lt;ProductFormFeatureType>09&lt;/ProductFormFeatureType>
 &lt;ProductFormFeatureValue>13&lt;/ProductFormFeatureValue>
&lt;/ProductFormFeature></code></pre>
					</dd>
					
					<dt id="meta005-desc-onix14">14: Short alternative descriptions</dt>
					<dd><p>Text alternatives must be provided for all significant images to meet this requirement. See the 
						<a href="../xhtml/images.php">Images</a> section for more information.</p>
						<pre class="prettyprint linenums"><code>&lt;ProductFormFeature>
 &lt;ProductFormFeatureType>09&lt;/ProductFormFeatureType>
 &lt;ProductFormFeatureValue>14&lt;/ProductFormFeatureValue>
&lt;/ProductFormFeature></code></pre>
					</dd>
					
					<dt id="meta005-desc-onix15">15: Full alternative descriptions</dt>
					<dd><p>Longer descriptions must be provided for all complex images to meet this requirement. See the 
						<a href="../xhtml/images.php">Images</a> section for more information.</p>
						<pre class="prettyprint linenums"><code>&lt;ProductFormFeature>
 &lt;ProductFormFeatureType>09&lt;/ProductFormFeatureType>
 &lt;ProductFormFeatureValue>15&lt;/ProductFormFeatureValue>
&lt;/ProductFormFeature></code></pre>
					</dd>
					
					<dt id="meta005-desc-onix16">16: Visualised data also available as non-graphical data</dt>
					<dd><p>Tabular or text equivalents must be provided for all bar graphs, pie charts and similar
						graphical representations of data.</p>
						<pre class="prettyprint linenums"><code>&lt;ProductFormFeature>
 &lt;ProductFormFeatureType>09&lt;/ProductFormFeatureType>
 &lt;ProductFormFeatureValue>16&lt;/ProductFormFeatureValue>
&lt;/ProductFormFeature></code></pre>
					</dd>
					
					<dt id="meta005-desc-onix17">17: Accessible math content</dt>
					<dd><p>To meet this requirement, MathML must be included for math equations, formulas, etc.</p>
					<pre class="prettyprint linenums"><code>&lt;ProductFormFeature>
 &lt;ProductFormFeatureType>09&lt;/ProductFormFeatureType>
 &lt;ProductFormFeatureValue>17&lt;/ProductFormFeatureValue>
&lt;/ProductFormFeature></code></pre>
					</dd>
					
					<dt id="meta005-desc-onix18">18: Accessible chem content</dt>
					<dd><p>EPUB does not provide native support for ChemML, but ChemML can be included using the
						<code>epub:switch</code> element to meet this requirement. An XHTML fallback will have to be 
						provided, however.</p>
						<pre class="prettyprint linenums"><code>&lt;ProductFormFeature>
 &lt;ProductFormFeatureType>09&lt;/ProductFormFeatureType>
 &lt;ProductFormFeatureValue>18&lt;/ProductFormFeatureValue>
&lt;/ProductFormFeature></code></pre>
					</dd>
					
					<dt id="meta005-desc-onix19">19: Print-equivalent page numbering</dt>
					<dd><p>If a print-equivalent of the ebook exists, the pagination can be included in the publication
						using the EPUB <code>pagebreak</code> property. To fully meet this requirement, a 
						<code>page-list nav</code> also needs to be included to facilitate page-level navigation.
						See the <a href="../xhtml/pagenum.php">Page Numbering</a> and 
						<a href="../nav/pagelist.php">Page List Navigation</a> sections for more information.</p>
						<pre class="prettyprint linenums"><code>&lt;ProductFormFeature>
 &lt;ProductFormFeatureType>09&lt;/ProductFormFeatureType>
 &lt;ProductFormFeatureValue>19&lt;/ProductFormFeatureValue>
&lt;/ProductFormFeature></code></pre>
					</dd>
					
					<dt id="meta005-desc-onix20">20: Synchronised pre-recorded audio</dt>
					<dd><p>The inclusion of media overlays to synchronize text and audio content is sufficient to
						meet this requirement. The overlays should be structured in such a way that they facilitate
						escaping and skipping of structures. See the Media Overlays subsections for more information.</p>
						<pre class="prettyprint linenums"><code>&lt;ProductFormFeature>
 &lt;ProductFormFeatureType>09&lt;/ProductFormFeatureType>
 &lt;ProductFormFeatureValue>20&lt;/ProductFormFeatureValue>
&lt;/ProductFormFeature></code></pre>
					</dd>
					
					<dt id="meta005-desc-onix21">21: Text-to-speech hinting provided</dt>
					<dd><p>This value indicates the inclusion of PLS lexicons, SSML tagging and/or CSS Speech properties
						to enhance text-to-speech playback of content.</p>
						<pre class="prettyprint linenums"><code>&lt;ProductFormFeature>
 &lt;ProductFormFeatureType>09&lt;/ProductFormFeatureType>
 &lt;ProductFormFeatureValue>21&lt;/ProductFormFeatureValue>
&lt;/ProductFormFeature></code></pre>
					</dd>
					
					<dt id="meta005-desc-onix22">22: Language tagging provided</dt>
					<dd><p>This value is set when the language of all content documents has been specified,
						as well as all instances in the text where the language changes. For more information,
						refer to the <a href="../xhtml/lang.php">Languages section</a> of this guide.</p>
						<pre class="prettyprint linenums"><code>&lt;ProductFormFeature>
 &lt;ProductFormFeatureType>09&lt;/ProductFormFeatureType>
 &lt;ProductFormFeatureValue>22&lt;/ProductFormFeatureValue>
&lt;/ProductFormFeature></code></pre>
					</dd>
				</dl>
				
				<p class="offset">The following informational fields should always be included when applicable:</p>
				
				<dl>
					<dt id="meta005-desc-onix94">94: Compliance web page for detailed accessibility information</dt>
					<dd><p>If accessibility features, compliance and/or testing information is available on the web,
						provide a link to the page in this field. This information must be validated against an independent 
						compliance scheme or the testing performed by a testing organization.</p>
						<pre class="prettyprint linenums"><code>&lt;ProductFormFeature>
 &lt;ProductFormFeatureType>09&lt;/ProductFormFeatureType>
 &lt;ProductFormFeatureValue>94&lt;/ProductFormFeatureValue>
 &lt;ProductFormFeatureDescription>
    http://standards-org.example.com/book/123/compliance
 &lt;/ProductFormFeatureDescription>
&lt;/ProductFormFeature></code></pre>
					</dd>
					
					<dt id="meta005-desc-onix95">95: Trusted intermediary’s web page for detailed accessibility information</dt>
					<dd><p>SImilar to field 94, but the link is to compliance information provided by a trusted intermediary 
						or third party nominated by the publisher.</p>
						<pre class="prettyprint linenums"><code>&lt;ProductFormFeature>
 &lt;ProductFormFeatureType>09&lt;/ProductFormFeatureType>
 &lt;ProductFormFeatureValue>95&lt;/ProductFormFeatureValue>
 &lt;ProductFormFeatureDescription>
    http://intermediary.example.com/book/123/compliance
 &lt;/ProductFormFeatureDescription>
&lt;/ProductFormFeature></code></pre>
					</dd>
					
					<dt id="meta005-desc-onix96">96: Publisher’s web page for detailed accessibility information</dt>
					<dd><p>Similar to fields 94 and 95, but the link is to compliance information provided directly by 
						the publisher.</p>
						<pre class="prettyprint linenums"><code>&lt;ProductFormFeature>
 &lt;ProductFormFeatureType>09&lt;/ProductFormFeatureType>
 &lt;ProductFormFeatureValue>96&lt;/ProductFormFeatureValue>
 &lt;ProductFormFeatureDescription>
    http://publisher.example.com/book/123/compliance
 &lt;/ProductFormFeatureDescription>
&lt;/ProductFormFeature></code></pre>
					</dd>
					
					<dt id="meta005-desc-onix97">97: Compatibility tested</dt>
					<dd><p>A record of all compatibility testing that has been performed on the ebook should be
						recorded in this field.</p>
						<pre class="prettyprint linenums"><code>&lt;ProductFormFeature>
 &lt;ProductFormFeatureType>09&lt;/ProductFormFeatureType>
 &lt;ProductFormFeatureValue>97&lt;/ProductFormFeatureValue>
 &lt;ProductFormFeatureDescription>
    Content has been tested to work on iBooks,
    Sony Reader and Adobe Digital Editions in 
    both scripting enabled and disabled modes.
 &lt;/ProductFormFeatureDescription>
&lt;/ProductFormFeature></code></pre>
					</dd>
					
					<dt id="meta005-desc-onix98">98: Trusted Intermediary contact</dt>
					<dd><p>If produced or distributed through a
						<a href="http://www.visionip.org/stakeholders/en/trusted_intermediaries.html">trusted intermediary</a>,
						this field provides contact information for additional information about the accessibility features 
						in the EPUB.</p>
					<pre class="prettyprint linenums"><code>&lt;ProductFormFeature>
 &lt;ProductFormFeatureType>09&lt;/ProductFormFeatureType>
 &lt;ProductFormFeatureValue>98&lt;/ProductFormFeatureValue>
 &lt;ProductFormFeatureDescription>
    accessinfo@global-library.example.com
 &lt;/ProductFormFeatureDescription>
&lt;/ProductFormFeature></code></pre>
					</dd>
					
					<dt id="meta005-desc-onix99">99: Publisher contact for further accessibility information</dt>
					<dd><p>The contact information for an internal representative who can provide additional information
						about the accessibility features in the EPUB.</p>
						<pre class="prettyprint linenums"><code>&lt;ProductFormFeature>
 &lt;ProductFormFeatureType>09&lt;/ProductFormFeatureType>
 &lt;ProductFormFeatureValue>99&lt;/ProductFormFeatureValue>
 &lt;ProductFormFeatureDescription>
    accessibility-officer@example.com
 &lt;/ProductFormFeatureDescription>
&lt;/ProductFormFeature></code></pre>
					</dd>
				</dl>
			</section>
			
			<section id="meta005-ex" class="example">
				<h3>Example</h3>
				
				<figure id="meta005-ex01">
					<figcaption>Example 1 &#8212; Sample ONIX message featuring accessibility information</figcaption>
					<pre class="prettyprint linenums small"><code>&lt;ONIXMessage release="3.0">
  &lt;Header>
    &#8230;
  &lt;/Header>
  &lt;Product>
    &#8230;
    &lt;DescriptiveDetail>
      &lt;ProductFormFeature>
        &lt;ProductFormFeatureType>09&lt;/ProductFormFeatureType>
        &lt;ProductFormFeatureValue>10&lt;/ProductFormFeatureValue>
      &lt;/ProductFormFeature>
      &lt;ProductFormFeature>
        &lt;ProductFormFeatureType>09&lt;/ProductFormFeatureType>
        &lt;ProductFormFeatureValue>11&lt;/ProductFormFeatureValue>
      &lt;/ProductFormFeature>
      &lt;ProductFormFeature>
        &lt;ProductFormFeatureType>09&lt;/ProductFormFeatureType>
        &lt;ProductFormFeatureValue>13&lt;/ProductFormFeatureValue>
      &lt;/ProductFormFeature>
    &lt;/DescriptiveDetail>
    &#8230;
    &lt;TitleDetail>
      &lt;TitleType>01&lt;/TitleType>
      &lt;TitleElement>
        &lt;TitleElementLevel>01&lt;/TitleElementLevel>
        &lt;TitleText>Accessible EPUB 3&lt;/TitleText>
      &lt;/TitleElement>
    &lt;/TitleDetail>
    &#8230;
  &lt;/Product>
&lt;/ONIXMessage></code></pre>
				</figure>
				
				<figure id="meta005-ex02">
					<figcaption>Example 2 &#8212; Linking an ONIX message</figcaption>
					<pre class="prettyprint linenums small"><code>&lt;package … >
    &lt;metadata>
        … 
        &lt;link
              rel="onix-record"
              href="EPUB/meta/onix-9781234567890.xml"/>
        …
    &lt;/metadata> 
    …
&lt;/package></code></pre>
				</figure>
			</section>
			
			
			<section id="meta005-reqs" class="reqs">
				<h3>Compliance References and Standards</h3>
				
				<ul>
					<li>ONIX &#8212; <a href="http://www.editeur.org/ONIX/book/codelists/current.html#codelist196">List 196: E-publication Accessibility Details</a></li>
				</ul>
			</section>
			
			<section id="meta005-res" class="res">
				<h3>Additional Resources</h3>
				<ul>
					<li><a href="http://www.editeur.org/83/Overview/">ONIX for Books 3.0 Overview</a></li>
					<li><a href="http://wiki.creativecommons.org/images/1/13/Accessibility_metadata_in_ONIX_for_Books.pdf">DRAFT Proposals for e-book accessibility description in ONIX</a></li>
				</ul>
			</section>
			
			<section id="meta005-faq" class="faq">
				<h3>Frequently Asked Questions</h3>
				
				<dl class="faq">
					<dt id="meta005-faq01">Does the ONIX message have to be included in the EPUB container?</dt>
					<dd><p>No, ONIX messages are not publication resources so can be hosted outside the container.
							When considering external hosting of resources, duly consider that not all reading systems 
							are connected to the internet; an accessible device may wind up without access to 
							your accessibility information.</p>
					</dd>
					<dt id="meta005-faq02">Can I use other metadata standards to include accessibility information?</dt>
					<dd><p>Yes, but at this time only ONIX provides such clearly-defined fields. The easy ability to parse and
							extract this information from the message is why ONIX is recommended, plus its prevalence
							as the metadata format of choice in commercial distribution channels.</p></dd>
					<dt id="meta005-faq03">How is this metadata useful?</dt>
					<dd><p>The metadata can be used in distribution channels to allow readers to discover whether the publication
							is suitable for their needs, as one example. A book store search engine could use the information to
							allow readers to filter the available ebooks to only those that they know will work with their assistive
							technology.</p>
						<p>The reading system could similarly present the accessibility information to the reader
							in advance of reading even if the book has been delivered through a less accessible channel (e.g.,
							enabling a quicker return of the ebook if it's known to be incompatible with their system).</p>
						<p>Without this information, the reader has no way to distinguish the quality of one EPUB from another.</p></dd>
				</dl>
			</section>
		</section>
		
		<?php include_once('../../includes/footer.php'); ?>
	</body>
</html>