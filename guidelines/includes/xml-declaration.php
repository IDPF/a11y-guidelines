<?php
	$charset = "utf-8";
	$mime = "text/html";
	
	function fix_code($buffer) {
		return (preg_replace("!\s*/>!", ">", $buffer));
	}
	
	if(stristr($_SERVER["HTTP_ACCEPT"],"application/xhtml+xml")) {
		if(preg_match("/application\/xhtml\+xml;q=([01]|0\.\d{1,3}|1\.0)/i",$_SERVER["HTTP_ACCEPT"],$matches)) {
			$xhtml_q = $matches[1];
			if(preg_match("/text\/html;q=([01]|0\.\d{1,3}|1\.0)/i",$_SERVER["HTTP_ACCEPT"],$matches)) {
				$html_q = $matches[1];
				if((float)$xhtml_q >= (float)$html_q) {
					$mime = "application/xhtml+xml";
				}
			}
		} else {
			$mime = "application/xhtml+xml";
		}
	}
	
	header("Content-Type: $mime;charset=$charset");
	header("Vary: Accept");
	print('<?xml version="1.0" encoding="utf-8"?>' . "\n");
?>
