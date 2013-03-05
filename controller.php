<?php

	require_once('object_factory.php');
	require_once('views/template.php');

	class Controller {
		
		private $objectFactory;
	
		private $params;
	
		private $objects;

		private $VIEWS_DIR = './views/';

		private $currentUser; // ungenutzt
		
		function __construct($getParameters, $postParameters) {
			$this->params = array_merge($getParameters, $postParameters);
			$this->objectFactory = new ObjectFactory;
			$this->objects = $this->objectFactory->loadAllFromFiles();
		}

		function initPageView() {
			$main; // Template für die Anzeige der gesamten Seite
			$content; // Template für die Anzeige der Inhaltselemente

			// Templates für die Hauptseitenelemente vorbereiten
			$header = new Template($this->VIEWS_DIR . 'header.php', null);
			$sidebar = new Template($this->VIEWS_DIR . 'sidebar.php', null);

			// Template für den Inhalt vorbereiten
			// abhängig von den Parametern in $this->params wird dafür ein
			// bestimmtes Template ausgewählt
			$params = $this->params;
			if ($params['controller'] == 'student') {

				if ($params['action'] == 'index') {
					$content = new Template(
						$this->VIEWS_DIR . 'student_index_example.php', 
						Array('students' => $this->objects['student'])
					);
				}

			}
			// wenn kein bekannter Controller bekannt ist, wird der Inhalt der 
			// Homepage geladen
			else {
				$content = new Template($this->VIEWS_DIR . 'home.php', null);
			}

			// Template für die gesamte Seite vorbereiten
			$main = new Template($this->VIEWS_DIR . 'main.php',
				Array('header' => $header,
					  'sidebar' => $sidebar,
					  'content' => $content,
					  'footer' => $footer,
				)
			);
			// Template für die gesamte Seite anzeigen, dabei wird das
			// Template für den Inhalt mit ausgegeben
			$main->render();
		}

		function getObjects() {
			return $this->objects;
		}

		function getParams() {
			return $this->params;
		}
	
	}

?>
