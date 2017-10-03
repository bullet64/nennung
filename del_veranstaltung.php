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
      $erg = $_POST["veranstaltung"];
	
   	$sql = "DELETE FROM veranstaltungen WHERE veranstaltung =  :filmID";
	$stmt = $pdo->prepare($sql);
	$stmt->bindParam(':filmID', $_POST['veranstaltung'], PDO::PARAM_INT);   
	$stmt->execute();
	
		
	$pdo = null;
	
	
	?>

</p>
</body>
</html>

//$db->query("DELETE FROM veranstaltungen WHERE id='1'");
