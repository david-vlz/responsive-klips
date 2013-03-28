<?php

	class Appointment extends SessionData {

		var $connectsTo = Array();
	
		var $title;
	
		var $date; // ein DateTime Objekt, das den Startzeitpunkt angibt
		
		var $duration;	// Dauer der Verabredung als DateInterval Objekt, z.B. 2 Stunden bei einem Seminar
		
		var $iteration; // Wiederholung als DateInterval Objekt, z.B. wöchentlich für ein Seminar
		
		var $semester;
	
	}

?>
