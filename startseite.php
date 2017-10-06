<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <!--[if lte IE 8]>
		 <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
    <link rel="stylesheet" href="css/style.css">
	<title>SelfHTML Design 05 - Cloud Com</title>
</head>
<body>
	
	<header>
	<div id="kopf">
    <a id="logo" href="index.html"><img src="img/logo.png" title="zurück zur Startseite!" alt="Webseiten Name"  height="48" width="238"></a>
    <a id="navlink" title="zum Navigationsmenü" href="#mobilenavstart">☰</a>
    </div>
</header>
	
<main role="main">	
	
	

<?php include ("connect.php");?>

	
	
<body>
	
   <section id="teaser">
		<h1>Willkommen bei uns</h1>
    	<p>Tart toffee icing croissant lemon drops chocolate tiramisu</p>
    	<p>Pastry topping sugar plum topping tart</p>
    	<p>Wafer dragée croissant carrot</p>
    </section><!--teaser-->
    
    <article id="start">
    	<h2 id="news">Aktuelle News:<span> 12.04.2012  </span>Unsere neue Webseite geht online!</h2>
      
      
      <section class="vpn">
      	<h2>VPN</h2>
        
      </section>
      
     <table>
<caption>Aktive Veranstaltungen</caption>
  <tbody>
	  <tr>
		  <th>Datum</th>		  
		  <th>Veranstaltung</th>	  
		  <th>Teilnehmer max.</th>		  
		  <th>Meldungen</th>
	  </tr>
	  
    <?php
	  $sql = "SELECT * FROM veranstaltungen WHERE aktiv = 1 ORDER BY datum";

	  foreach ($pdo->query($sql) as $row) : ?>
    <tr id="row">
       
	<?php
        //Geburtstag zerlegen! Result = 28.08.1964 Input = 2017-09-27
        //$_POST["datum"] Geburtsdatum (2017-09-27
                        $datum = $row['datum']; // Geburtsdatum
                        $array = explode("-",$datum); //Datum zerlegen (2013-08-22)
                        $erg = $array[2].'.'.$array[1].'.'.$array[0];
            ?>
       <td><?=$erg?></td>
	  
	    <td><?=$row['veranstaltung']?></td>
	
	    <td><?=$row['teilnehmer_max']?></td>
       <td><?=$row['teilnehmer']?></td>
    
	  	  
    <?php endforeach;?>
	  
	  
	  
	  

  </tbody>

</table>
	
	<table>
<caption>Passive Veranstaltungen</caption>
  <tbody>
	  <tr>
		  <th>Datum</th>
		  <th>Veranstaltung</th>
		  <th>Teilnehmer max.</th>		  
		  <th>Meldungen</th>
	  </tr>
	  
    <?php 
	  $sql = "SELECT * FROM veranstaltungen WHERE  aktiv= 0 ORDER BY datum";

	  foreach ($pdo->query($sql) as $row) : ?>
    <tr>
       
	<?php
        //Geburtstag zerlegen! Result = 28.08.1964 Input = 2017-09-27
        //$_POST["datum"] Geburtsdatum (2017-09-27
                        $datum = $row['datum']; // Geburtsdatum
                        $array = explode("-",$datum); //Datum zerlegen (2013-08-22)
                        $erg = $array[2].'.'.$array[1].'.'.$array[0];
            ?>
       <td><?=$erg?></td>
	<td><?=$row['veranstaltung']?></td>
       <td><?=$row['teilnehmer_max']?></td>
       <td><?=$row['teilnehmer']?></td>
    </tr>
	  
    <?php endforeach;
	  
// Die Verbindung wie folgt schließen
$pdo = null;	?>  
  </tbody>

</table>
    </article><!--content-->
   
 
<nav id="navigation">
    <ul>
      	<li><a href="1-unterseite.html" id="mobilenavstart">Home</a></li>
        <li><a href="1-unterseite.html">Unternehmen</a></li>
        <li><a href="1-unterseite.html">Leitungen</a>
        	<ul>
				<li><a href="1-unterseite.html">Unterpunkt eins</a></li>
				<li><a href="1-unterseite.html">Unterpunkt zwei</a></li>
                <li><a href="1-unterseite.html">Unterpunkt drei</a></li>
            </ul></li>
        <li><a href="1-unterseite.html">VPN</a></li>
        <li><a href="1-unterseite.html">Mobilfunk</a>
        	<ul>
				<li><a href="1-unterseite.html">Unterpunkt eins</a></li>
				<li><a href="1-unterseite.html">Unterpunkt zwei</a></li>
          		<li><a href="1-unterseite.html">Unterpunkt drei</a></li>
          		<li><a href="1-unterseite.html">Unterpunkt vier</a></li>
        	</ul></li>
        <li><a href="2-kontakt.html">Kontakt</a></li>
    </ul>
</nav>
  


	
</main>  
<footer>
    <p>
    	Design: <a href="http://designenlassen.de/">designenlassen.de</a><br/>
   		technische Umsetzung: <a href="http://selfhtml.org">selfhtml.org</a>
    </p>    
</footer>  
	
</html>


   

  


   
    
    
  
