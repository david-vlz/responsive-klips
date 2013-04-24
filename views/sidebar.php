<div id="menu" class="well">
	<i class="icon-align-justify"></i> Navigation <span class="word">anzeigen</span>
</div>

<ul id="navigationlist" class="nav nav-list well">
	<li><a href="/index.php">Startseite</a></li>
	<li class="nav-header">Vorlesungsverzeichnis</li>
	<li><a href="/institute/index">nach Einrichtungen</a></li>
	<li><a href="/search_major/index">nach Studiengängen</a></li>
	<li class="nav-header">Meine Funktionen</li>
	<li><a href="/user/show"><i class="icon-user"></i> <?= $this->user->name ?></a></li>
	<li><a href="/course/index">Meine Kurse</a></li>
	<li><a href="/module/index">Prüfungsleistungen</a></li>
	<li class="nav-header">Hilfe & Service</li>		
	<li><a href="/location/index">Gebäude</a></li>
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
