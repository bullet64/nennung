<?php
// Daten Export im CSV-Format für RC Timing (http://www.rc-timing.ch/). Trennzeichen ";"


//Definitionen
$abfrage = array();
$filename = 'export.csv';
$header = array("Section","Lastname","Firstname","Country","EMail","Birthday","Club","Active Frequency","Transponder Nr 1","CarId 1","Transponder Nr 2","CarId 2","Registration","Licence");

//Header in Datei schreiben
// Sichergehen, dass die Datei existiert und beschreibbar ist.
    if (is_writable($filename)) {

    // Wir öffnen $filename im "Schreiben" - Modus. Datei wird komplett überschrieben!
    // Der Dateizeiger befindet sich am Anfang der Datei, und
    // dort wird $header später mit fputcsv() geschrieben.
     if (!$handle = fopen($filename, "w")) {
         print "Kann die Datei $filename nicht öffnen";
         exit;
    }

    // Schreibe $header in die geöffnete Datei. Trenne die Daten mit einem ","
    if (!fputcsv($handle, $header,$delimiter = ',', $enclosure = '"')) {
        print "Kann in die Datei $filename nicht schreiben";
        exit;
    }

    fclose($handle);

} else {
    print "Die Datei $filename ist nicht schreibbar";
}


//DB-Aufruf
$pdo = new PDO('mysql:host=localhost;dbname=nennung', 'bullet64', 'xt19Zkl');

//DB-Abfrage
$sql = "SELECT * FROM nennungen";

//Schleife zur Ausgabe der Daten
foreach ($pdo->query($sql) as $row) {
     // Abfrage bauen für den Export. Evt. müssen ein paar Daten angepasst werden.
     $abfrage[] = $row['veranstaltung'] . "," . $row['vorname'] . "," . $row['nachname'];
    
     // Daten schreiben
    // Sichergehen, dass die Datei existiert und beschreibbar ist.
    if (is_writable($filename)) {

        // Wir öffnen $filename im "Anhänge" - Modus.
        // Der Dateizeiger befindet sich am Ende der Datei, und
        // dort wird $abfrage später mit fputs() geschrieben.
        if (!$handle = fopen($filename, "a")) {
            print "Kann die Datei $filename nicht öffnen";
            exit;
    }
    
        // Schreibe $abfrage in die geöffnete Datei.
        $fp = fopen($filename, 'a'); 
        foreach($abfrage as $values) fputs($fp, $values."\n"); 
        fclose($fp); 

    } else {
        print "Die Datei $filename ist nicht schreibbar";
    }
    // Das Array wieder leeren!
    $abfrage = array();
    }

header ("Content-Type: application/download");
header ("Content-Disposition: attachment; filename=$filename");
header("Content-Length: " . filesize("$filename"));
$fp = fopen("$filename", "r");
fpassthru($fp);
fclose($fp);

//DB close
$pdo = null;
?>
