<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <title>Antwort vom Webserver</title>
</head>
<body><p>
   <?php
      $pdo = new PDO('mysql:host=localhost;dbname=nennung', 'bullet64', 'xt19Zkl');
            	
      echo "Veranstaltung: "           . htmlspecialchars($_POST["veranstaltung"]) . "<br>";
      
   
	$statement = $pdo->prepare("INSERT INTO vereine (veranstaltung) VALUES (?)");
      	$statement->execute(array($_POST["veranstaltung"]));
	
		
	$pdo = null;
	
	
	?>

</p>
</body>
</html>
