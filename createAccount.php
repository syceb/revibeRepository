<?php include("includes/iheader.php");?>


<?php include("forms/fcreateAccount.php"); ?>


<?php
//Lomakkeen submit painettu???
if(isset($_POST['submitUser'])){
  //***Tarkistetaan syötteet myös palvelimella
  if(strlen($_POST['givenName'])<2){
   $_SESSION['swarningInput']="Liian lyhyt etunimi";
  }else if(strlen($_POST['givenSurname'])<2){
    $_SESSION['swarningInput']="Liian lyhyt sukunimi";
  }else if(!filter_var($_POST['givenEmail'], FILTER_VALIDATE_EMAIL)){
   $_SESSION['swarningInput']="Sähköposti kirjoitettu väärin";
  }else if(strlen($_POST['givenPassword'])<4){
   $_SESSION['swarningInput']="Liian lyhyt salasana";
  }else if($_POST['givenPassword']!= $_POST['givenPasswordVerify']){
   $_SESSION['swarningInput']="Salasanat eivät täsmää";
  }else{
   unset($_SESSION['swarningInput']);
 
  //***Tiedot sessioon - annettu oikeanlaisena
   $_SESSION['sloggedIn']="yes";
   $_SESSION['suserName']=$_POST['givenName'];
   $_SESSION['suserEmail']= $_POST['givenEmail'];
  
  //Tiedot kantaan
   $data['name'] = $_POST['givenName'];
   $data['surname'] = $_POST['givenSurname'];
   $data['email'] = $_POST['givenEmail'];
   $data['age'] = $_POST['givenAge'];
   $data['gender'] = $_POST['givenGender'];
   
  //suolataan annettua salasanaa
   $data['pwd'] = password_hash($_POST['givenPassword'].$added, PASSWORD_BCRYPT);
   try {
    //***Email ei saa olla käytetty aiemmin
    $sql = "SELECT COUNT(*) FROM revibe_user where userEmail =  " . "'".$_POST['givenEmail']."'"  ;
    $kysely=$DBH->prepare($sql);
    $kysely->execute();				
    $tulos=$kysely->fetch();
    if($tulos[0] == 0){ //email ei ole käytössä
     $STH = $DBH->prepare("INSERT INTO revibe_user (userName, userSurname, userEmail, userAge, userGender, userPwd) VALUES (:name, :surname, :email, :age, :gender, :pwd);");
     $STH->execute($data);
     header("Location: index.php"); //Palataan pääsivulle kirjautuneena
    }else{
      $_SESSION['swarningInput']="Email is reserved";
    }
   } catch(PDOException $e) {
    file_put_contents('log/DBErrors.txt', 'signInUser.php: '.$e->getMessage()."\n", FILE_APPEND);
    $_SESSION['swarningInput'] = '';
    
   }
  }
}
?>



<?php
  //***Näytetäänkö lomakesyötteen aiheuttama varoitus?
if(isset($_SESSION['swarningInput'])){
  echo("<p class=\"warning\">Virhe käyttäjätiedoissa: ". $_SESSION['swarningInput']."</p>");
}
?>

<br>
<br>
<?php include("includes/ifooter.php");?>