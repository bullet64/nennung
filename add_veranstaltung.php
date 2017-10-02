<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <title>Antwort vom Webserver</title>
</head>
<body><p>
   <?php
      $pdo = new PDO('mysql:host=localhost;dbname=nennung', 'bullet64', 'xt19Zkl');
            	
      echo "Verein: "           . htmlspecialchars($_POST["verein"]) . "<br>";
      
   
	$statement = $pdo->prepare("INSERT INTO vereine (verein) VALUES (?)");
      	$statement->execute(array($_POST["verein"]));
	
		
	$pdo = null;
	
	
	?>

</p>
</body>
</html>
