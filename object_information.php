<?php 

	/**
	 * Feldinformationen für Objekten vom Typ Course
	 */
	
	$COURSE_INFO_AMOUNT = 2;
	
	$courseInfo1 = Array(
		"id" => 1,
		"titel" => "Anorganische Chemie", 
		"lvNummer" => "00123456",
		"art" => "Übung",
		"semesterstunden" => 2,
		"lehrperson" => "Mayer Piet",
		"appointments" => Array(1)	// Hier kommen ids von Appointment Objekten rein, die werden später in diese Objekte übersetzt
	);
	
	$courseInfo2 = Array(
		"id" => 2,
		"titel" => "Database Systems Advanced", 
		"lvNummer" => "00001523",
		"art" => "Übung",
		"semesterstunden" => 2,
		"lehrperson" => "Bauer Lucia",
		"appointments" => Array(2)
	);
	
	
	
	
	/**
	 * Feldinformationen für Objekte vom Typ Student
	 */
	
	$STUDENT_INFO_AMOUNT = 3;
	
	$studentInfo1 = Array(
		"id" => 1,
		"name" => "Alex",
		"studiengang" => "Informationsverarbeitung",
		"semester" => 4,
		"courses" => Array(1, 2)
	);
	
	$studentInfo2 = Array(
		"id" => 2,
		"name" => "Bob",
		"studiengang" => "Physik",
		"semester" => 3,
		"courses" => Array(1, 2)
	);
	
	$studentInfo3 = Array(
		"id" => 3,
		"name" => "Clara",
		"studiengang" => "Musikwissenschaft",
		"semester" => 5,
		"courses" => Array(2)
	);
	
	
	
	
	/**
	 * Feldinformationen für Objekte vom Typ Appointment
	 */
	
	$APPOINTMENT_INFO_AMOUNT = 2;
	
	// Das Format für alle Datumsangaben, entspricht z.B.: '2009-11-23 14:15:00'
	$format = 'Y-m-d H:i:s';
	
	$appointmentInfo1 = Array(
		"id" => 1,
		"title" => "Anorganische Chemie",
		"date" => DateTime::createFromFormat($format, '2012-10-08 10:00:00'),
		"duration" => (new DateInterval('PT2H')),
		"iteration" => (new DateInterval('P2W')),
		"semester" => "WS12/13"
	);

	$appointmentInfo2 = Array(
		"id" => 2,
		"title" => "Database Systems Advanced",
		"date" => DateTime::createFromFormat($format, '2012-10-11 16:00:00'),
		"duration" => (new DateInterval('PT2H')),
		"iteration" => (new DateInterval('P1W')),
		"semester" => "WS12/13"
	);




	/**
	 * Feldinformationen für Objekte vom Typ Location
	 */

	$LOCATION_INFO_AMOUNT = 5;

	$locationInfo1 = Array(
		"id" => 1,
		"gebnr" => "100",
		"name" => "Hauptgebäude",
		"adresse" => "Albertus-Magnus-Platz 1"
	);

	$locationInfo2 = Array(
		"id" => 2,
		"gebnr" => "101",
		"name" => "WiSo-Gebäude",
		"adresse" => "Universitätsstraße 24"
	);

	$locationInfo3 = Array(
		"id" => 3,
		"gebnr" => "102",
		"name" => "WiSo-Hochhaus",
		"adresse" => "Universitätsstraße 24"
	);

	$locationInfo4 = Array(
		"id" => 4,
		"gebnr" => "103",
		"name" => "Philosophikum",
		"adresse" => "Universitätsstraße 41"
	);

	$locationInfo5 = Array(
		"id" => 5,
		"gebnr" => "125b",
		"name" => "Küpperstift Eingang Weyertal",
		"adresse" => "Kerpener Str. 30"
	);

?>
