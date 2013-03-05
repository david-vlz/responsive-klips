<?php
	
	require_once('controller.php');

	$controller = new Controller($_GET, $_POST);

	$controller->initPageView();

?>