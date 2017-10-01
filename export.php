<?php
//DB-Aufruf
$pdo = new PDO('mysql:host=localhost;dbname=nennung', 'bullet64', 'xt19Zkl');
$sql = "SELECT * FROM id WHERE";

//Header schreiben
$csv_output = JText::_('Transponder Nr 1;Transponder Nr 2;Liz.-Nr;Name;Vorname;Club;Geburtstag;Aktive Frequenz;Synthesizer;Klasse;EMail;CarId 1;CarId 2;Land;Payment'); //set header text



//Schreiben der Daten
//print $csv_output; //UTF-8
print mb_convert_encoding( $csv_output, 'Windows-1252', 'AUTO');
	


//DB close
$pdo = null;
?>
