<?php include("includes/iheader.php");?>
<?php include("includes/burgermenu.php");?>



<h1 id="pageTitle" >Unen seuranta</h1>

  <article>
<!--Alasvetovalikko nukahtamisajalle -->
    <label for="sleep">Nukahtamisaika:</label>
    <input type="time" id="sleep" name="sleep" min="09:00" max="18:00" required>
    <br>
<!--Alasvetovalikko heräämisajalle -->
    <label for="awake">Heräämisaika:</label>
    <input type="time" id="awake" name="awake" min="00:00" max="24:00" required>
<!--Tietojen tallentuminen -->
    <input type="submit" value="Tallenna" id = "submitTime" name="submitTime" onclick="msg()">

    <p> Tyypillisesti aikuisen ihmisen unentarve on noin 7–9 tuntia vuorokaudessa.</p>
    <p>Nukuttu aika: <br /> <span name="sleepTime" id="diff"></span>&nbsp; tuntia.</p>

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

<?php



if(isset($_POST['submitTime'])){
   try {
    $data3['commentSleep']=$_POST['sleepTime'];
    
    $data3['commentUserID']=$currentUserID;
    //var_dump($data2);
    $sql3="INSERT INTO revibe_sleepTime (commentSleep, commentUserID)
    VALUES (:commentSleep, :commentUserID);";
     $kysely3 = $DBH->prepare($sql3); 
     $kysely3->execute($data3);
   } catch(PDOException $e) {
    file_put_contents('log/DBErrors.txt', 'index.php: '.$e->getMessage()."\n", FILE_APPEND);
   }
  }
?>
<?php

include("includes/ifooter.php");?>