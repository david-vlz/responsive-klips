<?php

	class Department extends sessionData {
	
		var $connectsTo = Array("institutes" => "Guide");
		
		var $id;
		
		var $name;
		
		var $institutes;

	}

?>
