

<!DOCTYPE html>
<html lang="de">
<head>
<!-- Required meta tags -->
	<meta charset="utf-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

   
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

<?php include ("connect.php");?>

	
	
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
	
	<table>
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

<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>	
</body>

</html>

   

  


   
    
    
  
