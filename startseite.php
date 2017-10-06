<!DOCTYPE html>
<html>
<head>
   <link rel="stylesheet" href="stylesheet2.css">
   <meta charset="utf-8">
   <title>Startseite Nennsystem BETA v0.1</title>
   
   
</head>

<nav>
   <ul>
      <li><a href="http://192.168.3.243/nennung/index.php">Home</a></li>
      <li><a href="http://192.168.3.243/nennung/abfrage.php">Teilnehmerliste</a></li>
      <li><a href="http://192.168.3.243/nennung/abfrage_h.php">Klasse Hobby</a></li>
      <li><a href="http://192.168.3.243/nennung/abfrage_t.php">Klasse Top</a></li>
       <li><a href="http://192.168.3.243/nennung/admin.php">Admin</a></li>
       <li><a href="http://192.168.3.243/nennung/export.php">RCM Export</a></li>
          
              
  </ul>
</nav>

	<?php
$pdo = new PDO('mysql:host=localhost;dbname=nennung', 'bullet64', 'xt19Zkl');
$sql = "SELECT * FROM veranstaltungen ORDER BY datum";

//$stmt = $pdo->query("SELECT veranstaltung FROM veranstaltungen ORDER BY veranstaltung ASC");
//$stmt->execute();
?>

	
	
<body>
   <p style="text-align:center">
   <b>Nennsytem für RC-Car Rennen</b>
   </p>

   <p style="text-align:center">Die Startgebühr ist <b>VOR</b> dem Wettkampftag zu entrichten.</br>
    Dazu bitte die Ausschreibung des jeweiligen Vereines beachten!</p>

<table>
<caption>Aktive Veranstaltungen</caption>
  <tbody>
	  <tr>
		  <th>Datum</th>
		  <th>Veranstaltung</th>
		  <th>Teilnehmer max.</th>		  
		  <th>Meldungen</th>
	  </tr>
	  
    <?php foreach ($pdo->query($sql) as $row) : ?>
    <tr>
       
	<?php
        //Geburtstag zerlegen! Result = 28.08.1964 Input = 2017-09-27
        //$_POST["datum"] Geburtsdatum (2017-09-27
                        $datum = $row['datum']; // Geburtsdatum
                        $array = explode("-",$datum); //Datum zerlegen (2013-08-22)
                        $erg = $array[2].'.'.$array[1].'.'.$array[0];
            ?>
       <td><?=$erg?></td>
	<td><?=$row['veranstaltung']?></td>
       <td><?=$row['teilnehmer_max']?></td>
       
	<?php
$pdo1 = new PDO('mysql:host=localhost;dbname='nennung', 'bullet64', 'xt19Zkl');

$statement = $pdo1->prepare("SELECT COUNT(*) AS anzahl FROM nennungen");
$statement->execute();  
$row = $statement->fetch();
echo "Es wurden ".$row['anzahl']." User gefunden";
?>    
	    
	    
	    
	    
	    
	    <td><?=$row['vorname']?></td>
    </tr>
	  
    <?php endforeach;
	  
// Die Verbindung wie folgt schließen
$pdo = null;	?>  
  </tbody>

<table>
		
</body>

</html>

   

  


   
    
    
  
