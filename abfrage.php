
<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <title>10. NRW-Cup 2018, Anmeldung</title>
   <style>
	  
	   main {
	background: white;
	border-color: #8a9da8;
	height: 700px;
	overflow: hidden;
}

table,
th,
td {
	border-collapse: collapse;
	padding: 0.3em 0.5em;
}

table {
	margin-left: 1em;
}

th,
caption {
	background-color: #666;
	color: #fff;
	border: 1px solid #666;
}

td {
	background-image: linear-gradient(#f9f9f9, #e3e3e3);
	border-left: 1px solid #666;
	border-right: 1px solid #666;
}

tfoot {
	border-bottom: 1px solid #666;
}

caption {
	font-size: 1.5em;
	border-radius: 0.5em 0.5em 0 0;
	padding: 0.5em 0 0 0
}
/* 3. und 4. Spalte rechtsbündig */

td:nth-of-type(3),
td:nth-of-type(4) {
	text-align: right;
}

	   
      nav li {
        display: inline;
      }
      @media screen and (max-width: 60em) {
        nav li {
          display: block;
          width: 50%;
        }
      }

      @media only screen and (max-width : 30em) {
        nav li {
          width: 100%;
        }

   </style>
</head>

<body>

<nav>
   <ul>
      <li><a href="http://192.168.3.243/nennung/nennung.htm">Home</a></li>
   </ul>
</nav>



<?php
$pdo = new PDO('mysql:host=localhost;dbname=nennung', 'bullet64', 'xt19Zkl');
$sql = "SELECT id, nachname, vorname, geburtstag FROM id";
?>
	
<table>
<caption>Teilnehmerliste</caption>
  <tbody>
	  
    <?php foreach ($pdo->query($sql) as $row) : ?>
    <tr>
       <td><?=$row['id']?></td>
       <td><?=$row['nachname']?></td>
       <td><?=$row['vorname']?></td>

	<?php
	//Geburtstags zerlegen! Result = 28.08.1964 Input = 2017-09-27
	//$_POST["geburtstag"] Geburtsdatum (2017-09-27
			$datum = $row['geburtstag']; // Geburtsdatum
			$array = explode("-",$datum); //Datum zerlegen (2013-08-22)
			$erg = $array[2].'.'.$array[1].'.'.$array[0];
	    ?>
       
	<td><?=$erg?></td>
	  </tr>
    <?php endforeach; ?>
  </tbody>
<table>
	
</body>

</html>

