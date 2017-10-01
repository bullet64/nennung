<?php
//DB-Aufruf
$pdo = new PDO('mysql:host=localhost;dbname=nennung', 'bullet64', 'xt19Zkl');
$sql = "SELECT * FROM id";

echo $sql[1];
echo $sql[2];
echo $sql[3];
echo $sql[4];
echo $sql[5];
echo $sql[6];


//DB close
$pdo = null;
?>
