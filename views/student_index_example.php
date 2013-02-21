<? foreach($this->students as $student) { ?>
	<h3><?= $student->name ?></h2>
	<p>id: <?= $student->id  ?></p>
	<p>Studiengang: <?= $student->studiengang  ?></p>
	<p>Semester: <?= $student->semester  ?></p>
<? } ?>