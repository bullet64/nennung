<?php
// Daten Export im CSV-Format für RC Timing (http://www.rc-timing.ch/). Trennzeichen ";"


//Definitionen
$abfrage = array();
$filename = 'export.csv';
$header = array("Name","Vorname");



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

    // Schreibe $header in die geöffnete Datei. Trenne die Daten mit einem ";"
    if (!fputcsv($handle, $header, ';')) {
        print "Kann in die Datei $filename nicht schreiben";
        exit;
    }

    // print "Fertig, in Datei $filename wurde $header geschrieben"; // Kann später weg!

    //fclose($handle);

} else {
    print "Die Datei $filename ist nicht schreibbar";
}


//DB-Aufruf
$pdo = new PDO('mysql:host=localhost;dbname=nennung', 'bullet64', 'xt19Zkl');

//DB-Abfrage
$sql = "SELECT * FROM nennungen";

//Schleife zur Ausgabe der Daten
foreach ($pdo->query($sql) as $row) {
   //echo $row['vorname'].";".$row['nachname']."<br />"; // Kann später weg!
   
// Abfrage bauen für den Export. Evt. müssen ein paar Daten angepasst werden.    
    $abfrage[] = $row['vorname'].";".$row['nachname']; 

// Daten schreiben
// Sichergehen, dass die Datei existiert und beschreibbar ist.
if (is_writable($filename)) {

    // Wir öffnen $filename im "Anhänge" - Modus.
    // Der Dateizeiger befindet sich am Ende der Datei, und
    // dort wird $somecontent später mit fwrite() geschrieben.
    if (!$handle = fopen($filename, "a")) {
         print "Kann die Datei $filename nicht öffnen";
         exit;
    }

    // Schreibe $somecontent in die geöffnete Datei.
    if (!fputcsv($handle, $abfrage)) {
        print "Kann in die Datei $filename nicht schreiben";
        exit;
    }

    //print "Fertig, in Datei $filename wurde $abfrage geschrieben";

    fclose($handle);

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

//print "Fertig, in die Datei $filename wurden die Daten geschrieben!";

//DB close
$pdo = null;
?>
