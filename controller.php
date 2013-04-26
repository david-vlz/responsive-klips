<?php

	require_once('object_factory.php');
	require_once('views/template.php');

	class Controller {
		
		private $objectFactory;
	
		private $params;
	
		private $objects;

		private $VIEWS_DIR = './views/';

		private $currentUser;
		
		function __construct($getParameters, $postParameters, $userId) {
			$this->params = array_merge($getParameters, $postParameters);
			$this->objectFactory = new ObjectFactory;
			$this->objects = $this->objectFactory->loadAllFromFiles();
			$this->currentUser = $this->objectFactory->getObject("Student", $userId);
		}

		function initPageView() {
			$main; // Template für die Anzeige der gesamten Seite
			$content; // Template für die Anzeige der Inhaltselemente

			// Templates für die Hauptseitenelemente vorbereiten
			$header = new Template($this->VIEWS_DIR . 'header.php', null);
			$sidebar = new Template($this->VIEWS_DIR . 'sidebar.php', Array('user' => $this->currentUser));

			// Template für den Inhalt vorbereiten
			// abhängig von den Parametern in $this->params wird dafür ein
			// bestimmtes Template ausgewählt
			$params = $this->params;

			if (array_key_exists('controller', $params)) {
			
				if ($params['controller'] == 'student') {
					if ($params['action'] == 'index') {
						$content = new Template(
							$this->VIEWS_DIR . 'student_index_example.php', 
							Array('students' => $this->objects['student'])
						);
					}
				}

				else if ($params['controller'] == 'data') {
					if ($params['action'] == 'index') {
						$content = new Template(
							$this->VIEWS_DIR . 'course_index.php', 
							Array('courses' => $this->objects['course'])
						);
					}
				}

				// Controller für Vorlesungsverzeichnis ^eugenie
				else if ($params['controller'] == 'institute') {
					if ($params['action'] == 'index') {
						$content =new Template (
							$this->VIEWS_DIR . 'guide_index.php',
							Array('department' => $this->objects['department'])
						);
					}
					if ($params['action'] == 'show') {
						$object = $this->objectFactory->getObject("Guide", (int) $params['id']);
						$content = new Template ($this->VIEWS_DIR . 'guide_show.php', Array('institute' => $object, 'course' => $object, 'degree' => $object)
						);
					}
				}
				else if ($params['controller'] == 'search_major') {
					if ($params['action'] == 'index') {
						$content = new Template (
							$this->VIEWS_DIR . 'search_major.php',
							Array('major' => $this->objects['major'])
						);
					}
					if ($params['action'] == 'show') {
						$object = $this->objectFactory->getObject("Major", (int) $params['id']);
						$content = new Template ($this->VIEWS_DIR . 'search_major_show.php', Array('major' => $object, 'minor' => $object, 'course' => $object)
						);
					}
				}

				// Controller für Location ^mariantonietta
				else if ($params['controller'] == 'module') {

					if ($params['action'] == 'index') {
						$content = new Template(
							$this->VIEWS_DIR . 'module_index.php', 
							Array('module' => $this->objects['module'])
						);
					}

				}

				// Controller für Location ^stefan
				else if ($params['controller'] == 'location') {

					// Übersicht aller Gebäude
					if ($params['action'] == 'index') {
						$content = new Template(
							$this->VIEWS_DIR . 'location_index.php', 
							Array('location' => $this->objects['location'])
						);
					}

					// Einzelansicht für ein Gebäude
			        if ($params['action'] == 'show') {

			         $object = $this->objectFactory->getObject("Location", (int) $params['id']);
			         $content = new Template($this->VIEWS_DIR . 'location_show.php', Array("location" => $object) );
			        }
			    }

			    // Controller für Kurse ^david
			    else if ($params['controller'] == 'course') {

			    	// Kurs-Einzelansicht
			    	if ($params['action'] == 'show') {
			    		$content = new Template(
			    			$this->VIEWS_DIR . 'course_show.php',
			    			Array('course' => $this->objectFactory->getObject("Course", (int) $params['id']))
			    		);
			    	}

			    	// Kurse nach Benutzer auflisten
			    	if ($params['action'] == 'index') {
			    		$content = new Template(
			    			$this->VIEWS_DIR . 'course_index.php',
			    			Array(
			    				'courses' => $this->currentUser->courses,
			    				'includedInOtherTemplate' => false
			    			)
			    		);
			    	}

			    }

			    // Controller für Useransicht ^david
			    else if ($params['controller'] == 'user') {
			    	if ($params['action'] == 'show') {
			    		$coursesTemplate = new Template(
			    			$this->VIEWS_DIR . 'course_index.php',
			    			Array(
			    				'courses' => $this->currentUser->courses,
			    				'includedInOtherTemplate' => true
			    			)
			    		);
			    		$content = new Template(
			    			$this->VIEWS_DIR . 'user_show.php',
			    			Array(
			    				'user' => $this->currentUser, 
			    				'coursesTemplate' => $coursesTemplate
			    			)
			    		);
				    }
				}

				else {
					$content = new Template($this->VIEWS_DIR . 'home.php', null);
				}

			}

			// wenn kein Controller bekannt ist, wird der Inhalt der 
			// Homepage geladen
			else {
				$content = new Template($this->VIEWS_DIR . 'home.php', null);
			}

			// Template für die gesamte Seite vorbereiten
			$main = new Template($this->VIEWS_DIR . 'main.php',
				Array('header' => $header,
					  'sidebar' => $sidebar,
					  'content' => $content,
					  'user' => $this->currentUser
					  #'footer' => $footer
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
