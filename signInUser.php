<?php include("includes/iheader.php");?>

<?php include("includes/inavSignIn.php"); ?>
<br/>
<?php include("forms/fsignInUser.php"); ?>


<?php
//***Tarkistetaan syötteet myös palvelimella
if(!strlen($_POST['givenName'])>=1){
   $_SESSION['swarningInput']="Liian lyhyt etunimi";
}else if(!filter_var($_POST['givenEmail'], FILTER_VALIDATE_EMAIL)){
  $_SESSION['swarningInput']="Illegal email";
}else if(!strlen($_POST['givenPassword'])>=4){
  $_SESSION['swarningInput']="Liian lyhyt salasana (min 4 merkkiä)";
}else if(!$_POST['givenPassword']== $_POST['givenPasswordVerify']){
  $_SESSION['swarningInput']="Salasanat eivät täsmää";
}else{
  unset($_SESSION['swarningInput']);
 
  //***Tiedot sessioon - annettu oikeanlaisena
  $_SESSION['sloggedIn']="yes";
  $_SESSION['suserName']=$_POST['givenName'];
  $_SESSION['semail']= $_POST['givenEmail'];
  
  //Tiedot kantaan
   $data['name'] = $_POST['givenName'];
   $data['surname'] = $_POST['givenSurname'];
   $data['email'] = $_POST['givenEmail'];
   $data['age'] = $_POST['givenAge'];
   $data['weight'] = $_POST['givenWeight'];
   $data['height'] = $_POST['givenHeight'];
   $data['gender'] = $_POST['givenGender'];
   
  $added='#â‚¬%&&/'; //suolataan annettua salasanaa
  $data['pwd'] = password_hash($_POST['givenPassword'].$added, PASSWORD_BCRYPT);
  try {
    //***Email ei saa olla käytetty aiemmin
    $sql = "SELECT COUNT(*) FROM wsk6_user where userEmail like  " . "'".$_POST['givenEmail']."'"  ;
    $kysely=$DBH->prepare($sql);
    $kysely->execute();				
    $tulos=$kysely->fetch();
    if($tulos[0] == 0){ //email ei ole käytössä
     $STH = $DBH->prepare("INSERT INTO wsk6_user (userName, userSurname, userEmail, userAge, userWeight, userHeight, userGender, userPwd) VALUES (:name, :surname, :email, :age, :weight, :height, :gender, :pwd);");
     $STH->execute($data);
     header("Location: index.php"); //Palataan pääsivulle kirjautuneena
    }else{
      $_SESSION['swarningInput']="Sähköposti on varattu";
    }
  } catch(PDOException $e) {
    file_put_contents('log/DBErrors.txt', 'signInUser.php: '.$e->getMessage()."\n", FILE_APPEND);
    $_SESSION['swarningInput'] = 'Database problem';
    
  }
}
?>

<?php
//***Luovutetaanko ja palataan takaisin pääsivulle alkutilanteeseen
//ilma  rekisteröintiä?
if(isset($_POST['submitBack'])){
  session_unset();
  session_destroy();
  header("Location: index.php");
}
?>

<?php
  //***Näytetäänkö lomakesyötteen aiheuttama varoitus?
if(isset($_SESSION['swarningInput'])){
  echo("<p class=\"warning\">ILLEGAL INPUT: ". $_SESSION['swarningInput']."</p>");
}
?>


<?php include("includes/ifooter.php");?>