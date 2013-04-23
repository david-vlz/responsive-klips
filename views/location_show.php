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

<div id="show_photo">
<a href="img/location/<?= $gebnr; ?>.jpg"><img src="img/location/thumbnail_<?= $gebnr; ?>.jpg" alt="<?= $name; ?>" title="<?= $name; ?>"></a>
</div>

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

<!-- Google Maps JavaScript API v3 -->
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=<?= $mapskey; ?>&sensor=true&callback=initialize"></script> <!-- API-Key mit IP Locking, wird nach Fertigstellung des Projekts deaktiviert -->
<script type="text/javascript">
	var geocoder, map, myPosition;
 
    function initialize() {

        var address = "<?= $adresse; ?>";
        geocoder = new google.maps.Geocoder();
        geocoder.geocode( { 'address': address}, function(results, status) {

            building = results[0].geometry.location;

            if (status == google.maps.GeocoderStatus.OK) {

                var myOptions = {
                        zoom: 16,
                        center: building,
                        mapTypeId: google.maps.MapTypeId.ROADMAP
                }
                
                map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);

                var marker = new google.maps.Marker({
                        map: map,
                        position: building
                });

                // Eigenen Standpunkt bestimmen, wenn unterstützt
                if (navigator.geolocation) {
                    
                    navigator.geolocation.getCurrentPosition(function(position){

                        var myPositionLat = position.coords.latitude;
                        var myPositionLng = position.coords.longitude;

                        myPosition = new google.maps.LatLng(myPositionLat,myPositionLng);
                        var myPositionImage = "img/location/icon_myposition.png";

                        var markerUser = new google.maps.Marker({
                                map: map,
                                position: myPosition,
                                icon: myPositionImage
                        });

                    });

                    $("#map_buttons").show(); // Buttons zur Kartensteuerung anzeigen

                }
                else {
                    alert("Eigener Standort kann nicht bestimmt werden.");
                }  
                
            }
            else {
                alert("Adresse konnte nicht aufgelöst werden. Status: " + status);
            }

        });
        
    }

    function button(auswahl) {
        if (auswahl==1) { map.setCenter(myPosition); }
        else if (auswahl==2) { map.setCenter(building); }
    }
</script>
<div id="map_canvas"></div>

<div id="map_buttons">
    <button class="btn btn-small btn-primary" type="button" onclick="button(1)"><i class="icon-map-marker icon-white"></i> meine Position&nbsp;&nbsp;</button>
    <button class="btn btn-small btn-danger" type="button" onclick="button(2)"><i class="icon-map-marker icon-white"></i> Gebäude&nbsp;&nbsp;</button>
</div>
