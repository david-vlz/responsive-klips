<?php

	class Course extends sessionData {

		var $connectsTo = Array("appointments" => "Appointment");
		
		var $titel;
		
		var $lvNummer;
		
		var $art;
		
		var $semesterstunden;
		
		var $lehrperson;
		
		var $appointments; // Ein Array von Appointment Objekten
		
	}

?>
