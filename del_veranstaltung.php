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
      
   //$sql="SELECT id FROM veranstaltungen WHERE veranstaltung= 'veranstaltung'];
   //echo $sql;
	//$statement = $pdo->prepare("INSERT INTO veranstaltungen (veranstaltung) VALUES (?)");
   //   	$statement->execute(array($_POST["veranstaltung"]));
	
		
	$pdo = null;
	
	
	?>

</p>
</body>
</html>

//$db->query("DELETE FROM veranstaltungen WHERE id='1'");
