<?php

//DB-Aufruf
$pdo = new PDO('mysql:host=localhost;dbname=nennung', 'bullet64', 'xt19Zkl');

$sql = "SELECT * FROM id";
foreach ($pdo->query($sql) as $row) {
   echo $row['vorname']." ".$row['nachname']."<br />";
   
}

//DB close
$pdo = null;
?>
