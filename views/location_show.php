<?php
$id = $this->location->id;
$name = $this->location->name;
$gebnr = $this->location->gebnr;
$adresse = $this->location->adresse;
$ort = $adresse . ", 50923 Köln";
?>

<h1><?= $name; ?></h1>

<p>
	<b>ID:</b> <?= $id; ?><br/>
	<b>Gebäudenummer:</b> <?= $gebnr; ?></br/>
	<b>Adresse:</b> <?= $adresse; ?>
</p>

<!-- Google Maps API v3 -->
<script type="text/javascript">
	var geocoder, map;
 
  	function initialize() {
    	
    	geocoder = new google.maps.Geocoder();
    	var latlng = new google.maps.LatLng(50.927, 6.921);
    	var myOptions = {
      		zoom: 15,
      		center: latlng,
      		mapTypeId: google.maps.MapTypeId.ROADMAP
    	}
    	
    	map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
 		codeAddress();
  		
  	}
 
	function codeAddress() {
    	
    	var address = "<?php echo $ort; ?>";

    	geocoder.geocode( { 'address': address}, function(results, status) {

      		if (status == google.maps.GeocoderStatus.OK) {

        		map.setCenter(results[0].geometry.location);

        		var marker = new google.maps.Marker({
            		map: map,
            		position: results[0].geometry.location
        		});

      		}
      		else {
        		alert("Geocode konnte nicht aufgelöst werden: " + status);
      		}

    	});
  		
  	}

  	function loadScript() {

		var script = document.createElement("script");
		script.type = "text/javascript";
		script.src = "http://maps.googleapis.com/maps/api/js?key=APIKEY&sensor=false&callback=initialize";
		// API-Key mit IP Locking, wird nach Fertigstellung des Projekts deaktiviert
		document.body.appendChild(script);
	}

	window.onload = loadScript;
 
</script>
<div id="map_canvas"></div>