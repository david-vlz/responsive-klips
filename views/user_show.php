<? $user = $this->user ?>

<h2><?= $user->name ?></h2>
<div class="muted">
	<?= $user->studiengang ?>
	(<?= $user->semester ?>. Semester)
</div>

<? $this->coursesTemplate->render() ?>