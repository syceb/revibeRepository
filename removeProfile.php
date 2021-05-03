<?php include("includes/iheader.php");?>
<?php include("includes/burgermenu.php");?>

<?php include("forms/fremoveProfile.php"); 
// m��ritet��n ID 
$asd3=$_SESSION['suserID'];
?>

<?php
//Luodaan yhteys databaseen.
$conn = mysqli_connect('mysql.metropolia.fi', 'miikkast', 'Miikkantoivonen', 'miikkast');
//Name of the character set
$res = mysqli_set_charset($conn, "utf8");
//Tarkastetaan yhteys.
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

//Toimii kun deleteProfile nappi painettu
if(isset($_POST['deleteProfile']))
 {
 //Poistetaan käyttäjä, jonka id on sama kuin ylempänä määritetty ID
    $sql= "DELETE FROM revibe_user WHERE userID = '$asd3'";

//Jos käyttäjän ID ja määritetty ID on sama poistetaan profiilli
if ($conn->query($sql) === TRUE) {
  unset($_SESSION['sloggedIn']);
  header("Location: index.php");
} else {
//Error teksti, jos jostain syyst� poisto ei onnistu
  echo "Error deleting record: " . $conn->error;
}
//Katkaistaan yhteys databaseen
$conn->close();
 }
?>
<?php include("includes/ifooter.php");?>