<? foreach($this->students as $student) { ?>
	<h3><?= $student->name ?></h2>
	<p>id: <?= $student->id  ?></p>
	<p>Studiengang: <?= $student->studiengang  ?></p>
	<p>Semester: <?= $student->semester  ?></p>
	<? foreach($student->courses as $course) {?>
			<p style="margin-left:15px"><?= $course->titel?></p>
			<?}?>
	<!--</? foreach ($student->institutes as $guide) {?>
			<p style="margin-left:40px"></?= $guide->name?></p>
			</?}?>
	</? foreach ($student->subjects as $department) {?>
			<p style="margin-left:40px"></?= $department->name?></p>
			</?}?>-->
			
<?}?>
