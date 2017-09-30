<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <title>Antwort vom Webserver</title>
</head>
<body><p>
   <?php

      $pdo = new PDO('mysql:host=localhost;dbname=nennung', 'root', '@bulletproof');

      echo "Nachname: "           . $_POST["nachname"] . "<br>";
      echo "Vorname: "            . $_POST["vorname"] . "<br>";
      echo "Geburtstag: "         . $_POST["geburtstag"] . "<br>";
      echo "DMC-Nr.: "            . $_POST["dmc"] . "<br>";
      echo "Verein: "             . $_POST["verein"] . "<br>";
      echo "Transponder-ID: "     . $_POST["transponder_id"] . "<br>";
      echo "CarID: "              . $_POST["car_id"] . "<br>";
      echo "Klasse: "             . $_POST["klasse"] . "<br>";
      echo "E-Mail: "             . $_POST["email"] . "<br>";
   
      //Geburtstags zerlegen! Result = 28.08.1964 Input = 2017-09-27
		//$_POST["geburtstag"] Geburtsdatum (2017-09-27
			$datum = $_POST["geburtstag"]; // Geburtsdatum
			$array = explode("-",$datum); //Datum zerlegen (2013-08-22)
			$erg = $array[2].'.'.$array[1].'.'.$array[0];
			//Irgendwo kamen zwei führende Punkte her. (..28.08.1964) Mit trim werden die aus dem String entfernt!
			//$erg2 = trim($erg, ".");
			//$results_arr[] =  $erg2; // Geburtsdatum in deutsch ausgeben!
      echo "TEST: $erg";

      $statement = $pdo->prepare("INSERT INTO id (nachname, vorname, geburtstag) VALUES (?, ?, ?)");
      $statement->execute(array($_POST["nachname"], $_POST["vorname"], $_POST["geburtstag"]));

      $pdo = null;

   ?>

</p>
</body>
</html>
