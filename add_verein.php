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
      
            	
      echo "Verein: "           . htmlspecialchars($_POST["verein"]) . "<br>";
      
   
	$statement = $pdo->prepare("INSERT INTO vereine (verein) VALUES (?)");
      	$statement->execute(array($_POST["verein"]));
	
		
	$pdo = null;
	
	
	?>

</p>
</body>
</html>
