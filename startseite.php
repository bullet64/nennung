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


   

  


   
    
    
   <table>
     
      
   
   <?php
$pdo = new PDO('mysql:host=localhost;dbname=nennung', 'bullet64', 'xt19Zkl');
$stmt = $pdo->query("SELECT nennungen FROM nennug");
//$stmt->execute();
?>
      
      <tr>
       <td>   
       <form action="nennung.php">
          <label>Veranstaltung
        <td><select name="veranstaltung">
           <option></option>
            <?php
                  while($result = $stmt->fetch(PDO::FETCH_COLUMN, 0)) { ?>
                 <option><?php echo htmlspecialchars($result) ?></option>
                  <?php
                    } 
                 $pdo = null; ?>
                
             </select>
      </label>
    
       </td>
    </tr> 

   

  
      
      
   
  <?php
$pdo = new PDO('mysql:host=localhost;dbname=nennung', 'bullet64', 'xt19Zkl');
$stmt = $pdo->query("SELECT verein,bundesland FROM vereine ORDER BY verein ASC");
//$stmt->execute();
?>
      
     
 </table>

 </form> 
</body>
</html>
