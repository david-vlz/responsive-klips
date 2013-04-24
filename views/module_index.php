 <h3>Prüfungsleistungen</h3>
            <!--collapse -->
            <p>
              <button class="btn danger" data-toggle="collapse" data-target="#collapseDemoWrap">
                <h5>Prüfungslesitungen in Medienkulturwissenschaften <i class="icon-ok-circle"></i>45/90 CPs</h5>
              </button>
            </p>
			  <div id="collapseDemoWrap" class="collapse"> 
        
              <!-- group collapse -->

<? foreach($this->module as $module) { ?>  
<div class="accordion" id="accordion2">
  <div class="accordion-group">
    <div class="accordion-heading">
      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#<?= $module->id?>">
			<?= $module->titel?>
      </a>
    </div>
    <div id="<?= $module->id?>" class="accordion-body collapse out">
      <div class="accordion-inner"> 
      
      <!-- Schleife, die alle Module aufruft -->
<? foreach($module->module as $veranstaltung) { ?>
	
	&nbsp;&nbsp;&nbsp;<br>
	 <table id="kursliste" class="table table-striped">
			<thead>
	<td>
	<tr><strong>Titel:</strong> <?= $module->titel; ?></tr>
	<p><tr><strong>Veranstaltungsart:</strong> <?= $veranstaltung->art; ?></tr></p>
	<p><tr><strong>Veranstaltung: </strong><?= $veranstaltung->nam; ?></tr></p>
	<p><tr><strong>Credit Points:</strong> <?= $veranstaltung->cp; ?></tr></p>
	<p><tr><strong>Note: </strong><?= $veranstaltung->mark; ?></tr></p> 
	</thead>
	</table>
				
				<? } ?>

</div>
</div>
<? } ?>