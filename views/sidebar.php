<<<<<<< HEAD
	<ul class="nav nav-list well">
		<li><a href="index.php">Startseite</a></li>
		<li class="nav-header">Vorlesungsverzeichnis</li>
		<li><a href="index.php?controller=institute&action=index">nach Einrichtungen</a></li>
		<li><a href="index.php?controller=search_major&action=index">nach Studiengängen</a></li>
		<li><a href="index.php?controller=data&action=index">(Daten)</a></li>
		<li class="nav-header">Meine Funktionen</li>
		<li><a href="#">Funktion 1</a></li>
		<li><a href="#">Funktion 2</a></li>
		<li class="nav-header">Hilfe & Service</li>
		<li><a href="index.php?controller=location&action=index">Gebäude</a></li>
	</ul>
=======

<div id="menu" class="well">
	<i class="icon-align-justify"></i> Navigation <span class="word">anzeigen</span>
</div>

<ul id="navigationlist" class="nav nav-list well">
	<li><a href="index.php">Startseite</a></li>
	<li class="nav-header">Vorlesungsverzeichnis</li>
	<li><a href="index.php?controller=course&action=index">nach Einrichtungen</a></li>
	<li><a href="index.php?controller=search_major&action=index">nach Studiengängen</a></li>
	<li><a href="index.php?controller=data&action=index">(Daten)</a></li>
	<li class="nav-header">Meine Funktionen</li>
	<li><a href="#">Funktion 1</a></li>
	<li><a href="#">Funktion 2</a></li>
	<li class="nav-header">Hilfe & Service</li>		
	<li><a href="index.php?controller=location&action=index">Gebäude</a></li>
</ul>

<script type="text/javascript">
	$('#menu').click(function() {
		if ($("#navigationlist").is(":hidden")) {
	  		$('#navigationlist').slideDown('fast', function() {
	  			$('.word').text("verbergen");
	  		}); // ausfahren
	  	}
	  	else {
	  		$('#navigationlist').slideUp('fast', function() {
	  			$('.word').text("anzeigen");
	  		}); // einfahren
	  	}
	});
</script>
>>>>>>> Sidebar repsonsive gemacht
