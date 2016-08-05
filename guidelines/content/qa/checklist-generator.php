<?php include_once('../../includes/xml-declaration.php'); ?>
<?php $id='checklist'; $nav=0; $nav_items=array('semantics' => 'Semantics', 'xhtml' => 'XHTML Content Documents', 'svg' => 'SVG Content Documents and Images', 'css' => 'EPUB Style Sheets', 'fixed' => 'Fixed Layout', 'nav' => 'Navigation', 'meta' => 'Metadata', 'overlays' => 'Media Overlays', 'tts' => 'Text to Speech', 'script' => 'Scripted Interactivity'); $category='compliance'; $page_name='QA Checklist Generator'; ?>
<!DOCTYPE html>
<html xml:lang="en" lang="en"
	xmlns="http://www.w3.org/1999/xhtml">
	
	<head>
		<?php include_once('../../includes/title.php'); ?>
		<?php include_once('../../includes/html5-shiv.php'); ?>
		<link type="text/css" rel="stylesheet" href="../../css/epub3.css"/>
		<link type="text/css" rel="stylesheet" href="../../css/checklist.css"/>
		<style>
			section.section > section {
				border: none;
				margin-left: 0em;
			}
		</style>
		<script>
			<![CDATA[
				function validateOptions() {
				   if (!document.getElementById('reflowable').checked && !document.getElementById('fixed').checked) {
				      alert('At least one layout type type must be checked.');
				      document.getElementById('reflowable').focus();
				      return false;
				   }
				   if (!document.getElementById('xhtml').checked && !document.getElementById('svg').checked) {
				      alert('At least one content document type must be checked.');
				      document.getElementById('xhtml').focus();
				      return false;
				   }
				   return true;
				}
			]]>
		</script>
	</head>
	
	<body>
		<?php include_once('../../includes/header.php'); ?>
		
		<section class="section">
			<?php include_once('../../includes/page-title.php'); ?>
			
			<aside class="note">
			 <h3>Note</h3>
			 <p>This checklist is no longer being maintained. Content developers are advised to review the 
    			<a href="http://www.idpf.org/epub/a11y/">EPUB Accessibility</a> and 
    			<a href="http://www.idpf.org/epub/a11y/techniques/">Techniques</a> documents for guidance 
    			on creating accessible EPUB Publications. A conformance checking tool is currently under 
    			development that will obsolete this checklist. When completed, this page will be removed.</p>
			</aside>
			
			<section class="first">
				<form action="qa-checklist.php" onsubmit="return validateOptions()" method="post">
					<p><a href="qa-checklist.php">View complete checklist</a></p>
					<p>To generate a checklist specific to your EPUB, please select all applicable options
						from the following lists:</p>
					<fieldset id="layouts">
						<legend>Layout types</legend>
						<label for="reflowable">
							<input type="checkbox" name="reflowable" id="reflowable" checked="checked"/> Reflowable
						</label>
						<label for="fixed">
							<input type="checkbox" name="fixed" id="fixed"/> Fixed Layout
						</label>
					</fieldset>
					<fieldset id="docs">
						<legend>Content Documents</legend>
						<label for="xhtml">
							<input type="checkbox" name="xhtml" id="xhtml" checked="checked"/> XHTML
						</label>
						<label for="svg">
							<input type="checkbox" name="svg" id="svg"/> SVG
						</label>
					</fieldset>
					<fieldset id="content">
						<legend>Content</legend>
						<div class="multicol">
							<label for="annotations">
								<input type="checkbox" name="annotations" id="annotations"/> Annotations
							</label>
							<label for="audio">
								<input type="checkbox" name="audio" id="audio"/> Audio
							</label>
							<label for="cbr">
								<input type="checkbox" name="cbr" id="cbr"/> Context Breaks
							</label>
							<label for="emph">
								<input type="checkbox" name="emph" id="emph"/> Emphasis and Bolding
							</label>
							<label for="figures">
								<input type="checkbox" name="figures" id="figures"/> Figures
							</label>
							<label for="images">
								<input type="checkbox" name="images" id="images"/> Images
							</label>
							<label for="maps">
								<input type="checkbox" name="maps" id="maps"/> Image Maps
							</label>
							<label for="iframes">
								<input type="checkbox" name="iframes" id="iframes"/> Inline Frames
							</label>
							<label for="links">
								<input type="checkbox" name="links" id="links"/> Links
							</label>
							<label for="lists">
								<input type="checkbox" name="lists" id="lists"/> Lists
							</label>
							<label for="mathml">
								<input type="checkbox" name="mathml" id="mathml"/> MathML
							</label>
							<label for="notes">
								<input type="checkbox" name="notes" id="notes"/> Notes
							</label>
							<label for="pages">
								<input type="checkbox" name="pages" id="pages"/> Print Page Numbers
							</label>
							<label for="tables">
								<input type="checkbox" name="tables" id="tables"/> Tables
							</label>
							<label for="video">
								<input type="checkbox" name="video" id="video"/> Video
							</label>
						</div>
					</fieldset>
					<fieldset id="css">
						<legend>CSS</legend>
						<label for="color">
							<input type="checkbox" name="color" id="color"/> Text Color
						</label>
						<label for="bgcolor">
							<input type="checkbox" name="bgcolor" id="bgcolor"/> Backgrounds
						</label>
						<label for="hid">
							<input type="checkbox" name="hid" id="hid"/> Hidden Content
						</label>
					</fieldset>
					<fieldset id="nav">
						<legend>Navigation</legend>
						<label for="toc-chk">
							<input type="checkbox" name="toc-chk" id="toc-chk" checked="checked" disabled="disabled"/> Table of Contents
							<input type="hidden" name="toc" id="toc" value="1"/>
						</label>
						<label for="landmarks">
							<input type="checkbox" name="landmarks" id="landmarks"/> Landmarks
						</label>
					</fieldset>
					<fieldset id="audio-enhance">
						<legend>Audio Enhancements</legend>
						<label for="overlays">
							<input type="checkbox" name="overlays" id="overlays"/> Media Overlays
						</label>
					</fieldset>
					<fieldset id="tts-enhance">
						<legend>Text-to-Speech Enhancements</legend>
						<label for="pls">
							<input type="checkbox" name="pls" id="pls"/> PLS Lexicons
						</label>
						<label for="ssml">
							<input type="checkbox" name="ssml" id="ssml"/> SSML
						</label>
						<label for="speech">
							<input type="checkbox" name="speech" id="speech"/> CSS3 Speech
						</label>
					</fieldset>
					<fieldset id="interactivity">
						<legend>Interactivity</legend>
						<label for="forms">
							<input type="checkbox" name="forms" id="forms"/> Forms
						</label>
						<label for="script">
							<input type="checkbox" name="script" id="script"/> Scripting
						</label>
						<label for="controls">
							<input type="checkbox" name="controls" id="controls"/> Custom Controls
						</label>
						<label for="regions">
							<input type="checkbox" name="regions" id="regions"/> Live Regions
						</label>
						<label for="canvas">
							<input type="checkbox" name="canvas" id="canvas"/> Canvas
						</label>
					</fieldset>
					<fieldset id="priority">
						<legend>Filter Criteria by Priority (Experimental)</legend>
						<label for="base">
							<input type="checkbox" name="base" id="base" checked="checked" disabled="disabled"/> Baseline
							<input type="hidden" name="req" id="req" value="1"/>
						</label>
						<label for="rec">
							<input type="checkbox" name="rec" id="rec" checked="checked"/> Recommended
						</label>
						<label for="opt">
							<input type="checkbox" name="opt" id="opt" checked="checked"/> Optional
						</label>
					</fieldset>
					<input type="hidden" id="generate" name="generate" value="1"/>
					<input type="submit" name="Generate"/>
				</form>
			</section>
		</section>
		
		<?php include_once('../../includes/footer.php'); ?>
	</body>
</html>