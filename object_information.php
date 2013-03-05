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
		"appointments" => Array(1, 2)	// Hier kommen ids von Appointment Objekten rein, die werden später in diese Objekte übersetzt
	);
	
	$courseInfo2 = Array(
		"id" => 2,
		"titel" => "Database Systems Advanced", 
		"lvNummer" => "00001523",
		"art" => "Übung",
		"semesterstunden" => 2,
		"lehrperson" => "Bauer Lucia",
		"appointments" => Array(3)
	);
	
	
	
	
	/**
	 * Feldinformationen für Objekte vom Typ Student
	 */
	
	$STUDENT_INFO_AMOUNT = 3;
	
	$studentInfo1 = Array(
		"id" => 1,
		"name" => "Alex",
		"studiengang" => "Informationsverarbeitung",
		"semester" => 4
	);
	
	$studentInfo2 = Array(
		"id" => 2,
		"name" => "Bob",
		"studiengang" => "Physik",
		"semester" => 3
	);
	
	$studentInfo3 = Array(
		"id" => 3,
		"name" => "Clara",
		"studiengang" => "Musikwissenschaft",
		"semester" => 5
	);
	
	
	
	
	/**
	 * Feldinformationen für Objekte vom Typ Appointment
	 */
	
	$APPOINTMENT_INFO_AMOUNT = 1;
	
	// Das Format für alle Datumsangaben, entspricht z.B.: '2009-11-23 14:15:00'
	$format = 'Y-m-d H:i:s';
	
	$appointmentInfo1 = Array(
		"id" => 1,
		"title" => "Anorganische Chemie",
		"date" => DateTime::createFromFormat($format, '2012-10-08 11:00:00'),
		"duration" => (new DateInterval('PT2H')),
		"iteration" => (new DateInterval('P2W')),
		"semester" => "WS12/13"
	);


?>
