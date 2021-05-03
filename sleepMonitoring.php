<?php include("includes/iheader.php");?>
<?php include("includes/burgermenu.php");?>

<br>

<h1 id="pageTitle" >Unen seuranta</h1>
  <article>
<!--Alasvetovalikko nukahtamisajalle -->
    <label for="sleep">Nukahtamisaika:</label>
    <input type="time" id="sleep" name="sleep" required>
    <br>
<!--Alasvetovalikko heräämisajalle -->
    <label for="awake">Heräämisaika:</label>
    <input type="time" id="awake" name="awake" required>

    <input type="submit" value="Tallenna" id = "submitTime" name="submitTime" onclick="msg()">

    <p> Tyypillisesti aikuisen ihmisen unentarve on noin 7–9 tuntia vuorokaudessa.</p>
    <p>Nukuttu aika: <br /> <span name="diff" id="diff"></span>&nbsp; tuntia.</p>

 </article>
 
 <script src="js/sleepTime.js"></script>
 



 <?php
 //kirjautuneen käyttäjän userID?
    $data1['email'] = $_SESSION['suserEmail'];
    //var_dump($data1);
    $sql1 = "SELECT userID FROM revibe_user where userEmail =  :email";
    $kysely1=$DBH->prepare($sql1);
    $kysely1->execute($data1);
    $tulos1=$kysely1->fetch();
    $currentUserID=$tulos1[0];
    ?>

<!-- Tiedot kantaan unenmäärästä (keskeneräinen) -->
<?php

if(isset($_POST['submitTime'])){
   try {
    $data['commentSleep']=$_POST['diff'];
    
    $data['commentUserID']=$currentUserID;
    //var_dump($data);
    $sql="INSERT INTO revibe_sleepTime (commentSleep, commentUserID)
    VALUES (:commentSleep, :commentUserID);";
     $kysely = $DBH->prepare($sql); 
     $kysely->execute($data);
   } catch(PDOException $e) {
    file_put_contents('log/DBErrors.txt', 'index.php: '.$e->getMessage()."\n", FILE_APPEND);
   }
  }
?>
<?php

include("includes/ifooter.php");?>