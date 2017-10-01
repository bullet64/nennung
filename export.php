<?php
//DB-Aufruf
$pdo = new PDO('mysql:host=localhost;dbname=nennung', 'bullet64', 'xt19Zkl');
$sql = "SELECT * FROM id INTO OUTFILE 'mein.csv'";

//foreach ($sql as $r)
//{
//			$results_arr = array();
//			$results_arr[] = $fieldValues[$r->id][14]; // Transponder Nr.1
 //     $csv_output .= "\r\n" . implode(";", $results_arr);
	//	}	




//Header schreiben
//$header = array (
//	array('Transponder Nr 1', 'Transponder Nr 2', 'Liz.-Nr.', 'Name', 'Vorname', 'Club', 'Geburtstag', 'Aktive Frequenz', 'Synthesizer', 'Klasse', 'EMail', 'CarId 1', 'CarId 2', 'Land', 'Payment'),
//	);



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
