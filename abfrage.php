
<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <title>10. NRW-Cup 2018, Anmeldung</title>
   <style>
      body    {font-family:Verdana; font-size:11pt; background-color:#f0f0f0; max-width:75em; margin: 0 auto}
      td      {font-family:Verdana; font-size:11pt; background-color:#d0d0d0; text-align:left; padding:4px}
      table   {width:50%; text-align:center; margin-left:auto; margin-right:auto}

      nav li {
        display: inline;
      }
      @media screen and (max-width: 60em) {
        nav li {
          display: block;
          width: 50%;
        }
      }

      @media only screen and (max-width : 30em) {
        nav li {
          width: 100%;
        }

   </style>
</head>

<body>

<nav>
   <ul>
      <li><a href="http://192.168.3.243/nennung/nennung.htm">Home</a></li>
      <li><a href="http://192.168.3.243/Nennung/abfrage.php">Abfrage</a></li>
      <li><a href="#">Seite 3</a></li>
      <li><a href="#">Seite 4</a></li>
  </ul>
</nav>



<?php
$pdo = new PDO('mysql:host=localhost;dbname=nennung', 'bullet64', 'xt19Zkl');

$sql = "SELECT nachname, vorname, geburtstag FROM id";
foreach ($pdo->query($sql) as $row) {
   //Geburtstags zerlegen! Result = 28.08.1964 Input = 2017-09-27
	//$_POST["geburtstag"] Geburtsdatum (2017-09-27
			$datum = $row['geburtstag']; // Geburtsdatum
			$array = explode("-",$datum); //Datum zerlegen (2013-08-22)
			$erg = $array[2].'.'.$array[1].'.'.$array[0];
			
      
   echo $row['nachname'].", ".$row['vorname'].", ".$erg." <br />";
}
	
	
?>

	
	
<table>
  <tbody>
    <?php foreach ($pdo->query($sql) as $row) : ?>
    <tr>
       <td><?=$row['id']?></td>
       <td><?=$row['nachname']?></td>
       <td><?=$row['vorname']?></td>
       <td><?=$row['geburtstag']?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
<table>


	
	
	
</body>

</html>

