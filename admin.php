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
   <b>Anmeldung zum 10. NRW-Cup am 14. Mai 2018 in Mönchengladbach :)</b>
   </p>

    <p style="text-align:center">Die Startgebühr wird am Wettkampftag entrichtet.
    Anmeldeschluss ist der 12. Mai 2018.</p>



   
    <form id="idForm" method="post" action="add_verein.php">
    
   <table>
   <caption>Neuen Verein eintragen</caption>
        
    <tr>
           <td>Verein</td>
           <td><input name="verein" size="30" type="text" required> *</td>
    </tr>
      
     <tr>
       <td>   
       <form action="add_verein.php">
          <label>Land
        <td><select name="bundesland">
          <option></option>
           <option>NRW</option>
          <option>Hessen</option>
           <option>Bayern</option></td>
        </select>
          </label>
   
       </td>
    </tr> 
 
      
      <tr>
      <td>&nbsp;</td>
      <td colspan="3"><input type="submit" value="Absenden">
      <input type="reset" value="Löschen">
   </tr>
   
 </table>

 </form> 

   <form id="idForm2" method="post" action="add_veranstaltung.php">
    
   <table>
   <caption>Neue Veranstaltung</caption>
        
    <tr>
           <td>Veranstaltung</td>
           <td><input name="veranstaltung" size="30" type="text" required> *</td>
    </tr>
      
       <tr>
           <td>Datum</td>
           <td><input name="datum" size="30" type="date" required> *</td>
    </tr>
      
       <tr>
           <td>Max. Teilnehmer</td>
           <td><input pattern="^[0-9]{3}$" name="teilnehmer_max" size="10" type="number" required> *</td>
    </tr>
      
       
      
      <tr>
      <td>&nbsp;</td>
      <td colspan="3"><input type="submit" value="Absenden">
      <input type="reset" value="Löschen">
   </tr>
   
 </table>

 </form> 
   
   
   </form> 

   <form id="idForm3" method="post" action="del_veranstaltung.php">
    
   <table>
   <caption>Lösche Veranstaltung</caption>
     
        
      
   <?php
$pdo = new PDO('mysql:host=localhost;dbname=nennung', 'bullet64', 'xt19Zkl');
$stmt = $pdo->query("SELECT veranstaltung FROM veranstaltungen ORDER BY veranstaltung ASC");
//$stmt->execute();
?>
   
    <form id="idForm" method="post" action="del_veranstaltung.php">
    
   <table>
     
      <tr>
           <td>Veranstaltung</td>
    <td><input type="text" name="veranstaltung" list="veranstaltungen" required>
               <datalist id="veranstaltungen">
                  <?php
                  while($result = $stmt->fetch(PDO::FETCH_COLUMN, 0)) { ?>
                 <option value="<?php echo $result ?>" />
                  <?php
                    } 
                 $pdo = null; ?>

               
               </datalist>
               *</td>
      </tr>
    
      
      <tr>
      <td>&nbsp;</td>
      <td colspan="3"><input type="submit" value="Absenden">
      <input type="reset" value="Löschen">
   </tr>
   
 </table>

 </form> 
   
       
      
      
      <form id="idForm" method="post" action="set_aktiv.php">
    
   <table>
   <caption>Flag Aktiv/Passiv setzen</caption>
      ?php
$pdo = new PDO('mysql:host=localhost;dbname=nennung', 'bullet64', 'xt19Zkl');
$stmt = $pdo->query("SELECT veranstaltung FROM veranstaltungen ORDER BY veranstaltung ASC");
//$stmt->execute();
?>
     
   
    
    
   <table>
     
      <tr>
           <td>Veranstaltung</td>
    <td><input type="text" name="veranstaltung" list="veranstaltungen" required>
               <datalist id="veranstaltungen">
                  <?php
                  while($result = $stmt->fetch(PDO::FETCH_COLUMN, 0)) { ?>
                 <option value="<?php echo $result ?>" />
                  <?php
                    } 
                 $pdo = null; ?>

               
               </datalist>
               *</td>
      </tr>
      
     
        
    <tr>
           <td>Aktiv/Passiv Flag (1/0)</td>
           <td><input pattern="^[0-1]{1}$" name="aktiv" size="2" type="number" min="0" max="1"></td>
    </tr>
      
      
      <tr>
      <td>&nbsp;</td>
      <td colspan="3"><input type="submit" value="Absenden">
      <input type="reset" value="Löschen">
   </tr>
   
 </table>

 </form> 
      
</body>
</html>
