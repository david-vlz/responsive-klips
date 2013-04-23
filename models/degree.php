<?
class Degree extends sessionData {
	
		var $connectsTo = Array("courses" => "Course");
		
		var $id;
		
		var $name;
		
		var $courses;
}
?>