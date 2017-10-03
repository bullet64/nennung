  <!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <title>Antwort vom Webserver</title>
</head>
<body><p> 

<?php
      	$pdo = new PDO('mysql:host=localhost;dbname=nennung', 'bullet64', 'xt19Zkl');           	
      	$sql = "DELETE FROM veranstaltungen WHERE veranstaltung =  :filmID";
	$stmt = $pdo->prepare($sql);
	$stmt->bindParam(':filmID', $_POST['veranstaltung'], PDO::PARAM_INT);   
	$stmt->execute();
	$pdo = null;
	echo "Die ausgewählte Veranstaltung $_POST['vernastaltung'] wurde gelöscht";
	?>



   

</p>
</body>
</html>
