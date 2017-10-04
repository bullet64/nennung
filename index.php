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


   

  

<?php
$pdo = new PDO('mysql:host=localhost;dbname=nennung', 'bullet64', 'xt19Zkl');
$stmt = $pdo->query("SELECT veranstaltung FROM veranstaltungen ORDER BY veranstaltung ASC");
//$stmt->execute();
?>
   
    <form id="idForm" method="post" accept-charset="UTF-8" action="nennung.php">
    
   <table>
     
      <tr>
           <td>Veranstaltung</td>
    <td><input type="text" name="veranstaltung" list="veranstaltungen" required>
               <datalist id="veranstaltungen">
                  <?php
                  while($result = $stmt->fetch(PDO::FETCH_COLUMN, 0)) { ?>
                 <option value="<?php echo htmlspecialchars($result) ?>" />
                  <?php
                    } 
                 $pdo = null; ?>

               
               </datalist>
               *</td>
      </tr>
   
   

   

  
      
      
   <caption>Meldeformular</caption>
    <tr>
           <td>Nachname</td>
           <td><input name="nachname" size="30" type="text" required> *</td>
    </tr>
   
    <tr>
           <td>Vorname</td>
           <td><input name="vorname" size="30" type="text" required> *</td>
     </tr>

       
    <tr>
           <td>Geburtstag</td>
           <td><input name="geburtstag" type="date" required> *</td>
    </tr>

    <tr>
           <td>DMC-Nr</td>
           <td><input pattern="^[0-9]{4}$" name="dmc" size="6" type="number" min="1" max="9999"></td>
    </tr>

    
      <?php
$pdo = new PDO('mysql:host=localhost;dbname=nennung', 'bullet64', 'xt19Zkl');
$stmt = $pdo->query("SELECT verein,bundesland FROM vereine ORDER BY verein, bundesland");
//$stmt->execute();
?>
   
    
    
   
     
      <tr>
           <td>Verein</td>
    <td><input type="text" name="verein" list="vereine" required>
               <datalist id="vereine">
                  <?php
                  while($result = $stmt->fetch(PDO::FETCH_COLUMN, 0)) { ?>
                 <option value="<?php echo htmlspecialchars($result) ?>" />
                  <?php
                    } 
                 $pdo = null; ?>

               
               </datalist>
               *</td>
      </tr>
      
      
      
      

   <tr>
     <td>Transponder ID Nr.1</td>
     <td><input pattern="^[0-9]{7}$" name="transponder_id1" size="8" type="number" min="1" max="9999999" required> *</td>
    </tr> 
       
       
    <tr>
       <td>Car ID Nr.1</td>
       <td><input pattern="^[0-9]{1}$" name="car_id1" size="6" type="number" min="0" max="9" value="0"> </td>
    </tr>
    
     <tr>
     <td>Transponder ID Nr.2</td>
     <td><input pattern="^[0-9]{7}$" name="transponder_id2" size="8" type="number" min="1" max="9999999" required> *</td>
     </tr>
       
       
    <tr>
       <td>Car ID Nr.2</td>
       <td><input pattern="^[0-9]{1}$" name="car_id2" size="6" type="number" min="0" max="9" value="0"> </td>
    </tr>
      
    <tr>
       <td>Klasse</td>
       <td><input type="text" name="klasse" list="klassen" required>
         <datalist id="klassen">
         <option value="OR8 Hobby" />
         <option value="OR8 Top" />
         </datalist>
      *</td>
   </tr>

   <tr>
       <td>EMail</td>
       <td colspan="3"><input name="email" size="30" type="email" required> *</td>
  </tr>

  <tr>
      <td>&nbsp;</td>
      <td colspan="3"><input type="submit" value="Absenden">
      <input type="reset" value="Löschen">
   </tr>

   <tr>
      <td colspan="4">Pflichtfelder mit *, Name, Vorname und EMail müssen ausgefüllt werden<br>
      Geburtstag, Verein und Klasse müssen richtig gewählt werden</td>
   </tr>
 </table>

 </form> 
</body>
</html>
