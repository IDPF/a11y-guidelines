<?php include_once('../../includes/xml-declaration.php'); ?>
<?php $id='sc020'; $nav=1; $nav_items=array('reqs'); $category='script'; $page_name='Forms'; ?>
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
		
		<section id="sc020" class="section">
			<?php include_once('../../includes/page-title.php'); ?>
			
			<section id="sc020-desc" class="usage">
				<p>One of the biggest impediments to using forms effectively is understanding and navigating
					their layout. To assist readers, always clearly label form controls using the <code>label</code>
					element:</p>
				
				<pre class="prettyprint linenums"><code>&lt;label id="fname-label" for="fname">First name:&lt;/label>

&lt;input type="text"
       id="fname"
       name="first-name"/></code></pre>
				
				<p>The <code>for</code> attribute is used to explicitly tie the label to its control. This attribute
					should be included even if the <code>label</code> also contain its control:</p>
				
				<pre class="prettyprint linenums"><code>&lt;label id="q1a-label" for="q1a">
   &lt;input type="radio"
          id="q1a"
          name="q1-answer"/> a. Apples
&lt;/label></code></pre>
				
				<div epub:type="note">
					<p class="label">Note</p>
					<p>If a form control is not identified by a <code>label</code>, use the <code>aria-labelledby</code>
						attribute on the control to identify the element containing the label.</p>
				</div>
				
				<p>When including additional instructions &#8212; for example, text limits or character restrictions &#8212;
					try to include these within the label so that the information is immediately available to the reader.
					When this is not possible, attach an <code>aria-describedby</code> attribute to the control identifying
					the element containing the additional instructions:</p>
				
				<pre class="prettyprint linenums"><code>&lt;label for="username-label">User name:&lt;/label>

&lt;input type="text"
       id="uname"
       name="username"
       aria-describedby="username-req" />

&lt;span id="username-req">
   User names must be between 8 and 16 characters in 
   length and contain only alphanumeric characters.
&lt;/span></code></pre>
				
				<p>The HTML5 <code>required</code> attribute should always be attached to required fields so
					readers using assistive technologies can be made aware in the absence of visual cues:</p>
				
				<pre class="prettyprint linenums"><code>&lt;input type="text"
       id="uname"
       name="username"
       aria-describedby="username-req"
       required="required"
       aria-required="true"/></code></pre>
				
				<div epub:type="note">
					<p class="label">Note</p>
					<p>Including the <code>aria-required</code> attribute is encouraged, as not all assistive
						technologies may yet recognize the new HTML5 attribute.</p>
				</div>
				
				<p epub:type="bridgehead">Validation</p>
				
				<p>When a form contains invalid data that needs to be corrected by the reader, attach the
					<code>aria-invalid</code> attribute to each field so that assistive technologies can
					quickly identify the fields and move the reader to them:</p>
				
				
				<pre class="prettyprint linenums"><code>if (country.value == 'US' &amp;&amp; zip.value = '') {
   zip.setAttribute('aria-invalid', true);
}

else {
   zip.setAttribute('aria-invalid', false);
}</code></pre>
				
				<p>Do not attach the <code>aria-valid</code> to any form element by default. Until the reader
					submits a form, the fields in it are neither valid nor invalid.</p>
				
				<p>To improve the experience for all readers, consider using the new HTML5 <code>pattern</code>
					attribute on form fields that can be validated by simple regular expressions. The reader
					will be alerted immediately of problems instead of having to wait until submission. The 
					<code>title</code> attribute should also be attached whenever using <code>pattern</code>
					validation to explain the requirement. A username field could restrict the number and
					type of characters as follows:</p>
				
				<pre class="prettyprint linenums small"><code>&lt;input type="text"
       id="uname"
       name="username"
       aria-labelledby="username-label"
       pattern="[A-Za-z0-9]{8,16}"
       title="User names must be 8 to 16 alphanumeric characters"
       required="required"
       aria-required="true" /></code></pre>
			</section>
			
			<section id="sc020-reqs" class="reqs">
				<h3>Compliance References and Standards</h3>
				
				<ul>
					<li>WCAG 2.0 &#8212; <a href="http://www.w3.org/TR/WCAG20-TECHS/H85.html">H85: Using OPTGROUP to group OPTION elements inside a SELECT</a></li>
					<li>WCAG 2.0 &#8212; <a href="http://www.w3.org/TR/WCAG20-TECHS/H84.html">H84: Using a button with a select element to perform an action</a></li>
					<li>WCAG 2.0 &#8212; <a href="http://www.w3.org/TR/WCAG20-TECHS/H90.html">H90: Indicating required form controls using label or legend</a></li>
					<li>WCAG 2.0 &#8212; <a href="http://www.w3.org/TR/WCAG20-TECHS/H91.html">H91: Using HTML form controls and links</a></li>
					<li>WCAG 2.0 &#8212; <a href="http://www.w3.org/TR/WCAG20-TECHS/H92.html">H92: Including a text cue for colored form control labels</a></li>
				</ul>
			</section>
		</section>
		
		<?php include_once('../../includes/footer.php'); ?>
	</body>
</html>