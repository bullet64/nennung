<?php
// Array erzeugen
$namen = array();

//DB-Aufruf
$pdo = new PDO('mysql:host=localhost;dbname=nennung', 'bullet64', 'xt19Zkl');
$query = "SELECT * FROM id";

while($row = mysql_fetch_array($query))
{
  $namen[] = $row['vorname'];
  }
  
  echo $namen[0];
  echo $namen[34];

//DB close
$pdo = null;
?>
