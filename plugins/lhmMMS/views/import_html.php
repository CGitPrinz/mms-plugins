<h1>LHM MMS Import Depot Scannerdaten</h1>

<div>
<?php

	print caFormTag($this->request, 'import', 'lhm_depot_import', 'lhmMMS/ScannerImport');
?>
	Beziehungstyp für Objekt &lt;-&gt; Standort Beziehung:
<?php

 	print str_replace("<select ", "<select id='lhm_depot_import_location' ", caHTMLSelect('rel_type_code', array(
 		'aktueller Standort' => 'current_location',
 		'Aufbewahrungsort' => 'repository'
 	)));


?>
	<hr />
	Scannerdatei: <input id="lhm_depot_import_file" type="file" name="data" size="40"> 
	<hr />
</div>
<?php
	print str_replace("<a ", "<a id='lhm_depot_import_send' ", caFormSubmitButton($this->request, __CA_NAV_ICON_GO__, "Absenden", 'lhm_depot_import'));
 	
?>
