<?php

	class Guide extends sessionData {
	
		var $connectsTo = Array("courses" => "Course",
								"degrees" => "Degree");
		
		var $id;
		
		var $name;
		
		var $courses;
		
		var $degrees;
		
		var $appointments; // Ein Array von Appointment Objekten
		
	}

?>