<!--Ziel: Darstellung der Kurse in Abhängigkeit von den Instituten-->

<ul class="breadcrumb" id="bcrumb">
	<li><a href="#">Vorlesungsverzeichnis</a> <span class="divider">/</span></li>
	<li><a href="index.php?controller=institute&action=index">nach Einrichtungen</a> <span class="divider">/</span></li>
	<li class="acitve"><?= $this->institute->name?></li>
</ul>

<h2 id="headline"><?= $this->institute->name?></h2>

<!--collapse-Funktion für den Abschluss-->
<?foreach($this->institute->degrees as $degree) { ?>
<div class="accordion" id="accordion2">
  <div class="accordion-group">
    <div class="accordion-heading">
      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#<?= $degree->id?>">
			<?= $degree->name ?>
      </a>
    </div>
    <div id="<?= $degree->id?>" class="accordion-body collapse out">
      <div class="accordion-inner">
		
		<!--Tabelle zur Darstellung der Kurse-->
		<table id="kursliste" class="table table-striped">
			<thead>
				<tr>
					<td>Veranstaltungstitel</td>
					<td>Uhrzeit</td>
					<td class="art">Veranstaltungsart</td>
					<td class="modul">Modul</td>
					<td>Gebäude</td>
				</tr>
			</thead>
			<tbody>
				<? foreach($degree->courses as $course) { ?>
				<tr>
					<td><a href="index.php?controller=course&amp;action=show&amp;id=<?= $course->id ?>"><?= $course->titel?></a></td>
					<td><?= $course->zeit?></td>
					<td class="art"><?= $course->art?></td>
					<td class="modul"><?= $course->modul?></td>
					<td><a href="index.php?controller=location&action=show&id=<?= $course->gebaeude[0]->id?>"><?= $course->gebaeude[0]->name?></a></td>
				<?}?>
			</tbody>
		</table>
		
      </div>
    </div>
  </div>
</div>
<?}?>

