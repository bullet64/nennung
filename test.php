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
  <form id="idForm" method="post" accept-charset="UTF-8" action="nennung.php">
    
   <table>
     
<?php
$pdo = new PDO('mysql:host=localhost;dbname=nennung', 'bullet64', 'xt19Zkl');
$stmt = $pdo->query("SELECT verein,bundesland FROM vereine ORDER BY verein ASC");
//$stmt->execute();
?>

      
 <tr>
       <td>   
       <form action="nennung.php">
          <label>Verein
        <td><select name="verein">
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
   
   
      
      <tr>
       <td>   
       <form action="nennung.php">
          <label>Land
        <td><select name="land">
           <option></option>
          <option>DE</option>
          <option>NL</option>
           <option>BE</option></td>
        </select>
          </label>
   
       </td>
    </tr> 
      
   <?php
$pdo = new PDO('mysql:host=localhost;dbname=nennung', 'bullet64', 'xt19Zkl');
$stmt = $pdo->query("SELECT veranstaltung FROM veranstaltungen ORDER BY veranstaltung ASC");
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
       
      
      
      
      
      <tr>
      <td>&nbsp;</td>
      <td colspan="3"><input type="submit" value="Absenden">
      <input type="reset" value="Löschen">
   </tr>
      </form>
     </body>

   
   
