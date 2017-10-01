<?php
//DB-Aufruf
$pdo = new PDO('mysql:host=localhost;dbname=nennung', 'bullet64', 'xt19Zkl');
$sql = "SELECT * FROM id INTO OUTFILE 'mein.csv'";

echo $sql[1];

//DB close
$pdo = null;
?>
