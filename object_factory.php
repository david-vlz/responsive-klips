<?php
	
	class ObjectFactory {
		
		private $CLASS_NAMES = Array("Course", "Student", "Appointment");
		
		private $DATA_DIRECTORY = './data/';
		
		private $INDEX_FILENAME = 'index';
		
		private $INFORMATION_FILE = 'object_information.php';
		
		// Assoziatives Array zum Vorhalten aller erzeugten Objekte, 
		// keys entsprechen immer dem kleingeschriebenen Klassennamen
		// $objects["student"][1] = ein Student Objekt
		var $objects;
		
		function __construct() {
			$objects = Array();
			// Einbinden der nowendigen Model-Dateien
			require_once('models/session_data.php');
			foreach ($this->CLASS_NAMES as $name) {
				require_once('models/' . strtolower($name) . '.php');
			}
		}
		
		// Alle Klassen durchgehen und die Felder mit den Werten aus den 
		// hartgecodeten "InfoArrays" befüllen
		function loadFromObjectInformationHashes() {
			require_once($this->INFORMATION_FILE);
			// Alle Klassen durchlaufen, um Instanzen zu initialisieren
			foreach ($this->CLASS_NAMES as $className) {
				$objectsContainerName = strtolower($className) . "Objects";
				// Die einzelnen "...InfoArrays" durchgehen. Deren maximale 
				// Anzahl wird durch die ..._INFO_AMOUNT - Variablen angegeben.
				$infoArrayAmount = ${strtoupper($className) . "_INFO_AMOUNT"};
				for ($i = 0; $i < $infoArrayAmount; $i++) {
					// Den info Array referenzieren, der der Klasse entspricht.
					$infoArray = ${strtolower($className) . "Info" . ($i+1)};
					$obj = new $className;
					// Eigenschaften aus den info-Arrays in das neue Objekt 
					// übernehmen.
					foreach ($infoArray as $property => $value) {
						$obj->{$property} = $value;
					}
					${$objectsContainerName}[] = $obj;
				}
				$key = strtolower($className);
				$this->objects["$key"] = ${$objectsContainerName};
			}
		}

		// liest die die Indexdatei im Datenverezcihnis und lädt alle Objekte,
		// die dort genannt sind
		function loadAllFromFiles() {
			$lines = file($this->DATA_DIRECTORY . $this->INDEX_FILENAME);
			$objects = Array();
			foreach ($lines as $line) {
				$filename = rtrim($this->DATA_DIRECTORY . $line);
				$file = fopen($filename, 'r');
				$serialString = fread($file, filesize($filename));
				fclose($file);
				$object = unserialize($serialString);
				$className = strtolower(get_class($object));
				$objects["$className"][] = $object;
			}
			$this->objects = $objects;
			return $this->objects;
		}
		
		// serialisiert alle Objekte ins Dateverzeichnis und erstellt die
		// Indexdatei mit den Namen der Dateien
		function serializeAll() {
			foreach ($this->objects as $type => $objectsContainer) {
				foreach ($objectsContainer as $object) {
					$object->save($this->DATA_DIRECTORY);
				}
			}
			$this->updateIndex();
		}
		
		// Die gerade vorgehaltenen Objekte in die Indexdatei schreiben
		// Deren Einträge entsprechen den Dateinamen im "data drectory"
		// Alte Einträge werden überschrieben.
		private function updateIndex() {
			$filename = $this->DATA_DIRECTORY . $this->INDEX_FILENAME;
			$file = fopen($filename, 'w');
			foreach ($this->objects as $type => $objectsContainer) {
				foreach ($objectsContainer as $object) {
					fwrite($file, $object->getObjectId() . "\n");
				}
			}
			fclose($file);
		}
		
		function getClassNames() {
			return $this->CLASS_NAMES;
		}
	
	}
	

?>
