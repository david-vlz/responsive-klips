<?php
	
	abstract class SessionData {
		
		// Eine eindeutige id (eindeutig innerhalb der Menge aller Objekte der 
		// Klasse)
		var $id;
		
		//Enth�lt Abstrakte Informationen dar�ber, mit welchen Objekten, das 
		// Objekt verkn�pft ist. Als assoziatives Array der Form 
		// "Attributname" => "Klassenname der verkn�pften Objekte"
		var $connectsTo;
		
		// Eine eindeutige Bezeichnung des Objekts: Klassenname +id 
		// etwa: "course15"
		function getObjectId() {
			return strtolower(get_class($this)) . $this->id;
		}

		function save($directoryPath) {
			$serial = serialize($this);
			$filename = $directoryPath . $this->getObjectId();
			$file = fopen($filename, 'w');
			fwrite($file, $serial);
			fclose($file);
		}
	
	}

?>
