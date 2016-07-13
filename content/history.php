<?php include_once('../includes/xml-declaration.php'); ?>
<?php $id='rev'; $nav=0; $nav_items=array( 'ex', ''); $category='content'; $page_name='Revision History'; ?>
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
		
		<section id="rev" class="section">
			<?php include_once('../includes/page-title.php'); ?>
			
			<section class="usage">
				<?php include_once('../rev/history.php'); ?>
			</section>
		</section>
		
		<?php include_once('../includes/footer.php'); ?>
	</body>
</html>