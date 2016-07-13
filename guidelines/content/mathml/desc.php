<?php include_once('../../includes/xml-declaration.php'); ?>
<?php $id='math005'; $nav=1; $nav_items=array('exes','reqs','faq'); $category='mathml'; $page_name='Descriptions'; ?>
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
		
		<section id="math005" class="section">
			<?php include_once('../../includes/page-title.php'); ?>
			
			<section id="math005-desc" class="usage">
				<p>Although a benefit of native MathML support in XHTML content documents is the ability to provide voicing
					based on the markup, reading systems capable of such voicings are not likely to appear right
					away. It is consequently advisable to include a fallback description.</p>
				
				<p>Although natural language descriptions of math equations are a possibility, it is recommended
					to use <a href="http://www.gh-mathspeak.com/">MathSpeak</a> to write descriptions. Readers 
					already familiar with math-voicing programs will recognize the conventions used in MathSpeak, and 
					the language removes the potential for ambiguity that natural language can introduce.</p>
				
				<p>Descriptions can be added in one of two ways:</p>
				
				<ul>
					<li>using the MathML <code>alttext</code> attribute on the root <code>math</code> element.</li>
					<li>adding the description to a <code>xml-annotation</code> element.</li>
				</ul>
				
				<p>The use of the <code>alttext</code> attribute is only recommended for simple descriptions,
					since it is limited to 255 text characters. Descriptions that employ the <code>xml-annotation</code>
					element, on the other hand, are not limited by length and can utilize HTML5 flow content.</p>
			</section>
			
			<section id="math005-ex" class="example">
				<h3>Examples</h3>
				
				<figure id="math005-ex01">
					<figcaption>Example 1 &#8212; Adding a description using the <code>alttext</code> attribute</figcaption>
					<pre class="prettyprint linenums"><code>&lt;m:math
   xmlns:m="http://www.w3.org/1998/Math/MathML"
   alttext="Frac Root a EndRoot Over b EndFrac">
   
   &lt;m:mfrac>
      &lt;m:msqrt>
         &lt;m:mtext>a&lt;/m:mtext>
      &lt;/m:msqrt>
      &lt;m:mi>b&lt;/m:mi>
   &lt;/m:mfrac>
&lt;/m:math></code></pre>
				</figure>
				
				<figure id="math005-ex02">
					<figcaption>Example 2 &#8212; Adding a description using the <code>annotation-xml</code> element</figcaption>
					<pre class="prettyprint linenums"><code>&lt;m:math xmlns:m="http://www.w3.org/1998/Math/MathML">
   &lt;m:semantics>
      &lt;m:mfrac>
         &lt;m:msqrt>
            &lt;m:mtext>a&lt;/m:mtext>
         &lt;/m:msqrt>
         &lt;m:mi>b&lt;/m:mi>
      &lt;/m:mfrac>
      &lt;m:annotation-xml
              encoding="application/xhtml+xml"
              name="alternate-representation">
         &lt;span xmlns="http://www.w3.org/1999/xhtml">
            Frac Root a EndRoot Over b EndFrac
         &lt;/span>
      &lt;/m:annotation-xml>
   &lt;/m:semantics>
&lt;/m:math></code></pre>
				</figure>
			</section>
			
			<section id="nav005-samp" class="sample">
				<h3>Samples</h3>
				
				<p>The <a href="http://code.google.com/p/epub-samples/">EPUB Samples Project</a> contains the following 
					publications that include MathML:</p>
				
				<ul>
					<li><a href="http://code.google.com/p/epub-samples/downloads/list">Linear Algebra</a> (No descriptions)</li>
				</ul>
			</section>
			
			<section id="math005-reqs" class="reqs">
				<h3>Compliance References and Standards</h3>
				
				<ul>
					<li>MathML &#8212; <a href="http://www.w3.org/TR/MathML3/">Mathematical Markup Language (MathML) Version 3.0</a></li>
					<li><a href="http://www.gh-mathspeak.com/examples/grammar-rules/">MathSpeak™ Core Specification Grammar Rules</a></li>
				</ul>
			</section>
			
			<section id="math005-res" class="res">
				<h3>Additional Resources</h3>
				<ul>
					<li><a href="http://www.gh-mathspeak.com/examples/quick-tutorial/">Quick MathSpeak Tutorial</a></li>
				</ul>
			</section>
			
			<section id="math005-faq" class="faq">
				<h3>Frequently Asked Questions</h3>
				
				<dl class="faq">
					<dt id="math005-faq01">Why aren't natural language descriptions advisable?</dt>
					<dd><p>Consider the simple equation presented in <a href="#math005-ex01">Example 1</a> above. A reasonable
						natural language description might be "the square root of a over b". But consider that
						there are two ways that this statement could be interpreted:</p>
						<ol>
							<li>to take the square root of the value a and then divide the resulting value
								by b.</li>
							<li>to divide a by b and then take the square root of the resulting value.</li>
						</ol>
						<p>A reader who cannot see the visual presentation of the equation is not going to be
							able to determine which is the correct interpretation with only the description
							to go by. MathSpeak takes the ambiguity out of the equation by clearly breaking
							down the components of the equation in a way that doesn't leave ambiguity.</p>
					</dd>
					<dt id="math005-faq02">Is MathSpeak the only option for describing MathML?</dt>
					<dd><p>No, but it is the most openly documented format. Although some MathML applications
							take slightly different approaches to voicing equations, MathSpeak is a good reflection of
							the typical grammar.</p></dd>
					<dt id="math005-faq03">Should I use the verbose, brief or super-brief syntaxes?</dt>
					<dd><p>The different levels reflect the expected age and proficiency of the reader. A math book geared
							towards younger readers, or readers new to the topic, would typically employ the verbose grammar.
							More advanced readers already proficient in math and familiar with the grammar will likely find 
							the verbose syntax a nuisance, so either the brief or super-brief grammars can be employed.</p></dd>
				</dl>
			</section>
		</section>
		
		<?php include_once('../../includes/footer.php'); ?>
	</body>
</html>