<?php include_once('../../includes/xml-declaration.php'); ?>
<?php $id='css015'; $nav=1; $nav_items=array('exes','reqs','faq','rev'); $category='style'; $page_name='Hidden Content'; ?>
<!DOCTYPE html>
<html xml:lang="en" lang="en"
	xmlns="http://www.w3.org/1999/xhtml"
	xmlns:epub="http://www.idpf.org/2007/ops">
	
	<head>
		<?php include_once('../../includes/title.php'); ?>
		<?php include_once('../../includes/html5-shiv.php'); ?>
		<link type="text/css" rel="stylesheet" href="../../css/epub3.css"/>
		<?php include_once('../../includes/js.php'); ?>
		<script type="text/javascript" src="../../js/jquery172min.js"></script>
		<script type="text/javascript" src="../../js/jquery.cookie.js"></script>
		<style type="text/css">
			div.working-example {
				border: 1px solid black;
				background-color: rgb(236,236,236);
			}
			div#code-control {
				margin-left: 3em;
			}
			label {
				display: block;
			}
		</style>
	</head>
	
	<body onload="showControls(); renderExamples();">
		<?php include_once('../../includes/header.php'); ?>
		
		<section id="css015" class="section">
			<?php include_once('../../includes/page-title.php'); ?> 
			
			<section id="css015-desc" class="usage">
				
				<p>Content should never be hidden by default in EPUBs, as this can make it inaccessible
					to all readers. Readers should always have the option to determine what content they wish 
					to read after the content has loaded, and regardless of whether the information is targeted 
					to facilitate reading by specific groups.</p>
				
				<p>Avoid using CSS solutions for hiding any type of primary content, as they typically don't
					work as developers expect:</p>
				
				<ul>
					<li>Setting the <code class="property">display</code> property to <code class="value">hidden</code>
						to not render it is the same as telling an assistive technology not to render it</li>
					<li>The same applies when setting the <code class="property">visibility</code> property to 
						<code class="value">hidden</code></li>
					<li>The HTML <code>hidden</code> attribute is equivalent to setting the above two properties,
						so again effects no change</li>
					<li>Absolute positioning content off-screen and using large negative margins are common
						Web practices, but are not guaranteed to be supported in reading systems which may not
						allow positioning outside the boundaries of the viewport. They also take the choice of
						what content a reader wants access to away from the reader</li>
					<li>Clipping content to a single pixel and changing its opacity or color is an equally flawed
						technique to rely on</li>
				</ul>
				
				<p>If content is intended for a specific audience, use the techniques that HTML5 and ARIA make
					available. Standard hyperlinks to text alternatives, such as transcripts
					of audio and video tracks, are more broadly usable than hidden content.</p>
				
				<p>There are going to be cases where some content does need to be legitimately hidden, such
					as when including interactive features and forms.</p>
				
				<p>Ensure that such content is not central to understand the publication, and that 
					<a href="../script/pe.php">progressive enhancement</a> techniques have been followed (i.e., the 
					interactive nature of the content that requires the visibility to change is not an impediment 
					to consuming the publication).</p>
					
				<p>The <code>aria-hidden</code> attribute provides a way to selectively hide visible content from 
				    an assistive technology, or expose hidden content. Use this attribute with caution, as toggling
				    content for assistive technologies can have negative effects if not all user groups are taken 
				    into consideration.</p>
			</section>
			
			<section id="css015-ex" class="example">
				<h3>Examples</h3>
				<figure id="css015-ex01">
					<figcaption>Example 1 &#8212; Hiding a form result area</figcaption>
					<pre class="prettyprint linenums"><code>&lt;div id="result"
     aria-live="assertive"
     hidden="hidden"/></code></pre>
				</figure>
				
				<figure id="css015-ex02">
					<figcaption>Example 2 &#8212; Providing scripted control over display</figcaption>
					
					<p>The following sample page provides readers the option to hide code examples if
						they have a reading system that supports scripting and cookies. By default, the 
						reader is alerted that their system may not support the feature (a failure to display
						could be because the reader has chosen to disable features, so it's better to let
						them know the feature exists than remove all traces).</p>
					
					<pre class="prettyprint linenums"><code>&lt;body onload="showControls()">
   &lt;p>
      This book includes samples in both C#
      and VisualBasic. You can disable one 
      or both languages from being displayed 
      by checking the following options:
   &lt;/p>
   
   &lt;div id="code-control">
      Sorry, this functionality is only 
      available when both scripting and 
      cookies are enabled.
   &lt;/div>
