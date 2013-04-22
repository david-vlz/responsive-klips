<?php 

	/**
	 * Feldinformationen für Objekten vom Typ Course
	 */
	$COURSE_INFO_AMOUNT = 10;
	
	$courseInfo1 = Array(
		"id" => 1,
		"titel" => "Anorganische Chemie", 
		"lehrperson" => "Mayer, Piet",
		"lvNummer" => "00123456",
		"art" => "Übung",
		"semesterstunden" => 2,
		"teilnehmeranzahl" => 40,
		"semester" => "SS13",
		"mail" => "mayer.piet@uni-koeln.de",
		"sprache" => "DE",
		"zeit" => "Di, 12:00-13:30 Uhr",
		"gebaeude" => 1,
		"beschreibung" => "Sie lernen in diesem Kurs etwas über anorganische Chemie. Viel Erfolg dabei!",
		"literatur" => "Mustermann, Max: Einführung in die Anorganische Chemie. Frankfurt/M., 1999.", 
		"appointments" => Array(1)	// Hier kommen ids von Appointment Objekten rein, die werden später in diese Objekte übersetzt
	);
	
	$courseInfo2 = Array(
		"id" => 2,
		"titel" => "Database Systems Advanced", 
		"lehrperson" => "Bauer, Lucia",
		"lvNummer" => "00001523",
		"art" => "Übung",
		"semesterstunden" => 2,
		"teilnehmeranzahl" => 40,
		"semester" => "SS13",
		"mail" => "bauer.lucia@uni-koeln.de",
		"sprache" => "EN",
		"zeit" => "Fr, 14:00-15:30 Uhr",
		"gebaeude" => 4,
		"beschreibung" => "This course is about database systems. Since it is a course for an advanced auditory the accomplishment of the first 
					       module is obligatory.",
		"literatur" =>"Ullman, Jeffrey: First course in database systems. Prentice-Hall, 1997.",
		"appointments" => Array(2)
	);
	
	$courseInfo3 = Array(
		"id" => 3,
		"titel" => "Ästhetik der Schrift", 
		"lehrperson" => "Blumenfeld, Dr. Jochen",
		"lvNummer" => "40527",
		"art" => "Hauptseminar",
		"semesterstunden" => 2,
		"teilnehmeranzahl" => 40,
		"semester" => "SoSe2013",
		"mail" => "blumenfeld.jochen@uni-heidelberg.de",
		"sprache" => "DE",
		"zeit" => "Mo, 16:00-17:30 Uhr",
		"gebaeude" => 7,
		"beschreibung" => "Die Schriftlichkeit betont an Texten, wie sie geschrieben worden sind und damit wie Zeichen je situativ anders Schrift werden. 
		Während solche Fragen klassischerweise von der Editionsphilologie als Fragen der Textkonstitution behandelt worden sind, hat sich um Schriftkulturen
		in den letzten Jahrzehnten ein breites Spektrum kulturwissenschaftlicher Forschungen entwickelt.",
		"literatur" => "Campe, Rüdiger: Die Schreibszene. Schreiben. In: Paradoxien, Dissonanzen, Zusammenbrüche. Situationen offener Epistemologie. 
		Hrsg. von Hans Ulrich Gumbrecht und K. Ludwig Pfeiffer. Frankfurt/M., 1991.", 
		//"appointments" => Array(3)	
	);
	
	$courseInfo4 = Array(
		"id" => 4,
		"titel" => "Syntaktischer Wandel im Deutschen", 
		"lehrperson" => "Giotto, Dr. Ferrero",
		"lvNummer" => "40467",
		"art" => "Proseminar",
		"semesterstunden" => 2,
		"teilnehmeranzahl" => 50,
		"semester" => "WiSe2012/13",
		"mail" => "giotto.f@uni-koeln.de",
		"sprache" => "DE",
		"zeit" => "Fr, 10:00-11:30 Uhr",
		"gebaeude" => 7,
		"beschreibung" => "Wir werden folgenden Fragen nachgehen: Wie und warum entsteht syntaktischer Wandel? Wie entfaltet sich syntaktischer Wandel? 
		Kann man sprachübergreifende Gesetzmä&#946;igkeiten in der Entwicklung von grammatischen Prozessen bestimmen?",
		"literatur" => "Salmons, J.: A History of German. Oxford: Oxford University Press, 2012", 
		//"appointments" => Array(1, 2)	
	);
	
	$courseInfo5 = Array(
		"id" => 5,
		"titel" =>"Bruno Latour und Medien", 
		"lehrperson" => "Wolferts, Elisa",
		"lvNummer" => "43502",
		"art" => "Lektürekurs",
		"semesterstunden" => 2,
		"teilnehmeranzahl" => 80,
		"semester" => "WiSe2012/13",
		"mail" => "elisa-wolferts@uni-koeln.de",
		"sprache" => "DE",
		"zeit" => "Mo, 10:00-11:30 Uhr",
		"gebaeude" => 7,
		"beschreibung" => "Die Forschungen des französischen Philosophen und Soziologen Bruno Latour zeichnen sich durch Interdisziplinarität und Lebensnähe aus. 
		Er gibt uns Gelegenheit, angespornt durch unsere Lektüre, die wissenschaftliche Praxis und folglich unser Fach Medienkulturwissenschaft zu reflektieren.",
		"literatur" => "Latour, Bruno: Der Berliner Schlüssel. Erkundungen eines Liebhabers der Wissenschaften [La clef de Berlin 1993]. Berlin 1996.", 
		//"appointments" => Array(1, 2)	
	);
	
	$courseInfo6 = Array(
		"id" => 6,
		"titel" => "Szenisches Arbeiten", 
		"lehrperson" => "Bühnenbildner, Dr. Doktor",
		"lvNummer" => "43540",
		"art" => "Seminar",
		"semesterstunden" => 4,
		"teilnehmeranzahl" => 37,
		"semester" => "WiSe2012/13",
		"mail" => "bühnenbilder.d@uni-koeln.de",
		"sprache" => "DE",
		"zeit" => "Mi, 14:00-15:30 Uhr",
		"gebaeude" => 6,
		"beschreibung" => "Wir bauen in diesem Kurs eine szenische Landschaft entweder zu Hamlet oder der Erwartung.",
		"literatur" => "Dünne, Jörg / Günzel, Stephan (Hg.): Raumtheorie. Grundlagentexte aus Philosophie und Kulturwissenschaften. Frankfurt/M., 2006", 
		//"appointments" => Array(1, 2)	
	);
	
	$courseInfo7 = Array(
		"id" => 7,
		"titel" => "Populäre Musik in China, Japan und Südkorea", 
		"lehrperson" => "Schreiber, Prof. Dr. Herbert",
		"lvNummer" => "43423",
		"art" => "Seminar",
		"semesterstunden" => 2,
		"teilnehmeranzahl" => 80,
		"semester" => "SoSe2013",
		"mail" => "schreiber-herbert@uni-koeln.de",
		"sprache" => "DE",
		"zeit" => "Di, 12:00-13:30 Uhr",
		"gebaeude" => 5,
		"beschreibung" => "Lange Zeit galt populäre Musik aus Ostasien vielen als Inbegriff unkreativen Kopistentums. 
		Bis in die 1990er Jahre nahm man in anderen Teilen der Welt dementsprechend auch kaum Notiz von Interpreten aus China, 
		Japan oder Südkorea. Spätestens der weltweite Hype, der nicht zuletzt auch in den anglophonen Mutterländern der popular music, 
		den USA und Gro&#946;britannien, um den gangnam style des Südkoreaners Psy gemacht wurde, lässt aber deutlich werden, 
		dass sich die Flie&#946;richtung der weltumspannenden popular music flows grundlegend gewandelt hat.",
		"literatur" => "-", 
		//"appointments" => Array(1, 2)	
	);
	
	$courseInfo8 = Array(
		"id" => 8,
		"titel" => "Arabisch II", 
		"lehrperson" => "Driouch, Prof. Dr. Youssef",
		"lvNummer" => "42103a",
		"art" => "Kurs",
		"semesterstunden" => 4,
		"teilnehmeranzahl" => 20,
		"semester" => "SoSe2013",
		"mail" => "driouch@uni-koeln.de",
		"sprache" => "Arab.",
		"zeit" => "Di, 8:00-9:30, Do, 8:00-9:30",
		"gebaeude" => 6,
		"beschreibung" => "Der zweite Grundkurs in Arabisch baut auf dem Kurs im WiSe2012/13 auf. Ein Bestehen des Vorgängerkurses ist daher verpflichtend.",
		"literatur" => " Eckehard Schulz, Modernes Hocharabisch. Lehrbuch &amp; e-Edition. Mit einer Einführung in Hauptdialekte. 
		1. Aufl., Leipzig: Edition Hamouda 2011, ISBN 978-3-940075-53-6", 
		//"appointments" => Array(1, 2)	
	);
	
	$courseInfo9 = Array(
		"id" => 9,
		"titel" => "Lineare Algebra II", 
		"lehrperson" => "Littemann, Dr. Alexander",
		"lvNummer" =>"52003" ,
		"art" => "Vorlesung",
		"semesterstunden" => 4,
		"teilnehmeranzahl" => 80,
		"semester" => "SoSe2013",
		"mail" => "littemann.a@uni-koeln.de",
		"sprache" => "DE",
		"zeit" => "Di, 8:00-9:30 Uhr, Fr, 8:00-9:30 Uhr",
		"gebaeude" => 4,
		"beschreibung" => "Die  Vorlesung 'Lineare Algebra II' ist der zweite Teil einer zweisemestrigen Vorlesung, 
		die obligatorisch für alle Studienanfänger mit den Studienzielen Bachelor/Master in Mathematik und  Wirtschaftsmathematik ist. 
		Übungsscheine werden aufgrund erfolgreicher Mitarbeit in den Übungen und einer bestandenen Klausur vergeben. Grundzüge der Linearen Algebra: 
		Vektorräume, lineare Abbildungen, Skalarprodukte, elementare Eigenwerttheorie, Moduln und euklidische Ringe, multilineare Algebra.",
		"literatur" => "G. Fischer: Lineare Algebra.", 
		//"appointments" => Array(1, 2)	
	);
	
	$courseInfo10 = Array(
		"id" => 10,
		"titel" => "Einführung in die theorethische Informatik", 
		"lehrperson" => "Humboldt, Andreas",
		"lvNummer" => "52507",
		"art" => "Vorlesung",
		"semesterstunden" => 4,
		"teilnehmeranzahl" => 80,
		"semester" => "SoSe2013",
		"mail" => "humboldt-a@uni-koeln.de",
		"sprache" => "DE",
		"zeit" => "Mo, 12:00-13:30 Uhr, Mi, 12:00-13:30 Uhr",
		"gebaeude" => 3,
		"beschreibung" => "Im Kurs wird eine kleine Einführung in die theorethische Informatik gegeben." ,
		"literatur" => "Schöning, Uwe: Theoretische Informatik kurz gefasst, 5. Aufl., Spektrum 2008", 
		//"appointments" => Array(1, 2)	
	);
	
	
	$GUIDE_INFO_AMOUNT = 46;
	
	$guideInfo1 = Array(
		"id" =>1,
		"name" =>"Archäologisches Institut",
		"courses" => Array()
	);
	$guideInfo2 = Array(
		"id" =>2,
		"name" =>"Englisches Seminar I",
		"courses" => Array()
	);
	$guideInfo3 = Array(
		"id" =>3,
		"name" =>"Englisches Seminar II",
		"courses" => Array()
	);
	$guideInfo4 = Array(
		"id" =>4,
		"name" =>"Historisches Institut",
		"courses" => Array()
    );		
	$guideInfo5 = Array(
		"id" =>5,
		"name" =>"Institut für Afrikanistik",
		"courses" => Array()
	);
	$guideInfo6 = Array(
		"id" =>6,
		"name" =>"Institut für Altertumskunde",
		"courses" => Array()
	);
	$guideInfo7 = Array(
		"id" =>7,
		"name" =>"Institut für deutsche Sprache und Literatur I",
		"courses" => Array(3)
	);
	$guideInfo8 = Array(
		"id" =>8,
		"name" =>"Institut für deutsche Sprache und Literatur II",
		"courses" => Array(4)
	);
	$guideInfo9 = Array(
		"id" =>9,
		"name" =>"Institut für Ethnologie",
		"courses" => Array(7)
	);
	$guideInfo10 = Array(
		"id" =>10,
		"name" =>"Institut für Evangelische Theologie",
		"courses" => Array()
	);
	$guideInfo11 = Array(
		"id" =>11,
		"name" =>"Institut für Indologie und Tamilistik",
		"courses" => Array()
	);
	$guideInfo12 = Array(
		"id" =>12,
		"name" =>"Institut für Katholische Theologie",
		"courses" => Array()
	);
	$guideInfo13 = Array(
		"id" =>13,
		"name" =>"Institut für Linguistik",
		"courses" => Array()
	);
	$guideInfo14 = Array(
		"id" =>14,
		"name" =>"Institut für Niederlandistik",
		"courses" => Array()
	);
	$guideInfo15 = Array(
		"id" =>15,
		"name" =>"Institut für Skandivanistik/Fennistik",
		"courses" => Array()
	);
	$guideInfo16 = Array(
		"id" =>16,
		"name" =>"Institut für Medienkultur- und Theater",
		"courses" => Array(5,6)
	);
	$guideInfo17 = Array(
		"id" =>17,
		"name" =>"Institut für Ur- und Frühgeschichte",
		"courses" => Array()
	);
	$guideInfo18 = Array(
		"id" =>18,
		"name" =>"Kunsthistorisches Institut",
		"courses" => Array()
	);
	$guideInfo19 = Array(
		"id" =>19,
		"name" =>"Martin-Buber-Institut für Judaistik",
		"courses" => Array()
	);
	$guideInfo20 = Array(
		"id" =>20,
		"name" =>"Musikwissenschaftliches Institut",
		"courses" => Array(7)
	);
	$guideInfo21 = Array(
		"id" =>21,
		"name" =>"Orientalisches Seminar",
		"courses" => Array(8)
	);
	$guideInfo22 = Array(
		"id" =>22,
		"name" =>"Ostasiatisches Seminar",
		"courses" => Array()
	);
	$guideInfo23 = Array(
		"id" =>23,
		"name" =>"Philosophisches Seminar",
		"courses" => Array()
	);
	$guideInfo24 = Array(
		"id" =>24,
		"name" =>"Romanisches Seminar",
		"courses" => Array()
	);
	$guideInfo25 = Array(
		"id" =>25,
		"name" =>"Seminar für Ägyptologie",
		"courses" => Array()
	);
	$guideInfo26 = Array(
		"id" =>26,
		"name" =>"Slavisches Institut",
		"courses" => Array()
	);
	$guideInfo27 = Array(
		"id" =>27,
		"name" =>"Studiums Integrale",
		"courses" => Array(1)
	);
	$guideInfo28 = Array(
		"id" =>28,
		"name" =>"Verbundstudiengänge",
		"courses" => Array()
	);
	$guideInfo29 = Array(
		"id" =>29, 
		"name" =>"Mathematik/Informatik",
		"courses" => Array(2,9,10)
	);
	$guideInfo30 = Array(
		"id" =>30, 
		"name" =>"Physik",
		"courses" => Array()
	);
	$guideInfo31 = Array(
		"id" =>31, 
		"name" =>"Didaktik der Mathematik und der Naturwissenschaften",
		"courses" => Array()
	);
	$guideInfo32 = Array(
		"id" =>32, 
		"name" =>"Chemie",
		"courses" => Array(1)
	);
	$guideInfo33 = Array(
		"id" =>33, 
		"name" =>"Geowissenschaften",
		"courses" => Array()
	);
	$guideInfo34 = Array(
		"id" =>34, 
		"name" =>"Biologie",
		"courses" => Array()
	);
	$guideInfo35 = Array(
		"id" =>35, 
		"name" =>"Informationsveranstaltungen",
		"courses" => Array()
	);
	$guideInfo36 = Array(
		"id" =>36, 
		"name" =>"Betriebswirtschaftslehre",
		"courses" => Array()
	);
	$guideInfo37 = Array(
		"id" =>37, 
		"name" =>"Volkswirtschaftslehre",
		"courses" => Array()
	);
	$guideInfo38 = Array(
		"id" =>38, 
		"name" =>"Sozialwissenschaften",
		"courses" => Array()
	);
	$guideInfo39 = Array(
		"id" =>39, 
		"name" =>"Zentrale Einrichtungen der Fakultät",
		"courses" => Array()
	);
	$guideInfo40 = Array(
		"id" =>40, 
		"name" =>"CEMS MIM",
		"courses" => Array()
	);
	$guideInfo41 = Array(
		"id" =>41, 
		"name" =>"Courses taught through English",
		"courses" => Array()
	);
	$guideInfo42 = Array(
		"id" =>42, 
		"name" =>"Doktorandenkurs",
		"courses" => Array()
	);
	$guideInfo43 = Array(
		"id" =>43, 
		"name" =>"Veranstaltungen anderer Fakultäten",
		"courses" => Array()
	);
	$guideInfo44 = Array(
		"id" =>44, 
		"name" =>"Sonstige Veranstaltungen",
		"courses" => Array()
	);
	$guideInfo45 = Array(
		"id" =>45, 
		"name" =>"Tutorien",
		"courses" => Array()
	);
	$guideInfo46 = Array(
		"id" =>46, 
		"name" =>"CISU (Cologne International Summer University)",
		"courses" => Array()
	);
	/**
	 * Feldinformationen für Objekte vom Typ Student
	 */
	
	$STUDENT_INFO_AMOUNT = 3;
	
	$studentInfo1 = Array(
		"id" => 1,
		"name" => "Alex",
		"studiengang" => "Informationsverarbeitung",
		"semester" => 4,
		"courses" => Array(2, 10)
		/*"institutes" => Array(1),
		"subjects" => Array(1)*/
	);
	
	$studentInfo2 = Array(
		"id" => 2,
		"name" => "Bob",
		"studiengang" => "Physik",
		"semester" => 3, 
		"courses" => Array(1, 9)
		/*"institutes" => Array(2)*/
	);
	
	$studentInfo3 = Array(
		"id" => 3,
		"name" => "Clara",
		"studiengang" => "Musikwissenschaft",
		"semester" => 5, 
		"courses" => Array(3,7),
		/*"institutes" => Array(3),*/ 
	);
	
	
	
	
	/**
	 * Feldinformationen für Objekte vom Typ Appointment
	 */
	
	$APPOINTMENT_INFO_AMOUNT = 2;
	
	// Das Format für alle Datumsangaben, entspricht z.B.: '2009-11-23 14:15:00'
	$format = 'Y-m-d H:i:s';
	
	$appointmentInfo1 = Array(
		"id" => 1,
		"title" => "Anorganische Chemie",
		"date" => DateTime::createFromFormat($format, '2012-10-08 10:00:00'),
		"duration" => (new DateInterval('PT2H')),
		"iteration" => (new DateInterval('P2W')),
		"semester" => "SS13"
	);
	
	$appointmentInfo2 = Array(
		"id" => 2,
		"title" => "Database Systems Advanced",
		"date" => DateTime::createFromFormat($format, '2012-10-11 16:00:00'),
		"duration" => (new DateInterval('PT2H')),
		"iteration" => (new DateInterval('P1W')),
		"semester" => "SS13"
	);

	$DEPARTMENT_INFO_AMOUNT = 3; 
	
	$departmentInfo1 = Array (
		"id" => 1, 
		"name" => "Mathematische Fakultät",
		"institutes" => Array (29,30,31,32,33,34,27),
	);
	
	$departmentInfo2 = Array (
		"id" => 2, 
		"name" => "Philosophische Fakultät",
		"institutes" => Array (2,5,6),
	);
	
	$departmentInfo3 = Array (
		"id" => 3, 
		"name" => "Wirtschafts-und Sozialwissenschaftliche Fakultät",
		"institutes" => Array (35,36,37,38,39,40,41,42,43,44,45,46,27),
	);

	/**
	 * Feldinformationen für Objekte vom Typ Location
	 * zuordnung: 0=Klinikum, 1=Universität
	 */

	$LOCATION_INFO_AMOUNT = 25;

	// Beispieleinträge Klinikum

	$locationInfo1 = Array(
		"id" => 1,
		"gebnr" => "1",
		"zuordnung" => 0,
		"name" => "Klinik-Verwaltung",
		"strasse" => "Kerpener Str. 68"
	);

	$locationInfo2 = Array(
		"id" => 2,
		"gebnr" => "2",
		"zuordnung" => 0,
		"name" => "Wohnheim",
		"strasse" => "Gleueler Str. 88a"
	);

	$locationInfo3 = Array(
		"id" => 3,
		"gebnr" => "2a",
		"zuordnung" => 0,
		"name" => "Klinik-Verwaltung",
		"strasse" => "Gleueler Str. 88a"
	);

	$locationInfo4 = Array(
		"id" => 4,
		"gebnr" => "3",
		"zuordnung" => 0,
		"name" => "Strahlentherapie",
		"strasse" => "Kerpener Str. 62"
	);

	$locationInfo5 = Array(
		"id" => 5,
		"gebnr" => "3a",
		"zuordnung" => 0,
		"name" => "CyberKnife - Zentrum",
		"strasse" => "Kerpener Str. 62"
	);

	$locationInfo6 = Array(
		"id" => 6,
		"gebnr" => "4",
		"zuordnung" => 0,
		"name" => "Werkstatt",
		"strasse" => "Kerpener Str. 62"
	);

	$locationInfo7 = Array(
		"id" => 7,
		"gebnr" => "5",
		"zuordnung" => 0,
		"name" => "Fernheizwerk",
		"strasse" => "Gleueler Str. 80"
	);

	$locationInfo8 = Array(
		"id" => 8,
		"gebnr" => "6",
		"zuordnung" => 0,
		"name" => "Dr. Mildred Scheel Haus",
		"strasse" => "Kerpener Str. 62"
	);

	$locationInfo9 = Array(
		"id" => 9,
		"gebnr" => "7",
		"zuordnung" => 0,
		"name" => "Wirtschaftsgebäude",
		"strasse" => "Gleueler Str. 88"
	);

	$locationInfo10 = Array(
		"id" => 10,
		"gebnr" => "8",
		"zuordnung" => 0,
		"name" => "Klinikum Zentraler Komplex",
		"strasse" => "Kerpener Str. 62"
	);

	$locationInfo11 = Array(
		"id" => 11,
		"gebnr" => "9",
		"zuordnung" => 0,
		"name" => "Bettenhaus Klinische Abteilungen",
		"strasse" => "Kerpener Str. 62"
	);

	$locationInfo12 = Array(
		"id" => 12,
		"gebnr" => "10",
		"zuordnung" => 0,
		"name" => "Kinderklinik",
		"strasse" => "Kerpener Str. 62"
	);

	// Beispieleinträge Universität

	$locationInfo13 = Array(
		"id" => 13,
		"gebnr" => "100",
		"zuordnung" => 1,
		"name" => "Hauptgebäude",
		"strasse" => "Albertus-Magnus-Platz 1"
	);

	$locationInfo14 = Array(
		"id" => 14,
		"gebnr" => "101",
		"zuordnung" => 1,
		"name" => "WiSo-Gebäude",
		"strasse" => "Universitätsstraße 24"
	);

	$locationInfo15 = Array(
		"id" => 15,
		"gebnr" => "102",
		"zuordnung" => 1,
		"name" => "Studierenden Service Center (SSC)",
		"strasse" => "Universitätsstraße 22a"
	);

	$locationInfo16 = Array(
		"id" => 16,
		"gebnr" => "103",
		"zuordnung" => 1,
		"name" => "Philosophikum",
		"strasse" => "Universitätsstraße 41"
	);

	$locationInfo17 = Array(
		"id" => 17,
		"gebnr" => "105",
		"zuordnung" => 1,
		"name" => "Hörsaalgebäude",
		"strasse" => "Universitätsstraße 35"
	);

	$locationInfo18 = Array(
		"id" => 18,
		"gebnr" => "106",
		"zuordnung" => 1,
		"name" => "Seminargebäude",
		"strasse" => "Universitätsstraße 35"
	);

	$locationInfo19 = Array(
		"id" => 19,
		"gebnr" => "107",
		"zuordnung" => 1,
		"name" => "Universitäts- und Stadtbibliothek",
		"strasse" => "Universitätsstraße 33"
	);

	$locationInfo20 = Array(
		"id" => 20,
		"gebnr" => "107a",
		"zuordnung" => 1,
		"name" => "Universitäts- und Stadtbibliothek",
		"strasse" => "Universitätsstraße 33"
	);

	$locationInfo21 = Array(
		"id" => 21,
		"gebnr" => "107b",
		"zuordnung" => 1,
		"name" => "Universitäts- und Stadtbibliothek",
		"strasse" => "Kerpener Str. 20"
	);

	$locationInfo22 = Array(
		"id" => 22,
		"gebnr" => "110",
		"zuordnung" => 1,
		"name" => "WiSo-Modulbau",
		"strasse" => "Universitätsstr. 24"
	);

	$locationInfo23 = Array(
		"id" => 23,
		"gebnr" => "111",
		"zuordnung" => 1,
		"name" => "Diverse Einrichtungen",
		"strasse" => "Meister-Ekkehart-Straße 11"
	);

	$locationInfo24 = Array(
		"id" => 24,
		"gebnr" => "118",
		"zuordnung" => 1,
		"name" => "Zentralmensa",
		"strasse" => "Zülpicher Straße 70"
	);

	$locationInfo25 = Array(
		"id" => 25,
		"gebnr" => "125b",
		"zuordnung" => 1,
		"name" => "Küpperstift Eingang Weyertal",
		"strasse" => "Kerpener Str. 30"
	);

?>
