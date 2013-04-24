<? if ($this->includedInOtherTemplate) { ?> 

	<h3>Belegte Kurse</h3>

<? } else { ?>

	<ul class="breadcrumb">
		<li>Meine Funktionen <span class="divider">/</span></li>
		<li><a href="index.php?controller=course&and;action=index">Meine Kurse</a></li>
	</ul>
	<h2>Meine Kurse</h2>

<? } ?>

<? foreach($this->courses as $course) { ?>
	
	<div class="well well-small course-preview">

		<a href="index.php?controller=course&amp;action=show&amp;id=<?= $course->id ?>" ><h3 id="course-title"><?= $course->titel ?></h3></a>

		<a href="#" class="btn btn-small btn-danger pull-right" type="button">Abmelden</a>

		<div class="muted short-info">
			<?= $course->art ?> /
			<?= $course->semester ?> /
			<a href="mailto:<?= $course->mail ?>"><?= $course->lehrperson ?></a>
		</div>

	</div>

<? } ?>