<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <title>Antwort vom Webserver</title>
</head>
	
<nav>
   <ul>
      <li><a href="http://192.168.3.243/nennung/index.php">Home</a></li>
      <li><a href="http://192.168.3.243/nennung/abfrage.php">Teilnehmerliste</a></li>
      <li><a href="http://192.168.3.243/nennung/abfrage_h.php">Klasse Hobby</a></li>
      <li><a href="http://192.168.3.243/nennung/abfrage_t.php">Klasse Top</a></li>
       <li><a href="http://192.168.3.243/nennung/admin.php">Admin</a></li>
       <li><a href="http://192.168.3.243/nennung/export.php">RCM Export</a></li>
      <li><a href="http://192.168.3.243/nennung/startseite.php">Übersicht</a></li>
          
              
  </ul>
</nav>
	
<body><p>
   <?php
	
      error_reporting(E_ALL);

      $pdo = new PDO('mysql:host=localhost;dbname=nennung', 'bullet64', 'xt19Zkl');
      $meldedatum = date("d.m.Y, H:i"); 
      	
      echo "Nachname: "            . htmlspecialchars($_POST["nachname"]) . "<br>";
      echo "Vorname: "             . htmlspecialchars($_POST["vorname"]) . "<br>";
      echo "Geburtstag: "          . htmlspecialchars($_POST["geburtstag"]) . "<br>";
      echo "Land: "		   . htmlspecialchars($_POST['land']) . "<br>";		
      echo "DMC-Nr.: "             . htmlspecialchars($_POST["dmc"]) . "<br>";
      echo "Verein: "              . htmlspecialchars($_POST["verein"]) . "<br>";
      echo "Transponder-ID Nr.1: " . htmlspecialchars($_POST["transponder_id1"]) . "<br>";
      echo "CarID Nr.1: "          . htmlspecialchars($_POST["car_id1"]) . "<br>";
      echo "Transponder-ID Nr.2: " . htmlspecialchars($_POST["transponder_id2"]) . "<br>";
      echo "CarID Nr.2: "          . htmlspecialchars($_POST["car_id2"]) . "<br>";	
      echo "Klasse: "              . htmlspecialchars($_POST["klasse"]) . "<br>";
      echo "E-Mail: "              . htmlspecialchars($_POST["email"]) . "<br>";
      echo "Meldedatum: " 	   . htmlspecialchars($meldedatum) . "<br>";
      echo "Veranstaltung: "       . htmlspecialchars($_POST["veranstaltung"]) . "<br>";
   
	$statement = $pdo->prepare("INSERT INTO nennungen (vorname, nachname, geburtstag, dmc, verein, transponder_id1, car_id1, transponder_id2, car_id2, klasse, email, veranstaltung, land, meldedatum) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
      	$statement->execute(array($_POST["vorname"], $_POST["nachname"], $_POST["geburtstag"], $_POST["dmc"], $_POST["verein"], $_POST["transponder_id1"], $_POST["car_id1"], $_POST["transponder_id2"], $_POST["car_id2"], $_POST["klasse"], $_POST["email"], $_POST["veranstaltung"], $_POST["land"], $_POST["meldedatum"]));
	
	// Anmeldung hochzählen
	$statement = $pdo->prepare("UPDATE veranstaltungen SET teilnehmer = teilnehmer+1 WHERE veranstaltung = :id");
	$statement->execute(array('id' => $_POST["veranstaltung"]));
		
	$pdo = null;
	
	
	?>

</p>
</body>
</html>
