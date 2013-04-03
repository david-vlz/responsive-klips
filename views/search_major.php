<script type="text/javascript" charset="utf-8">
          $(function(){
              $("#selectMajor").chained("#selectDegree"); 
			  //$("#go").chained("#selectMajor);
          });
</script>

<h4>Vorlesungsverzeichnis Sommersemester 2013</h4>
<br/><br/><br/>
<form class="bs-docs-example" name="formname" method="post" action="">
<label>Angestrebter Anschluss</label>

<select name ="selectDegree" id="selectDegree" <!--onChange="redirect(this.options.selectedIndex)"-->>
<option value="0" selected>  </option>
<option value="magister">02 Magister</option>
<option value="promotion">06 Promotion</option>
<option value="staatspruefung">08 1. Staatsprüfung</option>
<option value="4">11 Diplom</option>
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

<!--<label>Studiengang</label>-->
<select name="selectMajor" id="selectMajor"> 
<option value="0" selected>  </option>
<option value="a" class="magister">a</option>
<option value="b" class="magister">b</option>

<option value="c" class="promotion">c</option>
<option value="d" class="promotion">d</option>

<option value="e" class="staatspruefung">ee</option>
<option value="f" class="staatspruefung">ff</option>

<option value="0" class="bachelor/1">-Studiengang wählen-</option>
<option value="http://localhost/GUI/index.php?controller=test&action=index" class="bachelor/1">012 Archäologie</option>
<option value="2" class="bachelor/1">021 Betriebswirtschaft</option>
<option value="3" class="bachelor/1">032 Chemie</option>
<option value="4" class="bachelor/1">049 Englisch</option>
<option value="5" class="bachelor/1">050 Geographie</option>
<option value="6" class="bachelor/1">105 Mathematik</option>
<option value="7" class="bachelor/1">128 Physik</option>
<option value="8" class="bachelor/1">132 Psychologie</option>
<option value="9" class="bachelor/1">148 Sozialwissenschaften</option>
<option value="10" class="bachelor/1">175 Volkswirtschaftslehre</option>
<option value="11" class="bachelor/1">204 Geowissenschaften</option>
<option value="12" class="bachelor/1">273 Erziehungswissenschaft</option>
<option value="13" class="bachelor/1">483 Gesundheitsökonomie</option>
<option value="14" class="bachelor/1">702 Rechtswissenschaften (deutsch/französisch)</option>
<option value="15" class="bachelor/1">703 Medienwissenschaft (Medienrecht)</option>
<option value="16" class="bachelor/1">704 Medienwissenschaft (Medienpsychologie)</option>
<option value="17" class="bachelor/1">705 Medienwissenschaft (Medieninformatik)</option>
<option value="18" class="bachelor/1">706 Medienwissenschaft (Medienmanagement)</option>
<option value="19" class="bachelor/1">707 Medienwissenschaft (Ökonomie und Soziologie der Medien)</option>
<option value="20" class="bachelor/1">721 Regionalstudien Lateinamerika (Volkswirtschaftslehre)</option>
<option value="21" class="bachelor/1">722 Regionalstudien Lateinamerika (Sozialwissenschaften)</option>
<option value="22" class="bachelor/1">724 Regionalstudien Ost- und Mitteleuropa (Rechtswissenschaft)</option>
<option value="23" class="bachelor/1">725 Regionalstudien Ost- und Mitteleuropa (Sozialwissenschaft)</option>
<option value="24" class="bachelor/1">726 Regionalstudien Ost- und Mitteleuropa (Volkswirtschaftslehre)</option>
<option value="25" class="bachelor/1">731 Regionalstudien China (Betriebswirtschaft)</option>
<option value="26" class="bachelor/1">732 Regionalstudien China (Rechtswissenschaft)</option>
<option value="27" class="bachelor/1">733 Regionalstudien China (Sozialwissenschaften)</option>
<option value="28" class="bachelor/1">734 Regionalstudien China (Volkswirtschaftslehre)</option>
<option value="29" class="bachelor/1">772 Wirtschaftsmathematik</option>
<option value="30" class="bachelor/1">846 Wirtschaftsinformatik</option>
<option value="31" class="bachelor/1">912 Romanistik-Französisch</option>
<option value="32" class="bachelor/1">B93 Neurowissenschaften</option>
<option value="33" class="bachelor/1">E13 Geophysik/Meteorologie</option>
<option value="34" class="bachelor/1">E40 Europäische Archäologie</option>
<option value="35" class="bachelor/1">E41 Europäische Rechtslinguistik</option>
<option value="36" class="bachelor/1">G12 Sprachtherapie</option>
</select>

<button class="btn" type="submit" style="margin-bottom:10px" name="go" id="go">Search</button>

</form>

