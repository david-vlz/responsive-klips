<? foreach($this->location as $location) { ?>
	<h3><?= $location->name; ?></h2>
	<p>ID: <?= $location->id; ?></p>
	<p>Gebäudenr.: <?= $location->gebnr; ?></p>
	<p>Adresse: <?= $location->adresse  ?></p>
<? } ?>
