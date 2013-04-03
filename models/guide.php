<?php

	class Guide extends sessionData {
	
		var $connectsTo = Array("courses" => "Course");
		
		var $id;
		
		var $name;
		
		var $courses;
		
		var $appointments; // Ein Array von Appointment Objekten
		
	}

?>
