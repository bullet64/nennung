
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="stylesheet.css">
	<meta charset="utf-8">
   <title>10. NRW-Cup 2018, Anmeldung</title>
   
</head>

<body>

<nav>
   <ul>
      <li><a href="http://192.168.3.243/nennung/nennung.htm">Home</a></li>
   </ul>
</nav>



<?php
$pdo = new PDO('mysql:host=localhost;dbname=nennung', 'bullet64', 'xt19Zkl');
$sql = "SELECT * FROM id";
?>
	
<table>
<caption>Teilnehmerliste</caption>
  <tbody>
	  <tr>
		  <th>ID</th>
		  <th>Name</th>
		  <th>Vorname</th>
		  <th>Geburtstag</th>
		  <th>DMC</th>
		  <th>Verein</th>
		  <th>Transponder_ID</th>
		  <th>Klasse</th>
		  <th>EMail</th>
		  <th>Car_ID</th>
		  <th>Nenndatum</th>
		  		  	
	  </tr>
	  
    <?php foreach ($pdo->query($sql) as $row) : ?>
    <tr>
       <td><?=$row['id']?></td>
       <td><?=$row['nachname']?></td>
       <td><?=$row['vorname']?></td>

	<?php
	//Geburtstags zerlegen! Result = 28.08.1964 Input = 2017-09-27
	//$_POST["geburtstag"] Geburtsdatum (2017-09-27
			$datum = $row['geburtstag']; // Geburtsdatum
			$array = explode("-",$datum); //Datum zerlegen (2013-08-22)
			$erg = $array[2].'.'.$array[1].'.'.$array[0];
	    ?>
    	<td><?=$erg?></td>
	
	    
	<td><?=$row['dmc']?></td>
	<td><?=$row['verein']?></td>
	<td><?=$row['transponder_id']?></td>
	<td><?=$row['klasse']?></td>
	<td><?=$row['email']?></td>
	<td><?=$row['car_id']?></td>
	    
	    
	 <?php
	//Meldedatum zerlegen! Input = 2017-09-30 21:18:46.735059
	
			$m_date = $row['meldedatum']; // Meldedatum
			$date = substr($m_date, 0, -16);
			$teile = explode("-", $date); //Datum zerlegen (2013-08-22)
			$erg_datum = $teile[2].'.'.$teile[1].'.'.$teile[0];
			$uhrzeit = substr($m_date, 11, -7);
			$ergx = $erg_datum, $uhrzeit;
		
	    ?>   
	<td><?=$ergx?></td>
	    
	  </tr>
    <?php endforeach;
	  
// Die Verbindung wie folgt schließen
$pdo = null;	?>  
  </tbody>

<table>
	
</body>

</html>

