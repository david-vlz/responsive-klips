<?php
include "config.php"; // API-Key holen
$id = $this->location->id;
$gebnr = $this->location->gebnr;
$zuordnung = $this->location->zuordnung;
$name = $this->location->name;
$strasse = $this->location->strasse;
$adresse = $strasse . ", 50923 Köln";
?>

<ul class="breadcrumb">
  <li>Hilfe & Service <span class="divider">/</span></li>
  <li><a href="index.php?controller=location&action=index">Gebäude</a> <span class="divider">/</span></li>
  <li><a href="#"><?= $name; ?></a></li>
</ul>

<h2><?= $name; ?></h2>

<table id="einzelansicht" class="table table-striped">
    <tr>
        <td class="title">Geb.nr.</td>
        <td><?= $gebnr; ?></td>
    </tr>
    <tr>
        <td class="title">Zuordnung</td>
        <td><?php if($zuordnung == 0) echo "Klinikum"; if($zuordnung == 1) echo "Universität"; ?></td>
    </tr>
    <tr>
        <td class="title">Adresse</td>
        <td><?= $adresse; ?></td>
    </tr>
    <tr>
        <td class="title">Link</td>
        <td><a href="http://www.uni-koeln.de/uni/gebaeude/<?= $gebnr; ?>.html">zur Gebäudewebseite</a></td>
    </tr>
</table>

<img src="img/location/<?= $gebnr; ?>.jpg" alt="" class="show_photo">

<!-- Google Maps JavaScript API v3 -->
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=<?= $mapskey; ?>&sensor=false&callback=initialize"></script> <!-- API-Key mit IP Locking, wird nach Fertigstellung des Projekts deaktiviert -->
<script type="text/javascript">
	var geocoder, map;
 
    function initialize() {

        var address = "<?= $adresse; ?>";
        
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
