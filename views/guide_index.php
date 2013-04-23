<!--Ziel: Darstellung der Institute in einem tabbable-->

<ul class="breadcrumb"id="bcrumb">
	<li><a href="#">Vorlesungsverzeichnis</a> <span class="divider">/</span></li>
	<li class="acitve">nach Einrichtungen</li>
</ul>

<h2 id="headline">Vorlesungsverzeichnis Sommersemester 2013</h2>

<!--tabbable zur Darstellung der Fakultäten-->
<div id="guide_index">
          <div class="tabbable tabs-left"> 
              <ul class="nav nav-tabs" id="myTab">
                <li><a href="#0" data-toggle="tab">Humanwissenschaftliche Fakultät</a></li>
                <li><a href="#1" data-toggle="tab">Mathematische Fakultät</a></li>
                <li><a href="#" data-toggle="tab">Medizinische Fakultät</a></li>
				<li><a href="#2" data-toggle="tab">Philosophische Fakultät</a></li>
				<li><a href="#" data-toggle="tab">Rechtswissenschaftliche Fakultät</a></li>
				<li><a href="#3" data-toggle="tab">Wirtschaftswissenschaftliche Fakultät</a></li>
				<li><a href="#" data-toggle="tab">Professional Center</a></li>
				<li><a href="#" data-toggle="tab">Veranstaltungen für Hörer aller Fakultäten</a></li>
			  </ul>
				
<div class="tab-content">
<!-- Schleife, die alle Fakultäten aufruft -->
<? foreach($this->department as $department) { ?>
	<div class="tab-pane" id="<?= $department->id; ?>">
				<!--Schleife, die alle Institute aufruft-->
				<? foreach($department->institutes as $institute) { ?>
						<ul class="content-tabs">
						<a href="index.php?controller=institute&action=show&id=<?= $institute->id; ?>" ><?= $institute->name; ?></a>
						</ul>
				<? } ?>
	</div>
<? } ?>
</div>
</div>
</div>

<!--Query, die die Menüpunkte miteinander verlinkt-->
<script>
$(function() {
$('#myTab a:last').tab('show');
})
</script>
