<?php
include "config.php"; // API-Key holen
$id = $this->location->id;
$name = $this->location->name;
$gebnr = $this->location->gebnr;
$adresse = $this->location->adresse;
$ort = $adresse . ", 50923 Köln";
?>

<ul class="breadcrumb">
  <li><a href="#">Hilfe & Service</a> <span class="divider">/</span></li>
  <li><a href="index.php?controller=location&action=index">Gebäude</a> <span class="divider">/</span></li>
  <li><a href="#"><?= $name; ?></a></li>
</ul>

<h2><?= $name; ?></h2>

<p>
	<b>ID:</b> <?= $id; ?><br/>
	<b>Gebäudenummer:</b> <?= $gebnr; ?></br/>
	<b>Adresse:</b> <?= $adresse; ?>
</p>

<!-- Google Maps JavaScript API v3 -->
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=<?= $mapskey; ?>&sensor=false&callback=initialize"></script> <!-- API-Key mit IP Locking, wird nach Fertigstellung des Projekts deaktiviert -->
<script type="text/javascript">
	var geocoder, map;
 
    function initialize() {

        var address = "<?= $ort; ?>";
        
        geocoder = new google.maps.Geocoder();

        geocoder.geocode( { 'address': address}, function(results, status) {

            if (status == google.maps.GeocoderStatus.OK) {

                var myOptions = {
                    zoom: 16,
                    center: results[0].geometry.location,
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                }
                
                map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);

                var marker = new google.maps.Marker({
                            map: map,
                            position: results[0].geometry.location
                });
                
            }
            else {
                alert("Geocode konnte nicht aufgelöst werden. Status: " + status);
            }

        });
        
    }
</script>
<div id="map_canvas"></div>
