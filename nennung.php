<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <title>Antwort vom Webserver</title>
</head>
<body><p>
   <?php

      $pdo = new PDO('mysql:host=localhost;dbname=nennung', 'bullet64', 'xt19Zkl');
      $meldedatum = date("d.m.Y, H:i"); 
      	
      echo "Nachname: "           . htmlspecialchars($_POST["nachname"]) . "<br>";
      echo "Vorname: "            . htmlspecialchars($_POST["vorname"] . "<br>";
      echo "Geburtstag: "         . htmlspecialchars($_POST["geburtstag"] . "<br>";
      echo "DMC-Nr.: "            . htmlspecialchars($_POST["dmc"] . "<br>";
      echo "Verein: "             . htmlspecialchars($_POST["verein"] . "<br>";
      echo "Transponder-ID: "     . htmlspecialchars($_POST["transponder_id"] . "<br>";
      echo "CarID: "              . htmlspecialchars($_POST["car_id"] . "<br>";
      echo "Klasse: "             . htmlspecialchars($_POST["klasse"] . "<br>";
      echo "E-Mail: "             . htmlspecialchars($_POST["email"] . "<br>";
      echo "Meldedatum: " . htmlspecialchars($meldedatum) . "<br>";
      echo "Veranstaltung: "      . htmlspecialchars($_POST["veranstaltung"] . "<br>";
   
	$statement = $pdo->prepare("INSERT INTO id (nachname, vorname, geburtstag, dmc, verein, transponder_id, klasse, email, car_id, veranstaltung) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
      	$statement->execute(array($_POST["nachname"], $_POST["vorname"], $_POST["geburtstag"], $_POST["dmc"], $_POST["verein"], $_POST["transponder_id"], $_POST["klasse"], $_POST["email"], $_POST["car_id"], $_POST["veranstaltung"]));
	
		
	$pdo = null;
	
	
	?>

</p>
</body>
</html>
