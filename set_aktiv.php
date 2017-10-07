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
     
            	
      echo "Aktiv: "           . htmlspecialchars($_POST["veranstaltung"]) . "<br>";
      
   
	$statement = $pdo->prepare("INSERT INTO veranstaltungen (sktiv) VALUES (?)");
      	$statement->execute(array($_POST["aktiv"]));
	
		
	$pdo = null;
	
	
	?>

</p>
</body>
</html>
