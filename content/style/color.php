<?php include_once('../../includes/xml-declaration.php'); ?>
<?php $id='css005'; $nav=1; $nav_items=array('ex','reqs','res'); $category='style'; $page_name='Colors'; ?>
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
		
		<section id="css005" class="section">
			<?php include_once('../../includes/page-title.php'); ?> 
			
			<section id="css005-desc" class="usage">
				<p>Although the use of color is a common semantic method for conveying information to sighted readers, it
					should never be used as the sole means of imparting information. Semantic markup should always underlie 
					any use of border colors and shading so that the equal access is provided to readers using non-visual 
					playback methods.</p>
				
				<p>But color is problematic for more than just the problems that arise conveying semantic meaning. The 
					contrast between foregrounds and backgrounds can make reading difficult. Green text on red backgrounds
					(and vice-versa) can be unreadable for some people, and can generally cause what's known 
					as visual vibrations. Red and black can also be indistinguishable to many readers. Black text on 
					bright white backgrounds can lead to eye strain and headaches.</p>
				
				<p>Likewise, placing one shade of a color on another is also going to make reading difficult, as will placing two 
					light or dark colors on top of each other (luminosity). A reader may be able to fix some of these issues
					with a configurable reading system, but it is best to avoid them in the first place. Strictly adhering to
					the color guidelines outlined in WCAG 2.0 is the best first step.</p>
				
				<p>Also avoid placing text over noisy (multi-colored) backgrounds. The less uniform the background is the more
					difficult it can be for any reader to follow.</p>
				
				<p>More generally, though, be sure to always cleanly separate styles from content. Separation of styling ensures
					that readers can apply their own style sheets and/or use and built-in color, brightness and contrast controls
					in their reading system to tailor the display to their needs.</p>
			</section>
			
			<section id="css005-reqs" class="reqs">
				<h3>Compliance References and Standards</h3>
				
				<ul>
					<li>WCAG 2.0 &#8212; <a href="http://www.w3.org/TR/WCAG20-TECHS/G14.html">G14: Ensuring that information conveyed by color differences is also available in text</a></li>
					<li>WCAG 2.0 &#8212; <a href="http://www.w3.org/TR/WCAG20-TECHS/G17.html">G17: Ensuring that a contrast ratio of at least 7:1 exists between text (and images of text) and background behind the text</a></li>
					<li>WCAG 2.0 &#8212; <a href="http://www.w3.org/TR/WCAG20-TECHS/G18.html">G18: Ensuring that a contrast ratio of at least 4.5:1 exists between text (and images of text) and background behind the text</a></li>
					<li>WCAG 2.0 &#8212; <a href="http://www.w3.org/TR/WCAG20-TECHS/G145.html">G145: Ensuring that a contrast ratio of at least 3:1 exists between text (and images of text) and background behind the text</a></li>
					<li>WCAG 2.0 &#8212; <a href="http://www.w3.org/TR/WCAG20-TECHS/G111.html">G111: Using color and pattern</a></li>
					<li>WCAG 2.0 &#8212; <a href="http://www.w3.org/TR/WCAG20-TECHS/G138.html">G138: Using semantic markup whenever color cues are used</a></li>
					<li>WCAG 2.0 &#8212; <a href="http://www.w3.org/TR/WCAG20-TECHS/G174.html">G174: Providing a control with a sufficient contrast ratio that allows users to switch to a presentation that uses sufficient contrast</a></li>
					<li>WCAG 2.0 &#8212; <a href="http://www.w3.org/TR/WCAG20-TECHS/G182.html">G182: Ensuring that additional visual cues are available when text color differences are used to convey information</a></li>
					<li>WCAG 2.0 &#8212; <a href="http://www.w3.org/TR/WCAG20-TECHS/G183.html">G183: Using a contrast ratio of 3:1 with surrounding text and providing additional visual cues on focus for links or controls where color alone is used to identify them</a></li>
					<li>WCAG 2.0 &#8212; <a href="http://www.w3.org/TR/WCAG20-TECHS/H92.html">H92: Including a text cue for colored form control labels</a></li>
					<li>WCAG 2.0 &#8212; <a href="http://www.w3.org/TR/WCAG20-TECHS/C22.html">C22: Using CSS to control visual presentation of text</a></li>
					<li>WCAG 2.0 &#8212; <a href="http://www.w3.org/TR/WCAG20-TECHS/C23.html">C23: Specifying text and background colors of secondary content such as banners, features and navigation in CSS while not specifying text and background colors of the main content</a></li>
					<li>WCAG 2.0 &#8212; <a href="http://www.w3.org/TR/WCAG20-TECHS/C25.html">C25: Specifying borders and layout in CSS to delineate areas of a Web page while not specifying text and text-background colors</a></li>
					<li>WCAG 2.0 &#8212; <a href="http://www.w3.org/TR/WCAG20-TECHS/SCR31.html">SCR31: Using script to change the background color or border of the element with focus</a></li>
				</ul>
			</section>
			
			<section id="css005-res" class="res">
				<h3>Additional Resources</h3>
				<ul>
					<li><a href="http://www.456bereastreet.com/archive/200709/10_colour_contrast_checking_tools_to_improve_the_accessibility_of_your_design/">10 colour contrast checking tools to improve the accessibility of your design</a></li>
				</ul>
			</section>
		</section>
		
		<?php include_once('../../includes/footer.php'); ?>
	</body>
</html>