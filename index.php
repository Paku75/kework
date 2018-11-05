<?php 
	include_once("controller/controller.php");
	
	$controller = new controller();
	
	if(empty($_REQUEST["page"]))
		$page = "index";
	else
		$page = $_REQUEST["page"];
	
	$controller->$page();
?>
