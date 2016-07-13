<?php

	$revXML = '/var/www/vhosts/idpf.org/httpdocs/accessibility/guidelines/rev/history.xml';
	$revXSL = '/var/www/vhosts/idpf.org/httpdocs/accessibility/guidelines/rev/revToHTML.xsl';
	
	$xml = new DOMDocument;
	$xml->load($revXML);
	
	$xsl = new DOMDocument;
	$xsl->load($revXSL);
	
	$proc = new XSLTProcessor;
	$proc->importStyleSheet($xsl);
	$proc->setParameter('', 'id', $id);
	$proc->setParameter('', 'xmlPath',  '/var/www/vhosts/idpf.org/httpdocs/accessibility/guidelines/spine.xml');
	
	echo $proc->transformToXML($xml);

?>