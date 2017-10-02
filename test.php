<?php
$pdo = new PDO('mysql:host=localhost;dbname=nennung', 'bullet64', 'xt19Zkl');

$stmt = $pdo->query('SELECT veranstaltung FROM vereine');
foreach ($stmt as $row)
{
    echo $row['veranstaltung'] . "</p>";
}


?>
