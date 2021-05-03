
<?php include("includes/iheader.php");?>
<?php include("includes/burgermenu.php");?>

<style>
input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc; 
  border-radius: 4px; 
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px; 
  resize: vertical 
}
.container {
  border-radius: 5px;
  padding: 20px;
}
* {
  box-sizing: border-box;
}
.row {
  display: flex;
}
.facebook {
    padding: 5px;
    margin-left: 40%;
}
.instagram {
    padding: 5px;
    margin-right: 44%;
}
</style>

  <h1 id="pageTitle">Yhteystiedot</h1>
<form method="post">
<article>



  <h1>Ota yhteyttä</h1>

<!--Ota yhteyttä - lomake. Viestit tallentuvat tietokantaan -->

    <input type="text" id="aihe" name="aihe" placeholder="Aihe">


    <textarea id="subject" name="subject" placeholder="Kirjoita viesti tähän..." style="height:200px"></textarea>

    <input id="submitMessage" type="submit" name="submitMessage" value="Lähetä viesti"/>

  
</div>
</article>
</form>
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

<!-- Tiedot kantaan -->
<?php
if(isset($_POST['submitMessage'])){
   try {
    $data['tekstiAihe']=$_POST['aihe'];
    $data['comment']=$_POST['subject'];
    $data['commentUserID']=$currentUserID;
    //var_dump($data);
    $sql="INSERT INTO revibe_contact (tekstiAihe, comment, commentUserID)
    VALUES (:tekstiAihe, :comment, :commentUserID);";
     $kysely = $DBH->prepare($sql); 
     $kysely->execute($data);
   } catch(PDOException $e) {
    file_put_contents('log/DBErrors.txt', 'index.php: '.$e->getMessage()."\n", FILE_APPEND);
   }
  }
?>
			

<div class ="contactInfo">

<p><b>Stressitönkatu 7<br>
    00150 Helsinki<br>
    045 123 1234<br>
    info@revibe.fi
    </b></p>
</div>
<!--Somekuvakkeet -->
<div class="row">
  <div class="facebook">
  <a href ="https://www.facebook.com/"><img src="images/facebook.png" name="submit" width="30px" height="30px" alt="submit"/> 
  </div>
  <div class="instagram">
  <a href ="https://www.instagram.com/"><img src="images/instagram.png" name="submit" width="30px" height="30px" alt="submit"/>
  </div>
</div>

<?php include("includes/ifooter.php");?>