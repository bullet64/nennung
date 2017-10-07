<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <title>Antwort vom Webserver</title>
</head>
	<?php include ("connect.php");?>
<body><p>
   <?php
     
            	
      echo "Veranstaltung: "           . htmlspecialchars($_POST["veranstaltung"]) . "<br>";
      
   
	$statement = $pdo->prepare("INSERT INTO veranstaltungen (veranstaltung) VALUES (?)");
      	$statement->execute(array($_POST["veranstaltung"]));
	
		
	$pdo = null;
	
	
	?>

</p>
</body>
</html>
