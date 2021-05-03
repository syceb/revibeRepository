<?php include("includes/iheader.php");?>


<!-- Tarkistetaan onko käyttäjä kirjautunut sisääm -->
<?php
  if(!isset($_SESSION['sloggedIn'])){
   
?>

  
    <img class="relax" src="images/relax.jpg" alt="lepo"/>
    <h1 class="welcome">Tervetuloa!</h1>
<?php
  }else{
  //Lomake päiväkirjamerkinnällee
  include("includes/header.php");
  include("forms/frecovery.php");
  include("includes/ifooter.php");
  }?>



<?php include("includes/inavIndex.php");?>

