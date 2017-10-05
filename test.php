<!DOCTYPE html>
<html>
<head>
   <link rel="stylesheet" href="stylesheet2.css">
   <meta charset="utf-8">
   <title>10. NRW-Cup 2018, Anmeldung BETA v0.1</title>
   
   
</head>

<nav>
   <ul>
      <li><a href="http://192.168.3.243/nennung/index.php">Home</a></li>
      <li><a href="http://192.168.3.243/nennung/abfrage.php">Teilnehmerliste</a></li>
      <li><a href="http://192.168.3.243/nennung/abfrage_h.php">Klasse Hobby</a></li>
      <li><a href="http://192.168.3.243/nennung/abfrage_t.php">Klasse Top</a></li>
       <li><a href="http://192.168.3.243/nennung/admin.php">Admin</a></li>
       <li><a href="http://192.168.3.243/nennung/export.php">RCM Export</a></li>
          
              
  </ul>
</nav>

<body>
   <p style="text-align:center">
   <b>Nennsytem für RC-Car Rennen</b>
   </p>

   <p style="text-align:center">Die Startgebühr ist <b>VOR</b> dem Wettkampftag zu entrichten.</br>
    Dazu bitte die Ausschreibung des jeweiligen Vereines beachten!</p>


   

  


   
    <form id="idForm" method="post" accept-charset="UTF-8" action="nennung.php">
    
   <table>
     
      
   
   <?php
$pdo = new PDO('mysql:host=localhost;dbname=nennung', 'bullet64', 'xt19Zkl');
$stmt = $pdo->query("SELECT veranstaltung FROM veranstaltungen ORDER BY veranstaltung ASC");
//$stmt->execute();
?>
      
      <tr>
       <td>   
       <form action="nennung.php">
          <label>Land
        <td><select name="land">
          <option>DE</option>
          <option>NL</option>
           <option>BE</option></td>
        </select>
          </label>
    </form>
       </td>
    </tr> 
      
      <tr>
      <td>&nbsp;</td>
      <td colspan="3"><input type="submit" value="Absenden">
      <input type="reset" value="Löschen">
   </tr>
     
     </body>
