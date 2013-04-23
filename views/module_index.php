<!-- Schleife, die alle Fakultäten aufruft -->
<? foreach($this->module as $module) { ?>
	<p>ID: <?= $module->id; ?><br>
	Titel: <?= $module->titel; ?><br>
				<!--Schleife, die alle Institute aufruft-->
				<? foreach($module->module as $veranstaltung) { ?>
					&nbsp;&nbsp;&nbsp;Veranstaltungsname: <?= $veranstaltung->nam; ?><br>
				<? } ?>
	</p>
<? } ?>