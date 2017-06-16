<?php 
	include_once("app/controller/Controller.php");

	$controller = new Controller();
	$controller->findRepo();
	$controller->invoke();
	
	

?>