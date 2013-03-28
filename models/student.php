<?php 

	class Student extends SessionData {
		
		var $connectsTo = Array("courses" => "Course");

		var $name;
		
		var $studiengang;
		
		var $semester;

		var $courses;
	
	}

?>
