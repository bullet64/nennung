<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <title>Antwort vom Webserver</title>
</head>
	
<body>
	<?php include ("connect.php");?>
	<p>
   <?php
     
            	
      echo "Veranstaltung: "           . htmlspecialchars($_POST["veranstaltung"]) . "<br>";
      echo "Datum: "                   . htmlspecialchars($_POST["datum"]) . "<br>";
      echo "Max. Teilnehmer: "         . htmlspecialchars($_POST["teilnehmer_max"]) . "<br>";
   
	$statement = $pdo->prepare("INSERT INTO veranstaltungen (veranstaltung, datum, teilnehmer_max) VALUES (?, ?, ?)");
      	$statement->execute(array($_POST["veranstaltung"],$_POST["datum"]$_POST["teilnehmer_max"]));
	
		
	$pdo = null;
	
	
	?>

</p>
</body>
</html>
