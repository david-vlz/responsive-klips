<?php

	class Course extends sessionData {
	
		var $connectsTo = Array("gebaeude" => "Location");
		
		var $titel;
		
		var $lehrperson;
		
		var $lvNummer;
		
		var $art;
		
		var $semesterstunden;
		
		var $teilnehmeranzahl;
		
		var $semester;
		
		var $mail;
		
		var $sprache;
		
		var $zeit;
		
		var $gebaeude;
		
		var $beschreibung;
		
		var $literatur;
		
		var $appointments; // Ein Array von Appointment Objekten
		
	}

?>
