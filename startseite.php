<!DOCTYPE html>
<html lang="de">
  <head>
    <link rel="stylesheet" href="stylesheet2.css">
   <meta charset="utf-8">
   <title>10. NRW-Cup 2018, Anmeldung BETA v0.1</title>
   
   
</head>

<nav>
   <ul>
      <li><a href="http://192.168.3.243/nennung/index.php">Home</a></li>
      <li><a href="http://192.168.3.243/nennung/abfrage.php">Teilnehmerliste</a></li>
      <li><a href="http://192.168.3.243/nennung/abfrage_h.php">Klasse Hobby</a></li>
      <li><a href="http://192.168.3.243/nennung/abfrage_t.php">Klasse Top</a></li>
       <li><a href="http://192.168.3.243/nennung/admin.php">Admin</a></li>
       <li><a href="http://192.168.3.243/nennung/export.php">RCM Export</a></li>
<body>
	

	
<main role="main">	
	
	

<?php include ("connect.php");?>

	
	
<body>
	
   
      
     <table align=center>
<caption>Aktive Veranstaltungen</caption>
  <tbody>
	  <tr>
		  <th>Datum</th>		  
		  <th>Veranstaltung</th>	  
		  <th>Teilnehmer max.</th>		  
		  <th>Meldungen</th>
	  </tr>
	  
    <?php
	  $sql = "SELECT * FROM veranstaltungen WHERE aktiv = 1 ORDER BY datum";

	  foreach ($pdo->query($sql) as $row) : ?>
    <tr id="row">
       
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
       <td><?=$row['teilnehmer']?></td>
    
	  	  
    <?php endforeach;?>
	  
	  
	  
	  

  </tbody>

</table>
	    <p></p>
	<table align=center>
<caption>Passive Veranstaltungen</caption>
  <tbody>
	  <tr>
		  <th>Datum</th>
		  <th>Veranstaltung</th>
		  <th>Teilnehmer max.</th>		  
		  <th>Meldungen</th>
	  </tr>
	  
    <?php 
	  $sql = "SELECT * FROM veranstaltungen WHERE  aktiv= 0 ORDER BY datum";

	  foreach ($pdo->query($sql) as $row) : ?>
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
       <td><?=$row['teilnehmer']?></td>
    </tr>
	  
    <?php endforeach;
	  
// Die Verbindung wie folgt schließen
$pdo = null;	?>  
  </tbody>

</table>
   
   
  


	
</main>  

	
</html>


   

  


   
    
    
  
