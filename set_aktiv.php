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
     
            	
      echo "Veranstaltung: "   . htmlspecialchars($_POST["veranstaltung"]) . "<br>";
      echo "Aktiv: "           . htmlspecialchars($_POST["aktiv"]) . "<br>";     
   
	$statement = $pdo->prepare("UPDATE veranstaltungen SET aktiv = ? WHERE veranstaltung = ?");
      	$statement->execute(array($_POST["aktiv"], $_POST["veranstaltung"]));
	
		
	$pdo = null;
	
	
	?>

</p>
</body>
</html>
