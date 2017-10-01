<?php

//DB-Aufruf
$pdo = new PDO('mysql:host=localhost;dbname=nennung', 'bullet64', 'xt19Zkl');

$sql = "SELECT * FROM id WHERE id = 1";
foreach ($pdo->query($sql) as $row) {
   echo $row['vorname']." ".$row['nachname']."<br />";
   echo "E-Mail: ".$row['email']."<br /><br />";
}

//DB close
$pdo = null;
?>