&lt;/body></code></pre>
					
					
					<p>The following minimal sample JavaScript shows the different functionality that would be required
						to make this example work. When the preferences page loads, the control checkboxes are inserted
						in place of the default message if scripting is enabled (the <code>showControls</code> function).</p>
					
					<p>When the reader changes their preferences by selecting or deselecting an option, the new status 
						is stored in a cookie (the <code>setPreferences</code> function). Storing the preference in a cookie 
						means the <code>loadSettings</code> and <code>renderExamples</code> functions could be called 
						in tandem on each new chapter load to hide any content so that the reader does not have to re-set 
						every time.</p>
					
					<p>A more complete example might provide localized options at the point of each example to re-enable.</p>
					
					<pre class="prettyprint linenums small"><code>&lt;script type="text/javascript">
&lt;![CDATA[

var setting = new Array();
   
/* default state is to enable all examples */
setting['show-cs'] = true;
setting['show-vb'] = true;

/* check if the reading system supports the needed scripting */
setting['scriptEnabled'] = (
  !navigator.epubReadingSystem.hasFeature('dom-manipulation') ||
  !navigator.cookieEnabled
) ? false : true;


function showControls() {

  /* exit if the reading system does not support scripting */
  if (!setting['scriptEnabled']) { return; }
  
  var cntrl = document.getElementById('code-control');
  
  /* delete the default text */
  while (cntrl.hasChildNodes()) {
    cntrl.removeChild(cntrl.firstChild);
  }
  
  /* add the checkbox controls */
  createControl('cs');
  createControl('vb');
  
  /* check if reader already has preferences */
  loadSettings();
  
  /* set the checkbox state */
  document.getElementById('hide-cs').checked = !setting['show-cs'];
  document.getElementById('hide-vb').checked = !setting['show-vb'];
}


function createControl(cid) {

  var label = document.createElement('label');
     label.setAttribute('for', cid+'-chkbox');
  
  var chkbox = document.createElement('input');
     chkbox.setAttribute('type', 'checkbox');
     chkbox.onclick = function () { setPreferences(); };
     chkbox.name = cid + '-chkbox';
     chkbox.id = 'hide-' + cid;
  
  label.appendChild(chkbox);
  
  var hideText = 'Hide all ';
  hideText += (cid == 'cs') ? 'C#' : 'VB';
  hideText += ' examples';
  
  label.appendChild(document.createTextNode(hideText));
  
  document.getElementById('code-control').appendChild(label);
}


function loadSettings() {

  /* exit if the reading system does not support scripting */
  if (!setting['scriptEnabled']) { return; }
  
  if ($.cookie('exampleCodeBook')) {
    /*  grab the display preferences from the cookie */
    var display = $.cookie('exampleCodeBook');
    
    var cs = display.substring(0,display.indexOf(';'));
    var vb = display.substring(display.indexOf(';')+1);
    
    setting['show-cs'] = 
      cs.substring(cs.indexOf('=')+1) == 'true' ? true : false;
    setting['show-vb'] =
      vb.substring(vb.indexOf('=')+1) == 'true' ? true : false;
  }
}


function setPreferences() {
  
  /* get the current checked status */
  setting['show-cs'] = !document.getElementById('hide-cs').checked;
  setting['show-vb'] = !document.getElementById('hide-vb').checked;
  
  /* and set preferences to a cookie using jquery-cookie library */
  $.cookie("exampleCodeBook", "cs="+setting['show-cs']+";vb="+setting['show-vb']);

}


function renderExamples() {

  /* exit if the reading system does not support scripting */
  if (!setting['scriptEnabled']) { return; }
  
  var snippets = document.getElementsByTagName('pre');
  
  for (var i = 0; i &lt; snippets.length; i++) {
    if (snippets[i].id.indexOf('-cs') > 0) {
      toggleExample(snippets[i], setting['show-cs']);
    }
    else if (snippets[i].id.indexOf('-vb') > 0) {
      toggleExample(snippets[i], setting['show-vb']);
    }
  }
}


function toggleExample(ex, show) {
  if (show) {
    ex.removeAttribute("hidden");
  }
  else {
    ex.setAttribute("hidden", "hidden");
}

]]&gt;
&lt;/script></code></pre>

					
					<script type="text/javascript">
						<![CDATA[
						
							var setting = new Array();
								setting['show-cs'] = true;
								setting['show-vb'] = true;
								setting['scriptEnabled'] = (
										//!navigator.epubReadingSystem.hasFeature('dom-manipulation') ||
										!navigator.cookieEnabled
									) ? false : true;
							
							function showControls() {
								if (!setting['scriptEnabled']) { return; }
								
								var cntrl = document.getElementById('code-control');
								
								while (cntrl.hasChildNodes()) {
									cntrl.removeChild(cntrl.firstChild);
								}
								
								createControl('cs');
								createControl('vb');
								
								loadSettings();
      
								document.getElementById('hide-cs').checked = !setting['show-cs'];
								document.getElementById('hide-vb').checked = !setting['show-vb'];
							}
							
							
							function createControl(cid) {
							
								var label = document.createElement('label');
									label.setAttribute('for', cid+'-chkbox');
								
								var chkbox = document.createElement('input');
									chkbox.setAttribute('type', 'checkbox');
									chkbox.onclick = function () { setPreferences(); };
									chkbox.name = cid + '-chkbox';
									chkbox.id = 'hide-' + cid;
								
								label.appendChild(chkbox);
								
								var hideText = 'Hide all ' + (cid == 'cs' ? 'C#' : 'VB') + ' examples';
								label.appendChild(document.createTextNode(hideText));
								
								document.getElementById('code-control').appendChild(label);
							}
							
							
							function loadSettings() {
							
								if ($.cookie('exampleCodeBook')) {
									var display = $.cookie('exampleCodeBook');
									
									var cs = display.substring(0,display.indexOf(';'));
									var vb = display.substring(display.indexOf(';')+1);
									
									setting['show-cs'] = cs.substring(cs.indexOf('=')+1) == 'true' ? true : false;
									setting['show-vb'] = vb.substring(vb.indexOf('=')+1) == 'true' ? true : false;
								}
								
							}
							
							
							function setPreferences() {
								setting['show-cs'] = !document.getElementById('hide-cs').checked;
								setting['show-vb'] = !document.getElementById('hide-vb').checked;
								
								$.cookie("exampleCodeBook", "cs="+setting['show-cs']+";vb="+setting['show-vb']);

/* the next line is unique to the working example to also change the visible state at the same time */
								renderExamples();
							}
							
							
							function renderExamples() {
							
								if (!setting['scriptEnabled']) { return; }
								
								var snippets = document.getElementsByTagName('pre');
								
								for (var i = 0; i < snippets.length; i++) {
									if (snippets[i].id.indexOf('-cs') > 0) {
										toggleExample(snippets[i], setting['show-cs']);
									}
									
									else if (snippets[i].id.indexOf('-vb') > 0) {
										toggleExample(snippets[i], setting['show-vb']);
									}
								}
							}
							
							function toggleExample(ex, show) {
								if (show) {
									ex.removeAttribute("hidden");
								}
								else {
									ex.setAttribute("hidden", "hidden");
								}
							}
							
						]]>
					</script>
					
					<p>A working example of this code follows:</p>
					
					<div class="working-example">
						<p>This book includes samples in both C# and VisualBasic. You can disable one or both languages from
							being displayed by checking the following options:</p>
						
						<div id="code-control">
							Sorry, this functionality is only available when both scripting and cookies are enabled.
						</div>
						
						<pre id="ex01-cs" class="prettyprint linenums"><code>public class HelloWorld {
   public static void Main() {
      System.Console.WriteLine("Hello, World!");
   }
}</code></pre>
						
						<pre id="ex01-vb" class="prettyprint linenums"><code class="lang-vb">Module HelloWorld
  Sub Main()
      MsgBox("Hello, World!")
  End Sub
End Module</code></pre>
					</div>
				</figure>
				
			</section>
			
			<section id="css015-reqs" class="reqs">
				<h3>Compliance References and Standards</h3>
				
				<ul>
					<li>WCAG 2.0 &#8212; <a href="http://www.w3.org/TR/WCAG20-TECHS/G14.html">G14: Ensuring that information conveyed by color differences is also available in text</a></li>
				</ul>
			</section>
			
			<section id="css015-faq" class="faq">
				<h3>Frequently Asked Questions</h3>
				
				<dl class="faq">
					<dt>How come the EPUB Navigation Document uses the <code>hidden</code> attribute to hide content?</dt>
					<dd><p>The EPUB Navigation Document is a special case. It is declarative markup intended for use by reading
							systems to create their own dynamic tables of contents, that happens to be written in XHTML. It is 
							not intended to be rendered as plain old XHTML, except when embedded in the content of a publication 
							(i.e., it  facilitates two uses, but is not meant to be rendered the same way in both).</p>
						<p>When rendered as XHTML, the <code>hidden</code> attribute will remove access to the hidden nodes 
							from assistive technologies.</p>
					</dd>
				</dl>
			</section>
			
			<section id="css015-rev" class="rev">
				<h3>Revision History</h3>
				<?php include_once('../../rev/history.php'); ?>
			</section>
		</section>
		
		<?php include_once('../../includes/footer.php'); ?>
	</body>
</html>