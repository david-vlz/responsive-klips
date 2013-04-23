<? 
	$course = $this->course;
	$gebaeude = $course->gebaeude[0];
?>

<h2><?= $course->titel ?></h2>

<span class="muted course short-info">
	<?= $course->art ?> /
	<?= $course->semester ?> /
	<a href="mailto:<?= $course->mail ?>"><?= $course->lehrperson ?></a>
</span>

<div class="course-info-field row-fluid">
	<div class="span2">
		<h3>Zeit &amp; Ort</h3>
	</div>
	<div class="course-info span7">
		<ul>
			<li><?= $course->zeit ?></li>
			<li><a href="index.php?controller=location&amp;action=show&amp;id=<?= $gebaeude->id ?>"><?= $gebaeude->name ?></a></li>
		</ul>
	</div>
</div>

<div class="course-info-field row-fluid">
	<div class="span2">
		<h3>Belegung</h3>
	</div>
	<div class="course-info span7">
		<ul>
			<li>Veranstaltung (<?= $course->art ?>) im Modul <?= $course->modul ?></li>
			<li>maximal <?= $course->teilnehmeranzahl ?> Teilnehmer</li>
			<li>LV-Nummer: <?= $course->lvNummer ?></li>
		<ul>
	</div>
</div>

<div class="course-info-field row-fluid">
	<div class="span2">
		<h3>Inhalt</h3>
	</div>
	<div class="course-info span7">
		<ul>
			<li><?= $course->beschreibung ?></li>
			<li><h4>Literatur</h4></li>
			<ul>
				<li><?= $course->literatur ?></li>
			</ul>
			
			
		<ul>
	</div>
</div>