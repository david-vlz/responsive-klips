<h4>Vorlesungsverzeichnis Sommersemester 2013</h4>
          <div class="tabbable tabs-left"> 
              <ul class="nav nav-tabs" id="myTab">
                <li class="disabled"><a href="<!--#humanwissenschaftliche-->" data-toggle="tab">Humanwissenschaftliche Fakultät</a></li>
                <li class="active"><a href="#mathematische" data-toggle="tab">Mathematische Fakultät</a></li>
                <li class="disabled"><a href="<!--#medizinische-->" data-toggle="tab">Medizinische Fakultät</a></li>
				<li><a href="#philosophische" data-toggle="tab">Philosophische Fakultät</a></li>
				<li class="disabled"><a href="<!--#rechtswissenschaftliche-->" data-toggle="tab">Rechtswissenschaftliche Fakultät</a></li>
				<li><a href="#wirtschaftswissenschaftliche" data-toggle="tab">Wirtschaftswissenschaftliche Fakultät</a></li>
				<li class="disabled"><a href="<!--#profcenter-->" data-toggle="tab">Professional Center</a></li>
				<li class="disabled"><a href="<!--#sonstiges-->" data-toggle="tab">Veranstaltungen für Hörer aller Fakultäten</a></li>
			  </ul>
          
		  <div class="tab-content">
                <div class="tab-pane" id="humanwissenschaftliche">
				  <p>Fächer der humanwissenschaftlichen Fakultät</p>
                </div>
                <div class="tab-pane active" id="mathematische">
				<p> Hier kommen die Institute der mathematischen Fakultät hin, 
				die Department als Objekt übergeben werden</p>
                </div>
                <div class="tab-pane" id="medizinische">
                  <p>Fächer der medizinischen Fakultät</p>
                </div>
				<div class="tab-pane" id="philosophische">
                 <? foreach($this->institutes as $guide) { ?>
							<p><a href='http://localhost/GUI/index.php?controller=test&action=index'><?echo $guide->name?></a></p>
						<? foreach($guide->courses as $course) {?>
							<p style="margin-left:15px"><?= $course->titel?></p>
							<!--<p style="margin-left:15px"></?= $course->beschreibung?></p>-->
						<?}?>
				  <?}?>
                </div>
				<div class="tab-pane" id="rechtswissenschaftliche">
                  <p>Fächer der rechtswissenschaftlichen Fakultät</p>
                </div>
				<div class="tab-pane" id="wirtschaftswissenschaftliche">
                  <p> Hier kommen die Institute der wirtschaftswissenschaftlichen Fakultät hin, 
				die Department als Objekt übergeben werden</p>
                </div>
				<div class="tab-pane" id="profcenter">
                  <p>Veranstaltungen des Professional Centers</p>
                </div>
				<div class="tab-pane" id="sonstiges">
                  <p>Veranstaltungen für Hörer anderer Fakultäten</p>
                </div>
				
          </div>
		  <script>
		  $(function() {
		  $('#myTab a:last').tab('show');
		  })
		  </script>
          </div>

       <!-- Schleife, die alle Fakultät aufruft -->
<? foreach($this->department as $department) { ?>
	<h3><?= $department->name; ?></h3>
	<p>ID: <?= $department->id; ?></p>

	<!-- Schleife, die die jeweiligen Institute aufliste -->
	<? foreach($department->institutes as $institute) { ?>
		<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Institut: <?= $institute->name; ?></p>

		<!-- Schleife, die die jeweiligen Kurse anzeigt -->
		<? foreach($institute->courses as $course) { ?>
		<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Kurs: <?= $course->titel; ?>, Dozent: <?= $course->lehrperson; ?></p>
		<? } ?>

	<? } ?>

<? } ?>
		  