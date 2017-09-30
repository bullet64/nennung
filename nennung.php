<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <title>Antwort vom Webserver</title>
</head>
<body><p>
   <?php

      $pdo = new PDO('mysql:host=localhost;dbname=nennung', 'bullet64', 'xt19Zkl');

      echo "Nachname: "           . $_POST["nachname"] . "<br>";
      echo "Vorname: "            . $_POST["vorname"] . "<br>";
      echo "Geburtstag: "         . $_POST["geburtstag"] . "<br>";
      echo "DMC-Nr.: "            . $_POST["dmc"] . "<br>";
      echo "Verein: "             . $_POST["verein"] . "<br>";
      echo "Transponder-ID: "     . $_POST["transponder_id"] . "<br>";
      echo "CarID: "              . $_POST["car_id"] . "<br>";
      echo "Klasse: "             . $_POST["klasse"] . "<br>";
      echo "E-Mail: "             . $_POST["email"] . "<br>";
   
	$statement = $pdo->prepare("INSERT INTO id (nachname, vorname, geburtstag, dmc, verein, transponder_id, klasse, email, car_id, meldedatum) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
      	$statement->execute(array($_POST["nachname"], $_POST["vorname"], $_POST["geburtstag"], $_POST["dmc"], $_POST["verein"], $_POST["transponder_id"], $_POST["klasse"], $_POST["email"], $_POST["car_id"], $_POST["meldedatum"));
	
	$pdo = null;

   ?>

</p>
</body>
</html>
