Responsive KLIPS
================
*Seminararbeit für "User Interfaces und ihre Evaluierung" bei Prof. Dr. Thaller, Uni Köln, WS 2012/13*

Neues KLIPS-Design, dass für sämtliche Endgeräte (Desktop, Tablets, Mobile) geeignet ist. U.a. unter Verwendung des [Bootstrap](http://twitter.github.io/bootstrap/) Frontend-Frameworks. Im folgenden wird beschrieben, welche Aufgaben die einzelnen Teilnehmer übernommen haben und für welche Dateien sie maßgeblich verantwortlich waren.

## Aufgabenverteilung

### Mariantonietta Bellia

**Backend:** Anlegen der Objektdaten (Module, Veranstaltungen).

**Frontend:** Ansicht der Prüfungsleistungen, diese responsive gemacht.

**Dateien:** models/veranstaltung.php, models/module.php, views/module_index.php, object_information.php, controller.php, css/module.css


### Stefan Grund

**Backend:** Location-basierte Dienste unter Verwendung der Google Maps JavaScript API (Version 3), diverser jQuery-Einsatz, Verwendung der jQuery-Plugins [DataTables](http://datatables.net/) und [Natural Sort](https://code.google.com/p/js-naturalsort/), SCSS und CSS.

**Frontend:** Basis Responsive Design der Seite mit Media Queries, Übersicht und Einzelansicht der Gebäude, Responsive Navigation.

**Dateien:** models/location.php, img, views/location_index.php, views/location_show.php, views/header.php, views/sidebar.php, controller.php, object_information.php, css/custom.scss, css/custom.css, css/location.scss, css/location.css, css/stylesheet.css


### David Neugebauer

**Backend:** Bereitstellung eines Basis MVC-Frameworks ohne Datenbankanbindung für flexible Anpassung des Datenmodells.

**Frontend:** Kursanzeige, Nutzeranzeige, Übersicht über die belegten Kurse, Startseite, sprechende URLs.

**Dateien:** models/student.php, models/session_data.php, index.php, object_factory.php, views/main.php, views/home.php, views/template.php, views/course_index.php, views/user_show.php, views/course_show.php, controller.php, reload_from_object_information.php, css/user.css, css/news.css, .htaccess


### Eugenie Rerich

**Backend:** Anlegen der Objektdaten (Kursdaten, Fakultäten, Institute, Studiengänge).

**Frontend:** Vorlesungsverzeichnis nach Einrichtungen und Studiengängen, diese responsive gemacht.

**Dateien:** models/degree.php, models/guide.php, models/minor.php, models/department.phps, models/major.php, js/jquery.chained.js, views/guide_index.php, views/guide_show.php, views/search_major.php, views/search_major_show.php, controller.php, object_information.php, css/study_guide.css
