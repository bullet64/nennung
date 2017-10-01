<?php
//DB-Aufruf
$pdo = new PDO('mysql:host=localhost;dbname=nennung', 'bullet64', 'xt19Zkl');

$sql = "SELECT * FROM id";
$sql1 = mysql_query($sql);

while ($row=mysql_fetch_assoc(sql1)){
  echo "$row[id],$row[vorname],$row[nachname]<br>\n;



//DB close
$pdo = null;
?>
