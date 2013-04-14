<ul class="breadcrumb">
  <li><a href="#">Hilfe & Service</a> <span class="divider">/</span></li>
  <li><a href="#">Gebäude</a> <span class="divider">/</span></li>
  <li><a href="index.php?controller=location&action=index">Gebäudeliste</a></li>
</ul>

<h3>Gebäudeliste</h3>

<p>Im folgenden finden Sie eine Liste der Gebäude der Universität zu Köln. Per Klick auf die verschiedenen Spaltenüberschriften kann die Sortierung der Liste geändert werden. Über das Suchfeld auf der rechten Seite können die Gebäude gefiltert werden.</p>

<table id="gebaeudeliste" class="table table-striped">
	<thead>
		<tr>
			<td>Geb.nr.</td>
			<td>Zuordnung</td>
			<td>Name</td>
			<td>Straße</td>
		</tr>
	</thead>
	<tbody>
		<? foreach($this->location as $location) { ?>
		<tr>
			<td><a href="index.php?controller=location&action=show&id=<?= $location->id; ?>"><?= $location->gebnr; ?></a></td>
			<td>Universität</td>
			<td><a href="index.php?controller=location&action=show&id=<?= $location->id; ?>"><?= $location->name; ?></a></td>
			<td><?= $location->adresse  ?></td>
		</tr>
		<? } ?>
	</tbody>
</table>

<script type="text/javascript" src="js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
	    $('#gebaeudeliste').dataTable( {
	    	"bPaginate": false,
	        "bLengthChange": false,
	        "bFilter": true,
	        "bSort": true,
	        "bInfo": false,
	        "bAutoWidth": false
	    });
	});
</script>
