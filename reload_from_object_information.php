<?php

	require_once('./object_factory.php');

	$objectFactory = new objectFactory;
	$objectFactory->loadFromObjectInformationHashes();
	$objectFactory->serializeAll();

?>