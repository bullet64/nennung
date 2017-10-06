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
      	<li><a href="http://192.168.3.243/nennung/index.php">Home</a></li>
	<li><a href="http://192.168.3.243/nennung/abfrage.php">Teilnehmerliste</a></li>
      	<li><a href="http://192.168.3.243/nennung/abfrage_h.php">Klasse Hobby</a></li>
      	<li><a href="http://192.168.3.243/nennung/abfrage_t.php">Klasse Top</a></li>
   </ul>
</nav>



<?php include ("connect.php");
$sql = "SELECT * FROM nennungen WHERE klasse = 'OR8 Top'";
?>
	
<table>
<caption>Teilnehmerliste Top</caption>
  <tbody>
	  <tr>
		 <th>ID</th>
                  <th>Nachname</th>
                  <th>Vorname</th>
                  <th>Geburtstag</th>
                  <th>DMC</th>
                  <th>Verein</th>
                  <th>Transponder_ID1</th>
                  <th>Car_ID1</th>
                  <th>Transponder ID2</th>
                  <th>Car_ID2</th>
                  <th>Klasse</th>
                  <th>EMail</th>
                  <th>Veranstaltung</th>
                  <th>Land</th>           
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
        <td><?=$row['transponder_id1']?></td>
        <td><?=$row['car_id1']?></td>
        <td><?=$row['transponder_id2']?></td>
        <td><?=$row['car_id2']?></td>
        <td><?=$row['klasse']?></td>
        <td><?=$row['email']?></td>
        <td><?=$row['veranstaltung']?></td>
        <td><?=$row['land']?></td>

	    
	    <?php
	//Meldedatum zerlegen! Input = 2017-09-30 21:18:46.735059
	
			$m_date = $row['meldedatum']; // Meldedatum
			$date = substr($m_date, -19, 10);
			$teile = explode("-", $date); //Datum zerlegen (2013-08-22)
			$erg_datum = $teile[2].'.'.$teile[1].'.'.$teile[0];
			$uhrzeit = substr($m_date, -8, 8);
			$ergx = $erg_datum . " " . $uhrzeit;
		
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
