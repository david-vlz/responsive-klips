<!--Ziel: Information in den Select Feldern miteinander und mit dem Button verknüpfen-->

<!--Query zur Verknüpfung der beiden Select Felder und dem Button-->
<script type="text/javascript" charset="utf-8">
          $(function(){
		  /* Für die Select-Boxen */
              $("#selectMajor").chained("#selectDegree");
		  /* Für den Buttpn, nachdem man bereits ausgewählt hat */
			  $("#search").on("click", function(e) {
				e.preventDefault();
				window.open($("#selectMajor").val() );
				});
          });
</script>

<ul class="breadcrumb" id="bcrumb">
	<li><a href="#">Vorlesungsverzeichnis</a> <span class="divider">/</span></li>
	<li class="acitve">nach Studiengängen</li>
</ul>

<h2 id="headline">Vorlesungsverzeichnis Sommersemester 2013</h2>

<!--selectBox1: angestrebter Abschluss-->
<div id="selectBox1">
<form class="bs-docs-example" name="formname" method="post" action="">
<label id="Abschluss">Angestrebter Abschluss</label>

<select name ="selectDegree" id="selectDegree">
<option value="0" selected>  </option>
<option>02 Magister</option>
<option>06 Promotion</option>
<option>08 1. Staatsprüfung</option>
<option>11 Diplom</option>
<option>21 Lehramt Grundschule</option>
<option>24 LA Haupt- und Realschule</option>
<option>25 LA Gymnasien und Gesamtschulen</option>
<option>26 LA Sonderpädagogik/Sekundarstufe I</option>
<option>27 LA Berufskolleg</option>
<option>34 LA Sonderpädagogik</option>
<option>35 LA Sonderpädagogik/Primarstufe</option>
<option>42 LA Primarstufe</option>
<option>43 LA Mittelstufe/Sekunderstufe I</option>
<option>44 LA Sekundarstufe II/Allgemein</option>
<option>45 LA Sekundarstufe II/Beruflich</option>
<option>61 Bachelor an Universitäten (2-Fach)</option>
<option>62 Master an Universitäten (2-Fach)</option>
<option value="bachelor/1">82 Bachelor an Universitäten (1-Fach)</option>
<option>88 Master an Universitäten (1-Fach)</option>
<option>94 Zusatzqualifikation</option>
<option>96 Abschlussprüfung im Ausland</option>
<option>97 keine Abschlussprüfung angestrebt bzw. möglich</option>
<option>B1 Lehramt an Berufskollegs I - Bachelor of Arts</option>
<option>B2 Lehramt an Berufskollegs II - Bachelor of Arts</option>
<option>B5 Lehramt an Grundschulen - Bachelor of Arts</option>
<option>B6 Lehramt an Haupt-, Real- und Gesamtschulen - Bachelor of Arts</option>
<option>B7 Lehramt an Gymnasien und Gesamtschulen - Bachelor of Arts</option>
<option>B9 Lehramt für sonderpädagogische Förderung - Bachelor of Arts</option>
</select>
</div>

<!--SelectBox2--Studienfach-->
<div id="selectBox2" class="selectBox2">
<label id="Studiengang">Studiengang</label>

<? foreach($this->major as $major) { ?>
<select name="selectMajor" id="selectMajor"> 
<option value="0" selected>  </option>
<option value="0" class="bachelor/1">-Studiengang wählen-</option>
<option value="1" id="1" class="bachelor/1">012 Archäologie</option>
<option value="2" id="2" class="bachelor/1">021 Betriebswirtschaft</option>
<option value="3" id="3" class="bachelor/1">032 Chemie</option>
<option value="4" id="4" class="bachelor/1">049 Englisch</option>
<option value="5" id="5" class="bachelor/1">050 Geographie</option>
<option value="6" id="6" class="bachelor/1">105 Mathematik</option>
<option value="7" id="7" class="bachelor/1">128 Physik</option>
<option value="8" id="8" class="bachelor/1">132 Psychologie</option>
<option value="9" id="9" class="bachelor/1">148 Sozialwissenschaften</option>
<option value="10" id="10" class="bachelor/1">175 Volkswirtschaftslehre</option>
<option value="11" id="11" class="bachelor/1">204 Geowissenschaften</option>
<option value="12" id="12" class="bachelor/1">273 Erziehungswissenschaft</option>
<option value="13" id="13" class="bachelor/1">483 Gesundheitsökonomie</option>
<option value="14" id="14" class="bachelor/1">702 Rechtswissenschaften (deutsch/französisch)</option>
<option value="15" id="15" class="bachelor/1">703 Medienwissenschaft (Medienrecht)</option>
<option value="16" id="16" class="bachelor/1">704 Medienwissenschaft (Medienpsychologie)</option>
<option value="index.php?controller=search_major&action=show&id=<?= $major->id;?>" id="17" class="bachelor/1">705 Medienwissenschaft (Medieninformatik)</option>
<option value="18" id="18" class="bachelor/1">706 Medienwissenschaft (Medienmanagement)</option>
<option value="19" id="19" class="bachelor/1">707 Medienwissenschaft (Ökonomie und Soziologie der Medien)</option>
<option value="20" id="20" class="bachelor/1">721 Regionalstudien Lateinamerika (Volkswirtschaftslehre)</option>
<option value="21" id="21" class="bachelor/1">722 Regionalstudien Lateinamerika (Sozialwissenschaften)</option>
<option value="22" id="22" class="bachelor/1">724 Regionalstudien Ost- und Mitteleuropa (Rechtswissenschaft)</option>
<option value="23" id="23" class="bachelor/1">725 Regionalstudien Ost- und Mitteleuropa (Sozialwissenschaft)</option>
<option value="24" id="24" class="bachelor/1">726 Regionalstudien Ost- und Mitteleuropa (Volkswirtschaftslehre)</option>
<option value="25" id="25" class="bachelor/1">731 Regionalstudien China (Betriebswirtschaft)</option>
<option value="26" id="26" class="bachelor/1">732 Regionalstudien China (Rechtswissenschaft)</option>
<option value="27" id="27" class="bachelor/1">733 Regionalstudien China (Sozialwissenschaften)</option>
<option value="28" id="28" class="bachelor/1">734 Regionalstudien China (Volkswirtschaftslehre)</option>
<option value="29" id="29" class="bachelor/1">772 Wirtschaftsmathematik</option>
<option value="30" id="30" class="bachelor/1">846 Wirtschaftsinformatik</option>
<option value="31" id="31" class="bachelor/1">912 Romanistik-Französisch</option>
<option value="32" id="32" class="bachelor/1">B93 Neurowissenschaften</option>
<option value="33" id="33" class="bachelor/1">E13 Geophysik/Meteorologie</option>
<option value="34" id="34" class="bachelor/1">E40 Europäische Archäologie</option>
<option value="35" id="35" class="bachelor/1">E41 Europäische Rechtslinguistik</option>
<option value="36" id="36" class="bachelor/1">G12 Sprachtherapie</option>
</select>
<? } ?>
</div>
</form>

<!--Button zum Verlinken mit der Darstellungsseite search_major_show.php-->
<button class="btn" type="submit" name="search" id="search">Suche starten</button>




