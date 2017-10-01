<?php

$abfrage = array();

//DB-Aufruf
$pdo = new PDO('mysql:host=localhost;dbname=nennung', 'bullet64', 'xt19Zkl');

$sql = "SELECT * FROM id";
foreach ($pdo->query($sql) as $row) {
   echo $row['vorname']." ".$row['nachname']."<br />";
   $abfrage[] = $row['vorname']." ".$row['nachname'];
   

  $filename = 'test.txt';


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

    print "Fertig, in Datei $filename wurde $abfrage geschrieben";

    fclose($handle);

} else {
    print "Die Datei $filename ist nicht schreibbar";
}
   $abfrage = array();
}



//DB close
$pdo = null;
?>
