<?php include("includes/iheader.php");?>
<?php include("includes/burgermenu.php");?>

<?php include("forms/fremoveProfile.php"); 
$asd3=$_SESSION['suserID'];
?>

<?php
//Luodaan yhteys databaseen.
$conn = new mysqli('mysql.metropolia.fi', 'miikkast', 'Miikkantoivonen', 'miikkast');
//Tarkastetaan yhteys.
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['deleteProfile']))
 {
    $sql= "DELETE FROM revibe_user WHERE userID = '$asd3'";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
  unset($_SESSION['sloggedIn']);
  header("Location: index.php");
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
 }
?>
<?php include("includes/ifooter.php");?>