<?php
//DB-Aufruf
$pdo = new PDO('mysql:host=localhost;dbname=nennung', 'bullet64', 'xt19Zkl');
$sql = "SELECT * FROM id WHERE";

//Header schreiben
//$header = array (
//	array('Transponder Nr 1', 'Transponder Nr 2', 'Liz.-Nr.', 'Name', 'Vorname', 'Club', 'Geburtstag', 'Aktive Frequenz', 'Synthesizer', 'Klasse', 'EMail', 'CarId 1', 'CarId 2', 'Land', 'Payment'),
//	);

$out = fopen('php://output', 'w');
fputcsv($out, array('this','is some', 'csv "stuff", you know.'));
fclose($out);

//Schreiben der Daten
//$fp = fopen('file.csv', 'w');
//print $csv_output; //UTF-8
//print mb_convert_encoding( $csv_output, 'Windows-1252', 'AUTO');
//	foreach ($header as $fields) {
//		fputcsv($fp, $fields);
//	}

//fclose($fp);

//DB close
$pdo = null;
?>
