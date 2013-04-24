<?php 

	/**
	 * Feldinformationen für Objekten vom Typ Course
	 */
	$COURSE_INFO_AMOUNT = 12;
	
	$courseInfo1 = Array(
		"id" => 1,
		"titel" => "Anorganische Chemie", 
		"lehrperson" => "Piet Mayer",
		"lvNummer" => "00123456",
		"art" => "Übung",
		"semesterstunden" => 2,
		"teilnehmeranzahl" => 40,
		"semester" => "SS13",
		"mail" => "mayer.piet@uni-koeln.de",
		"sprache" => "DE",
		"zeit" => "Di, 12:00-13:30 Uhr",
		"modul"=> "BM 1",
		"gebaeude" => Array(1),
		"beschreibung" => "Sie lernen in diesem Kurs etwas über anorganische Chemie. Viel Erfolg dabei!",
		"literatur" => "Mustermann, Max: Einführung in die Anorganische Chemie. Frankfurt/M., 1999.", 
		"appointments" => Array(1)
	);
	
	$courseInfo2 = Array(
		"id" => 2,
		"titel" => "Database Systems Advanced", 
		"lehrperson" => "Lucia Bauer",
		"lvNummer" => "01523",
		"art" => "Übung",
		"semesterstunden" => 2,
		"teilnehmeranzahl" => 40,
		"semester" => "SS13",
		"mail" => "bauer.lucia@uni-koeln.de",
		"sprache" => "EN",
		"zeit" => "Fr, 14:00-15:30 Uhr",
		"modul"=> "AM 1",
		"gebaeude" => Array(4),
		"beschreibung" => "This course is about database systems. Since it is a course for an advanced auditory the accomplishment of the first 
					       module is obligatory.",
		"literatur" =>"Ullman, Jeffrey: First course in database systems. Prentice-Hall, 1997.",
		"appointments" => Array(2)
	);
	
	$courseInfo3 = Array(
		"id" => 3,
		"titel" => "Ästhetik der Schrift", 
		"lehrperson" => "Dr. Jochen Blumenfeld",
		"lvNummer" => "40527",
		"art" => "Hauptseminar",
		"semesterstunden" => 2,
		"teilnehmeranzahl" => 40,
		"semester" => "SoSe2013",
		"mail" => "blumenfeld.jochen@uni-heidelberg.de",
		"sprache" => "DE",
		"zeit" => "Mo, 16:00-17:30 Uhr",
		"modul"=> "BM 2",
		"gebaeude" => Array(7),
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
		"lehrperson" => "Dr. Ferrero Giotto",
		"lvNummer" => "40467",
		"art" => "Proseminar",
		"semesterstunden" => 2,
		"teilnehmeranzahl" => 50,
		"semester" => "WiSe2012/13",
		"mail" => "giotto.f@uni-koeln.de",
		"sprache" => "DE",
		"zeit" => "Fr, 10:00-11:30 Uhr",
		"modul"=> "BM 3",
		"gebaeude" => Array(7),
		"beschreibung" => "Wir werden folgenden Fragen nachgehen: Wie und warum entsteht syntaktischer Wandel? Wie entfaltet sich syntaktischer Wandel? 
		Kann man sprachübergreifende Gesetzmä&#946;igkeiten in der Entwicklung von grammatischen Prozessen bestimmen?",
		"literatur" => "Salmons, J.: A History of German. Oxford: Oxford University Press, 2012", 
		//"appointments" => Array(1, 2)	
	);
	
	$courseInfo5 = Array(
		"id" => 5,
		"titel" =>"Bruno Latour und Medien", 
		"lehrperson" => "Elisa Wolferts",
		"lvNummer" => "43502",
		"art" => "Lektürekurs",
		"semesterstunden" => 2,
		"teilnehmeranzahl" => 80,
		"semester" => "WiSe2012/13",
		"mail" => "elisa-wolferts@uni-koeln.de",
		"sprache" => "DE",
		"zeit" => "Mo, 10:00-11:30 Uhr",
		"modul"=> "BM 4",
		"gebaeude" => Array(7),
		"beschreibung" => "Die Forschungen des französischen Philosophen und Soziologen Bruno Latour zeichnen sich durch Interdisziplinarität und Lebensnähe aus. 
		Er gibt uns Gelegenheit, angespornt durch unsere Lektüre, die wissenschaftliche Praxis und folglich unser Fach Medienkulturwissenschaft zu reflektieren.",
		"literatur" => "Latour, Bruno: Der Berliner Schlüssel. Erkundungen eines Liebhabers der Wissenschaften [La clef de Berlin 1993]. Berlin 1996.", 
		//"appointments" => Array(1, 2)	
	);
	
	$courseInfo6 = Array(
		"id" => 6,
		"titel" => "Szenisches Arbeiten", 
		"lehrperson" => "Dr. Doktor Bühnenbildner",
		"lvNummer" => "43540",
		"art" => "Seminar",
		"semesterstunden" => 4,
		"teilnehmeranzahl" => 37,
		"semester" => "WiSe2012/13",
		"mail" => "bühnenbilder.d@uni-koeln.de",
		"sprache" => "DE",
		"zeit" => "Mi, 14:00-15:30 Uhr",
		"modul"=> "AM 3",
		"gebaeude" => Array(6),
		"beschreibung" => "Wir bauen in diesem Kurs eine szenische Landschaft entweder zu Hamlet oder der Erwartung.",
		"literatur" => "Dünne, Jörg / Günzel, Stephan (Hg.): Raumtheorie. Grundlagentexte aus Philosophie und Kulturwissenschaften. Frankfurt/M., 2006", 
		//"appointments" => Array(1, 2)	
	);
	
	$courseInfo7 = Array(
		"id" => 7,
		"titel" => "Populäre Musik in China, Japan und Südkorea", 
		"lehrperson" => "Prof. Dr. Herbert Schreiber",
		"lvNummer" => "43423",
		"art" => "Seminar",
		"semesterstunden" => 2,
		"teilnehmeranzahl" => 80,
		"semester" => "SoSe2013",
		"mail" => "schreiber-herbert@uni-koeln.de",
		"sprache" => "DE",
		"zeit" => "Di, 12:00-13:30 Uhr",
		"modul"=> "AM 1",
		"gebaeude" => Array(5),
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
		"lehrperson" => "Prof. Dr. Youssef Driouch",
		"lvNummer" => "42103a",
		"art" => "Kurs",
		"semesterstunden" => 4,
		"teilnehmeranzahl" => 20,
		"semester" => "SoSe2013",
		"mail" => "driouch@uni-koeln.de",
		"sprache" => "Arab.",
		"zeit" => "Di, 8:00-9:30, 
				   Do, 8:00-9:30",
		"modul"=> "BM 2",
		"gebaeude" => Array(6),
		"beschreibung" => "Der zweite Grundkurs in Arabisch baut auf dem Kurs im WiSe2012/13 auf. Ein Bestehen des Vorgängerkurses ist daher verpflichtend.",
		"literatur" => " Eckehard Schulz, Modernes Hocharabisch. Lehrbuch &amp; e-Edition. Mit einer Einführung in Hauptdialekte. 
		1. Aufl., Leipzig: Edition Hamouda 2011, ISBN 978-3-940075-53-6", 
		//"appointments" => Array(1, 2)	
	);
	
	$courseInfo9 = Array(
		"id" => 9,
		"titel" => "Lineare Algebra II", 
		"lehrperson" => "Dr. Alexander Littemann",
		"lvNummer" =>"52003" ,
		"art" => "Vorlesung",
		"semesterstunden" => 4,
		"teilnehmeranzahl" => 80,
		"semester" => "SoSe2013",
		"mail" => "littemann.a@uni-koeln.de",
		"sprache" => "DE",
		"zeit" => "Di, 8:00-9:30 Uhr, 
				   Fr, 8:00-9:30 Uhr",
		"modul"=> "BM 3",
		"gebaeude" => Array(4),
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
		"lehrperson" => "Andreas Humboldt",
		"lvNummer" => "52507",
		"art" => "Vorlesung",
		"semesterstunden" => 4,
		"teilnehmeranzahl" => 80,
		"semester" => "SoSe2013",
		"mail" => "humboldt-a@uni-koeln.de",
		"sprache" => "DE",
		"zeit" => "Mo, 12:00-13:30 Uhr, 
				   Mi, 12:00-13:30 Uhr",
		"modul"=> "AM 2",
		"gebaeude" => Array(3),
		"beschreibung" => "Im Kurs wird eine kleine Einführung in die theorethische Informatik gegeben." ,
		"literatur" => "Schöning, Uwe: Theoretische Informatik kurz gefasst, 5. Aufl., Spektrum 2008", 
		//"appointments" => Array(1, 2)	
	);
	
	
	$courseInfo11 = Array(
		"id" => 11,
		"titel" => "Programmierpraktikum", 
		"lehrperson" => "Lucia Bauer",
		"lvNummer" => "01524",
		"art" => "Übung",
		"semesterstunden" => 2,
		"teilnehmeranzahl" => 40,
		"semester" => "SS13",
		"mail" => "bauer.lucia@uni-koeln.de",
		"sprache" => "EN",
		"zeit" => "Fr, 16:00-17:30 Uhr",
		"modul"=> "AM 1",
		"gebaeude" => Array(4),
		"beschreibung" => "This course is the complementery training for 'Database Systems Advanced'.",
		"literatur" =>"Ullman, Jeffrey: First course in database systems. Prentice-Hall, 1997.",
		"appointments" => Array(2)
	);
	
	$courseInfo12 = Array(
		"id" => 12,
		"titel" =>"User Interfaces und ihre Evaluierung", 
		"lehrperson" => "Prof. Dr. Manfred Thaller", 
		"lvNummer" =>"42729",
		"art" => "Hauptseminar", 
		"semesterstunden" => 2,
		"teilnehmeranzahl" =>40,
		"semester" => "SS13",
		"mail" => "", 
		"sprache" => "DE", 
		"zeit" => "Do, 16:00-17:30 Uhr", 
		"modul" => "AM 1", 
		"gebaeude" => Array(4),
		"beschreibung" => "Ziel dieses Kurses ist es gegen Ende des Semesters ein User Interface für ein KLIPS - System zu entwerfen, welches 
						   zu einem späteren Zeitpunkt vorgestellt werden soll.", 
		"literatur" => "Wird im Kurs bekannt gegeben",
		"appointments" => Array()
	);
	
	
	$GUIDE_INFO_AMOUNT = 46;
	
	$guideInfo1 = Array(
		"id" =>1,
		"name" =>"Archäologisches Institut",
		"courses" => Array(),
		"degrees" => Array()
	);
	$guideInfo2 = Array(
		"id" =>2,
		"name" =>"Englisches Seminar I",
		"courses" => Array(),
		"degrees" => Array()
	);
	$guideInfo3 = Array(
		"id" =>3,
		"name" =>"Englisches Seminar II",
		"courses" => Array(),
		"degrees" => Array()
	);
	$guideInfo4 = Array(
		"id" =>4,
		"name" =>"Historisches Institut",
		"courses" => Array(),
		"degrees" => Array()
    );		
	$guideInfo5 = Array(
		"id" =>5,
		"name" =>"Institut für Afrikanistik",
		"courses" => Array(),
		"degrees" => Array()
	);
	$guideInfo6 = Array(
		"id" =>6,
		"name" =>"Institut für Altertumskunde",
		"courses" => Array(),
		"degrees" => Array()
	);
	$guideInfo7 = Array(
		"id" =>7,
		"name" =>"Institut für deutsche Sprache und Literatur I",
		"courses" => Array(),
		"degrees" => Array(3)
	);
	$guideInfo8 = Array(
		"id" =>8,
		"name" =>"Institut für deutsche Sprache und Literatur II",
		"courses" => Array(),
		"degrees" => Array(3)
	);
	$guideInfo9 = Array(
		"id" =>9,
		"name" =>"Institut für Ethnologie",
		"courses" => Array(7),
		"degrees" => Array()
	);
	$guideInfo10 = Array(
		"id" =>10,
		"name" =>"Institut für Evangelische Theologie",
		"courses" => Array(),
		"degrees" => Array()
	);
	$guideInfo11 = Array(
		"id" =>11,
		"name" =>"Institut für Indologie und Tamilistik",
		"courses" => Array(),
		"degrees" => Array()
	);
	$guideInfo12 = Array(
		"id" =>12,
		"name" =>"Institut für Katholische Theologie",
		"courses" => Array(),
		"degrees" => Array()
	);
	$guideInfo13 = Array(
		"id" =>13,
		"name" =>"Institut für Linguistik",
		"courses" => Array(),
		"degrees" => Array()
	);
	$guideInfo14 = Array(
		"id" =>14,
		"name" =>"Institut für Niederlandistik",
		"courses" => Array(),
		"degrees" => Array()
	);
	$guideInfo15 = Array(
		"id" =>15,
		"name" =>"Institut für Skandivanistik/Fennistik",
		"courses" => Array(),
		"degrees" => Array()
	);
	$guideInfo16 = Array(
		"id" =>16,
		"name" =>"Institut für Medienkultur- und Theater",
		"courses" => Array(5,6),
		"degrees" => Array(5)
	);
	$guideInfo17 = Array(
		"id" =>17,
		"name" =>"Institut für Ur- und Frühgeschichte",
		"courses" => Array(),
		"degrees" => Array()
	);
	$guideInfo18 = Array(
		"id" =>18,
		"name" =>"Kunsthistorisches Institut",
		"courses" => Array(),
		"degrees" => Array()
	);
	$guideInfo19 = Array(
		"id" =>19,
		"name" =>"Martin-Buber-Institut für Judaistik",
		"courses" => Array(),
		"degrees" => Array()
	);
	$guideInfo20 = Array(
		"id" =>20,
		"name" =>"Musikwissenschaftliches Institut",
		"courses" => Array(7),
		"degrees" => Array()
	);
	$guideInfo21 = Array(
		"id" =>21,
		"name" =>"Orientalisches Seminar",
		"courses" => Array(8),
		"degrees" => Array(6)
	);
	$guideInfo22 = Array(
		"id" =>22,
		"name" =>"Ostasiatisches Seminar",
		"courses" => Array(),
		"degrees" => Array()
	);
	$guideInfo23 = Array(
		"id" =>23,
		"name" =>"Philosophisches Seminar",
		"courses" => Array(),
		"degrees" => Array()
	);
	$guideInfo24 = Array(
		"id" =>24,
		"name" =>"Romanisches Seminar",
		"courses" => Array(),
		"degrees" => Array()
	);
	$guideInfo25 = Array(
		"id" =>25,
		"name" =>"Seminar für Ägyptologie",
		"courses" => Array(),
		"degrees" => Array()
	);
	$guideInfo26 = Array(
		"id" =>26,
		"name" =>"Slavisches Institut",
		"courses" => Array(),
		"degrees" => Array()
	);
	$guideInfo27 = Array(
		"id" =>27,
		"name" =>"Studium Integrale",
		"courses" => Array(1),
		"degrees" => Array()
	);
	$guideInfo28 = Array(
		"id" =>28,
		"name" =>"Verbundstudiengänge",
		"courses" => Array(),
		"degrees" => Array()
	);
	$guideInfo29 = Array(
		"id" =>29, 
		"name" =>"Mathematik/Informatik",
		"courses" => Array(2,9,10),
		"degrees" => Array(1,2)
	);
	$guideInfo30 = Array(
		"id" =>30, 
		"name" =>"Physik",
		"courses" => Array(),
		"degrees" => Array()
	);
	$guideInfo31 = Array(
		"id" =>31, 
		"name" =>"Didaktik der Mathematik und der Naturwissenschaften",
		"courses" => Array(),
		"degrees" => Array()
	);
	$guideInfo32 = Array(
		"id" =>32, 
		"name" =>"Chemie",
		"courses" => Array(),
		"degrees" => Array(4)
	);
	$guideInfo33 = Array(
		"id" =>33, 
		"name" =>"Geowissenschaften",
		"courses" => Array(),
		"degrees" => Array()
	);
	$guideInfo34 = Array(
		"id" =>34, 
		"name" =>"Biologie",
		"courses" => Array(),
		"degrees" => Array()
	);
	$guideInfo35 = Array(
		"id" =>35, 
		"name" =>"Informationsveranstaltungen",
		"courses" => Array(),
		"degrees" => Array()
	);
	$guideInfo36 = Array(
		"id" =>36, 
		"name" =>"Betriebswirtschaftslehre",
		"courses" => Array(),
		"degrees" => Array()
	);
	$guideInfo37 = Array(
		"id" =>37, 
		"name" =>"Volkswirtschaftslehre",
		"courses" => Array(),
		"degrees" => Array()
	);
	$guideInfo38 = Array(
		"id" =>38, 
		"name" =>"Sozialwissenschaften",
		"courses" => Array(),
		"degrees" => Array()
	);
	$guideInfo39 = Array(
		"id" =>39, 
		"name" =>"Zentrale Einrichtungen der Fakultät",
		"courses" => Array(),
		"degrees" => Array()
	);
	$guideInfo40 = Array(
		"id" =>40, 
		"name" =>"CEMS MIM",
		"courses" => Array(),
		"degrees" => Array()
	);
	$guideInfo41 = Array(
		"id" =>41, 
		"name" =>"Courses taught through English",
		"courses" => Array(),
		"degrees" => Array()
	);
	$guideInfo42 = Array(
		"id" =>42, 
		"name" =>"Doktorandenkurs",
		"courses" => Array(),
		"degrees" => Array()
	);
	$guideInfo43 = Array(
		"id" =>43, 
		"name" =>"Veranstaltungen anderer Fakultäten",
		"courses" => Array(),
		"degrees" => Array()
	);
	$guideInfo44 = Array(
		"id" =>44, 
		"name" =>"Sonstige Veranstaltungen",
		"courses" => Array(),
		"degrees" => Array()
	);
	$guideInfo45 = Array(
		"id" =>45, 
		"name" =>"Tutorien",
		"courses" => Array(),
		"degrees" => Array()
	);
	$guideInfo46 = Array(
		"id" =>46, 
		"name" =>"CISU (Cologne International Summer University)",
		"courses" => Array(),
		"degrees" => Array()
	);
	
	$DEGREE_INFO_AMOUNT = 6;
	
	$degreeInfo1 = Array(
	"id" => 1,
	"name" => "Bachelor",
	"courses" => Array(2,9,11)
	);
	
	$degreeInfo2 = Array(
	"id" => 2,
	"name" => "Master",
	"courses" => Array(10)
	);
	
	$degreeInfo3 = Array(
	"id" => 3,
	"name" => "Magister",
	"courses" => Array(3,4)
	);
	
	$degreeInfo4 = Array(
	"id" => 4, 
	"name" => "Lehramt Chemie", 
	"courses" => Array(1)
	);
	
	$degreeInfo5 = Array (
	"id" => 5, 
	"name" => "Bachelor (1-Fach) - Medienwissenschaft",
	"courses" => Array (5,6)
	);
	
	$degreeInfo6 = Array (
	"id" => 6, 
	"name" => "Master (2-Fach)", 
	"courses" => Array (8)
	);

	/**
	 * Feldinformationen für Objekte vom Typ Major
	 */
	
	$MAJOR_INFO_AMOUNT = 1;
	
	$majorInfo1 = Array(
	"id" => 1, 
	"majorNr" => 705,
	"name" => "Medienwissenschaft (Medieninformatik)",
	"minor" => Array (1,2)
	);


	/**
	 * Feldinformationen für Objekte vom Typ Minor
	 */
	
	$MINOR_INFO_AMOUNT = 2; 
	
	$minorInfo1 = Array(
	"id" => 1, 
	"name" => "Medienwissenschaft",
	"courses" => Array(5,6)
	);
	
	$minorInfo2 = Array(
	"id" => 2, 
	"name" => "Medieninformatik", 
	"courses" => Array(12)
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
	 * Feldinfos für modul für Objekte vom Typ Modul für Medienkulturwissenschaften/Informationverarebitung
	 */
	
	$VERANSTALTUNG_INFO_AMOUNT = 26;
	
	$veranstaltungInfo1 = Array(
		"titel" => "Einführung in die Medienkulturwissenschaft",
		"id" => 1,
		"art" => "Ringvorlesung",
		"nam" => "Medienkulturwissenschaftliche Grundlagen",
		"cp" => "4",
		"mark" => 2.7
	);
	
	$veranstaltungInfo2 = Array(
		"titel" => "Einführung in die Medienkulturwissenschaft", 
		"id" => 2,
		"art" => "Lektürekurs",
		"nam" => "Klassiker der Medienkulturwissenschaft",
		"cp" => "3",
		"mark" => 1.7
	);
	
	$veranstaltungInfo3 = Array(
		"titel" => "Klassiker der Medienkulturwissenschaft",
		"id" => 3,
		"art" => "Übung",
		"nam" => "Einzelmedien und mediale Verbundsysteme",
		"cp" => "3",
		"mark" => 2.0
	);
	
	$veranstaltungInfo4 = Array(
		"titel" => "Einführung in die Medienkulturwissenschaft",
		"id" => 4,
		"art" => "Ringvorlesung:",
		"nam" => "Medienberufe",
		"cp" => "2",
		"mark" => " "
	);
	
	$veranstaltungInfo5 = Array(
		"titel" => "Medien- und Kulturtheorie",
		"id" => 5,
		"art" => "Vorlesung mit Tutorium",
		"nam" => "Genealogie und Pluralität der Medien- und Kulturtheorie",
		"cp" => "2",
		"mark" => 2.0
	);
	
	$veranstaltungInfo6 = Array(
		"titel" => "Medien- und Kulturtheorie",
		"id" => 6,
		"art" => "Lektürekurs",
		"nam" => "Klassiker der Medien- und Kulturtheorie",
		"cp" => "3",
		"mark" => 2.3
	);
	
	$veranstaltungInfo7 = Array(
		"titel" => "Medien- und Kulturtheorie",
		"id" => 7,
		"art" => "Seminar",
		"nam" => "Medien- und kulturtheoretische Analysen",
		"cp" => "4",
		"mark" => 2.0
	);
	
	$veranstaltungInfo8 = Array(
		"titel" => "Grundlagen zur Mediengeschichte",
		"id" => 8,
		"art" => "Vorlesung mit Tutorium",
		"nam" => "Historiographie der Medien",
		"cp" => "2",
		"mark" => " "
	);
	
	$veranstaltungInfo9 = Array(
		"titel" => "Grundlagen zur Mediengeschichte",
		"id" => 9,
		"art" => "Quellen aus der Mediengeschichte",
		"nam" => "Lektürekurs",
		"cp" => "3",
		"mark" => 2.2
	);
	
	$veranstaltungInfo10 = Array(
		"titel" => "Grundlagen zur Mediengeschichte",
		"id" => 10,
		"art" => "Historische Medienanalyse in synchroner und diachroner Perspektive",
		"nam" => "Übung",
		"cp" => "4",
		"mark" => 1.7
	);
	
	$veranstaltungInfo11 = Array(
		"titel" => "Formate, Genres, Gattungen",
		"id" => 11,
		"art" => "Mediale Kategoridierungssyteme",
		"nam" => "Vorlesung",
		"cp" => "2",
		"mark" => " "
	);
	
	$veranstaltungInfo12 = Array(
		"titel" => "Formate, Genres, Gattungen",
		"id" => 12,
		"art" => "Codes und Konventionen medialer Produktion",
		"nam" => "Lektürekurs",
		"cp" => "3",
		"mark" => 2.2
	);
	
	$veranstaltungInfo13 = Array(
		"titel" => "Formate, Genres, Gattungen",
		"id" => 13,
		"art" => "Etablierung und Verlauf: Hybridisierung und Antiessentialität",
		"nam" => "Übung",
		"cp" => "4",
		"mark" => 3.0
	);
	
	$veranstaltungInfo14 = Array(
		"titel" => "Medienästhetik",
		"id" => 14,
		"art" => "Vorlesung",
		"nam" => "Medienkunst und ihre Beshreibung",
		"cp" => "2",
		"mark" => " "
	);
	
	$veranstaltungInfo15 = Array(
		"titel" => "Medienästhetik",
		"id" => 15,
		"art" => "Übung",
		"nam" => "Mimesis und Aisthesis: Schlüsselbegriffe medialer Kunsttheorie",
		"cp" => "3",
		"mark" => " "
	);
	
	$veranstaltungInfo16 = Array(
		"titel" => "Medienästhetik",
		"id" => 16,
		"art" => "Seminar",
		"nam" => "Form und Stil in den Medien",
		"cp" => "5",
		"mark" => " "
	);
	
	$veranstaltungInfo17 = Array(
		"titel" => " Kulturelle Kommunikation und Repräsentation",
		"id" => 17,
		"art" => "Vorlesung",
		"nam" => "Theorien der Kommunikation und Repräsentation",
		"cp" => "2",
		"mark" => " "
	);
	
	$veranstaltungInfo18 = Array(
		"titel" => "Kulturelle Kommunikation und Repräsentation",
		"id" => 18,
		"art" => "Übung",
		"nam" => "Kultur, Kommunikation, Gesellschaft",
		"cp" => "3",
		"mark" => " "
	);
	
	$veranstaltungInfo19 = Array(
		"titel" => "Kulturelle Kommunikation und Repräsentation",
		"id" => 19,
		"art" => "Seminar",
		"nam" => "Diskurs und Repräsentation",
		"cp" => "5",
		"mark" => " "
	);

	$veranstaltungInfo20 = Array(
		"titel" => "Medienpraxis",
		"id" => 20,
		"art" => "Seminar",
		"nam" => "Praktisches Arbeiten mit Medien",
		"cp" => "3",
		"mark" => " "
	);
	
	$veranstaltungInfo21 = Array(
		"titel" => "Medienpraxis",
		"id" => 21,
		"art" => "Übung",
		"nam" => "Film-/ Videoproduktion",
		"cp" => "3",
		"mark" => " "
	);
	
	$veranstaltungInfo22 = Array(
		"titel" => "Medienpraxis",
		"id" => 22,
		"art" => "Übung",
		"nam" => "Szenisches Arbeiten",
		"cp" => "3",
		"mark" => " "
	);
		
	$veranstaltungInfo23 = Array(
		"titel" => "Medienpraxis",
		"id" => 23,
		"art" => "Eventmanagement",
		"nam" => "Übung",
		"cp" => "3",
		"mark" => " "
	);
	
	$veranstaltungInfo24 = Array(
		"titel" => "Medienpraxis",
		"id" => 24,
		"art" => "Übung",
		"nam" => "Austellungspraxis",
		"cp" => "3",
		"mark" => " "
	);
	
	$veranstaltungInfo25 = Array(
		"titel" => "",
		"id" => 25,
		"art" => "Mündliche BA-Prüfung",
		"nam" => "",
		"cp" => "6",
		"mark" => 1.3
	);
	
	$veranstaltungInfo26 = Array(
		"titel" => "",
		"id" => 26,
		"art" => "BA-Arbeit",
		"nam" => " ",
		"cp" => "6",
		"mark" => " "
	);
		
			

$MODULE_INFO_AMOUNT= 8;
	
	$moduleInfo1 = Array(
		"id" => 1,
		"titel" => "Basismodul 1",
		"module" => Array(1,2,3,4)
	);
	
	$moduleInfo2 = Array(
		"id" => 2,
		"titel" => "Basismodul 2",
		"module" => Array(5,6,7)
	);
	
	$moduleInfo3 = Array(
		"id" => 3,
		"titel" => "Basismodul 3",
		"module" => Array(8,9,10)
	);
	
	$moduleInfo4 = Array(
		"id" => 4,
		"titel" => "Basismodul 4",
		"module" => Array(11,12,13)
	);
	
	$moduleInfo5 = Array(
		"id" => 5 ,
		"titel" => "Aufbaumodul 1",
		"module" => Array(14,15,16)
	);
	
	$moduleInfo6 = Array(
		"id" => 6,
		"titel" => "Aufbaumodul 2",
		"module" => Array(17,18,19)
	);
	
	$moduleInfo7 = Array(
		"id" => 7,
		"titel" => "Aufbaumodul 3",
		"module" => Array(20,21,22,23,24)
	);
	
	$moduleInfo8 = Array(
		"id" => 8,
		"titel" => "BA-Prüfung",
		"module" => Array(25,26)
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


	/* Feldinformationen für Objekte vom Typ Department */

	$DEPARTMENT_INFO_AMOUNT = 3; 
	
	$departmentInfo1 = Array (
		"id" => 1, 
		"name" => "Mathematische Fakultät",
		"institutes" => Array (29,30,31,32,33,34,27)
	);
	
	$departmentInfo2 = Array (
		"id" => 2, 
		"name" => "Philosophische Fakultät",
		"institutes" => Array (1,2,3,4,5,6,7,8,9,10,11,12,16,21,27,28)
	);
	
	$departmentInfo3 = Array (
		"id" => 3, 
		"name" => "Wirtschafts-und Sozialwissenschaftliche Fakultät",
		"institutes" => Array (35,36,37,38,39,40,41,42,43,44,45,46,27)
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
