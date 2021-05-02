<?php include("includes/iheader.php");?>


<img class="relax" src="images/relax.jpg" alt="lepo"/>
<img class="profile" src="images/profiili1.png" alt="profiililogo"/>
<?php include("forms/flogInUser.php"); ?>


<?php
//Lomakkeen submit painettu?
if(isset($_POST['submitUser'])){
  //***Tarkistetaan syötteet myös palvelimella
  if(!filter_var($_POST['givenEmail'], FILTER_VALIDATE_EMAIL)){
   $_SESSION['swarningInput']="Väärä sähköpostiosoite";
  }else{
    unset($_SESSION['swarningInput']); 
     try {
      //Tiedot kannasta, hakuehto
      $data['email'] = $_POST['givenEmail'];
      $STH = $DBH->prepare("SELECT userID, userName, userEmail, userPwd FROM revibe_user WHERE userEmail = :email;");
      $STH->execute($data);
      $STH->setFetchMode(PDO::FETCH_OBJ);
      $tulosOlio=$STH->fetch();
      //lomakkeelle annettu salasana + suola
      $givenPasswordAdded = $_POST['givenPassword'].$added;
 
       //Löytyikö email kannasta?
       if($tulosOlio!=NULL){
          //email löytyi
          //var_dump($tulosOlio);
          if(password_verify($givenPasswordAdded,$tulosOlio->userPwd)){
              $_SESSION['sloggedIn']="yes";
              $_SESSION['suserID']=$tulosOlio->userID;
              $_SESSION['suserName']=$tulosOlio->userName;
              $_SESSION['suserEmail']=$tulosOlio->userEmail;
              header("Location: index.php"); //Palataan pääsivulle kirjautuneena
          }else{
            $_SESSION['swarningInput']="Väärä salasana";
          }
      }else{
        $_SESSION['swarningInput']="Väärä sähköpostiosoite";
      }
     } catch(PDOException $e) {
        file_put_contents('log/DBErrors.txt', 'signInUser.php: '.$e->getMessage()."\n", FILE_APPEND);
        $_SESSION['swarningInput'] = 'Database ongelma';
    }
  }
}
?>



<?php
  //***Näytetäänkö lomakesyötteen aiheuttama varoitus?
if(isset($_SESSION['swarningInput'])){
  echo("<p class=\"warning\">Virhe kirjautumisessa: ". $_SESSION['swarningInput']."</p>");
}
?>


<?php include("includes/ifooter.php");?>
