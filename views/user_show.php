<? $user = $this->user ?>

<h2><?= $user->name ?></h2>
<div class="muted">
	<?= $user->studiengang ?>
	(<?= $user->semester ?>. Semester)
</div>

<div class="user-articles-container">
	<? $this->coursesTemplate->render() ?>
</div>