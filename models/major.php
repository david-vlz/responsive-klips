<?php

	class Major extends sessionData {
	
		var $connectsTo = Array("minor" => "minor");
		
		var $id;
		
		var $majorNr;
		
		var $name;
		
		var $courses;
		
	}

?>