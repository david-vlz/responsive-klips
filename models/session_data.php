<?php
	
	abstract class SessionData {

		var $id;
		
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
