<?php include("includes/iheader.php");?>



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
?>

<?php include("includes/inavIndex.php"); ?>
<?php include("includes/ifooter.php");?>