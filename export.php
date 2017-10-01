<?php
// Array erzeugen
$sqlabfrage = array();

//DB-Aufruf
$pdo = new PDO('mysql:host=localhost;dbname=nennung', 'bullet64', 'xt19Zkl');
$sql = "SELECT * FROM id";

while($row = mysql_fetch_array($qry))
{
  $sqlabfrage[] = $row['vorname];
  }
  
  echo $sqlabfrage[0];
  echo $sqlabfrage[34];

//DB close
$pdo = null;
?>
