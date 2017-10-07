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
      echo "Bundesland: "       . htmlspecialchars($_POST["bundesland"]) . "<br>";	
      
   
	$statement = $pdo->prepare("INSERT INTO vereine (verein, bundesland) VALUES (?, ?)");
      	$statement->execute(array($_POST["verein"] . $_POST["verein"]));
	
		
	$pdo = null;
	
	
	?>

</p>
</body>
</html>
