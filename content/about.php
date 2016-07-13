<?php include_once('../includes/xml-declaration.php'); ?>
<?php $id='about'; $nav=0; $nav_items=array( 'ex', ''); $category='content'; $page_name='About this Guide'; ?>
<!DOCTYPE html>
<html xml:lang="en" lang="en"
	xmlns="http://www.w3.org/1999/xhtml"
	xmlns:epub="http://www.idpf.org/2007/ops">
	
	<head>
		<?php include_once('../includes/title.php'); ?>
		<?php include_once('../includes/html5-shiv.php'); ?>
		<link type="text/css" rel="stylesheet" href="../css/epub3.css"/>
	</head>
	
	<body>
		<?php include_once('../includes/header.php'); ?>
		
		<section id="atg" class="section">
			<?php include_once('../includes/page-title.php'); ?>
			
			<section class="usage">
				<p>This guide has been designed to help guide you in the creation of accessible EPUB 3 content. 
					It includes a <a href="qa/qa-checklist.php">quality assurance checklist</a> together 
					with instruction on how to implement the requirements.</p>
				
				<p>If you are new to accessible publishing, the best place to start is with the free O'Reilly 
					book <a href="http://shop.oreilly.com/product/0636920025283.do">Accessible EPUB 3</a>, as it will walk
					you through the basic issues you need to understand in more detail &#8212; and with more of an
					instructional focus. The <a href="http://shop.oreilly.com/product/0636920024897.do">EPUB 3 Best Practices</a>
					book includes the information in Accessible EPUB 3 as a chapter, but has also been expanded to include
					additional information. If you're looking for a more general purpose guide to EPUB 3 production,
					that also covers accessibility, the Best Practices guide is recommended.</p>
				
				<p>For general how-to questions, please create a new topic in the 
					<a href="http://idpf.org/forums/epub-accessibility">IDPF accessibility discussion forum</a>.
					Someone will always try to respond!</p>
			</section>
		</section>
		
		<?php include_once('../includes/footer.php'); ?>
	</body>
</html>