<ul class="breadcrumb">
  <li>Hilfe &amp; Service <span class="divider">/</span></li>
  <li><a href="/location/index">Gebäude</a></li>
</ul>

<h2>Gebäude <span class="volltext">der Universität zu Köln</span></h2>

<p class="list_desc">Im folgenden finden Sie eine Liste der Gebäude der Universität zu Köln. Per Klick auf die verschiedenen Spaltenüberschriften kann die Sortierung der Liste geändert werden. Über das Suchfeld auf der rechten Seite können die Gebäude gefiltert werden.</p>

<table id="gebaeudeliste" class="table table-striped">
	<thead>
		<tr>
			<td class="gebnr">Geb.nr.</td>
			<td class="zuordnung">Zuordnung</td>
			<td>Name</td>
			<td class="adresse">Straße</td>
		</tr>
	</thead>
	<tbody>
		<? foreach($this->location as $location) { ?>
		<tr>
			<td><a href="/location/show/<?= $location->id; ?>" title="<?= $location->id; ?>"><?= $location->gebnr; ?></a></td>
			<td class="zuordnung"><?php if($location->zuordnung == 0) echo "Klinikum"; if($location->zuordnung == 1) echo "Universität"; ?></td>
			<td><a href="/location/show/<?= $location->id; ?>"><?= $location->name; ?></a></td>
			<td class="adresse"><?= $location->strasse; ?></td>
		</tr>
		<? } ?>
	</tbody>
</table>

<!-- DataTables-Plugin, das zur Suche/Sortierung der Gebäudeliste genutzt wird -->
<script type="text/javascript" src="js/jquery.dataTables.min.js"></script>
<script type="text/javascript">

	(function() {
	 
	/*
	 * Natural Sort algorithm for Javascript - Version 0.7 - Released under MIT license
	 * Autor: Jim Palmer, Dave Koelle, u.a.
	 * Quelle: http://js-naturalsort.googlecode.com/svn/trunk/naturalSort.js
	 */
	function naturalSort (a, b) {
	    var re = /(^-?[0-9]+(\.?[0-9]*)[df]?e?[0-9]?$|^0x[0-9a-f]+$|[0-9]+)/gi,
	        sre = /(^[ ]*|[ ]*$)/g,
	        dre = /(^([\w ]+,?[\w ]+)?[\w ]+,?[\w ]+\d+:\d+(:\d+)?[\w ]?|^\d{1,4}[\/\-]\d{1,4}[\/\-]\d{1,4}|^\w+, \w+ \d+, \d{4})/,
	        hre = /^0x[0-9a-f]+$/i,
	        ore = /^0/,
	        // convert all to strings and trim()
	        x = a.toString().replace(sre, '') || '',
	        y = b.toString().replace(sre, '') || '',
	        // chunk/tokenize
	        xN = x.replace(re, '\0$1\0').replace(/\0$/,'').replace(/^\0/,'').split('\0'),
	        yN = y.replace(re, '\0$1\0').replace(/\0$/,'').replace(/^\0/,'').split('\0'),
	        // numeric, hex or date detection
	        xD = parseInt(x.match(hre)) || (xN.length != 1 && x.match(dre) && Date.parse(x)),
	        yD = parseInt(y.match(hre)) || xD && y.match(dre) && Date.parse(y) || null;
	    // first try and sort Hex codes or Dates
	    if (yD)
	        if ( xD < yD ) return -1;
	        else if ( xD > yD )  return 1;
	    // natural sorting through split numeric strings and default strings
	    for(var cLoc=0, numS=Math.max(xN.length, yN.length); cLoc < numS; cLoc++) {
	        // find floats not starting with '0', string or 0 if not defined (Clint Priest)
	        var oFxNcL = !(xN[cLoc] || '').match(ore) && parseFloat(xN[cLoc]) || xN[cLoc] || 0;
	        var oFyNcL = !(yN[cLoc] || '').match(ore) && parseFloat(yN[cLoc]) || yN[cLoc] || 0;
	        // handle numeric vs string comparison - number < string - (Kyle Adams)
	        if (isNaN(oFxNcL) !== isNaN(oFyNcL)) return (isNaN(oFxNcL)) ? 1 : -1;
	        // rely on string comparison if different types - i.e. '02' < 2 != '02' < '2'
	        else if (typeof oFxNcL !== typeof oFyNcL) {
	            oFxNcL += '';
	            oFyNcL += '';
	        }
	        if (oFxNcL < oFyNcL) return -1;
	        if (oFxNcL > oFyNcL) return 1;
	    }
	    return 0;
	}

	// DataTables-Zugriff auf Natural Sort
	jQuery.extend( jQuery.fn.dataTableExt.oSort, {
	    "natural-asc": function ( a, b ) {
	        return naturalSort(a,b);
	    },
	 
	    "natural-desc": function ( a, b ) {
	        return naturalSort(a,b) * -1;
	    }
	} );
	 
	}());

	// DataTables-Initialisierung
	$(document).ready(function(){
	    $('#gebaeudeliste').dataTable( {
	    	"bPaginate": false,
	        "bLengthChange": false,
	        "bFilter": true,
	        "bSort": true,
	        "bInfo": false,
	        "bAutoWidth": false,
	        "aoColumns": [
				{ "sType": "natural" },
				null,
				null,
				null
			]
	    });
	});
</script>
