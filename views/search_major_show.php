<!--Ziel: Darstellung der Kurse der ausgewählten Studienfächer in Form einer Tabelle--> 

<ul class="breadcrumb">
	<li>Vorlesungsverzeichnis <span class="divider">/</span></li>
	<li><a href="index.php?controller=search_major&action=index">nach Studiengängen</a><span class="divider">/</span></li>
	<li><a href="#"><?= $this->major->majorNr?> <?= $this->major->name?></a></li>
</ul>

<h2><?= $this->major->name?></h2>

<!--Collapse-Funktion für die Studienfächer-->
<?foreach($this->major->minor as $minor) { ?>
<div class="accordion" id="accordion2">
  <div class="accordion-group">
    <div class="accordion-heading">
      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#<?= $minor->id?>">
			<?= $minor->name?>
      </a>
    </div>
    <div id="<?= $minor->id?>" class="accordion-body collapse out">
      <div class="accordion-inner">

	  <!--Tabelle zur Darstellung der Kurse-->
	  <table id="kursliste" class="table table-striped">
			<thead>
				<tr>
					<td>Vrst-nr.</td>
					<td>Veranstaltungstitel</td>
					<td>Uhrzeit</td>
					<td class="art">Veranstaltungsart</td>
					<td class="modul">Modul</td>
					<td class="gebäude">Gebäude</td>
				</tr>
			</thead>
			<tbody>
				<?foreach($minor->courses as $course) { ?>
				<tr>
				
					<td><?= $course->lvNummer?></td>
					<td><a href="index.php?controller=course&amp;action=show&amp;id=<?= $course->id ?>"><?= $course->titel?></a></td>
					<td><?= $course->zeit?></td>
					<td class="art"><?= $course->art?></td>
					<td class="modul"><?= $course->modul?></td>
					<td class="gebäude"><?= $course->gebaeude?></td>
				</tr>
				<?}?>
			</tbody>
		</table>
		
		</div>
    </div>
  </div>
</div>
<? } ?>