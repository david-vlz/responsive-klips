<? foreach($this->courses as $course) { ?>
	
	<h4><?= $course->titel ?></h4>
	<p>Dozent: <?= $course->lehrperson  ?></p>
	<p>Vorlesungsverzeichnisnummer: <?= $course->lvNummer  ?></p>
	<p>Veranstaltungsart: <?= $course->art  ?></p>
	<p>SWS: <?= $course->semesterstunden  ?></p>
	<p>Max. Teilnehmeranzahl: <?= $course->teilnehmeranzahl  ?></p>
	<p>Semester: <?= $course->semester  ?></p>
	<p>Mail: <a href="mailto:#"><?= $course->mail  ?></a></p>
	<p>Sprache: <?= $course->sprache  ?></p>
	<p>Zeit: <?= $course->zeit  ?></p>
	<p>Gebäude: <?= $course->gebaeude  ?></p>
	<p>Beschreibung: <?= $course->beschreibung  ?></p>
	<p>Literatur: <?= $course->literatur  ?></p>
	<br/> <br/>
<? } ?>