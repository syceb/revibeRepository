<?php include("includes/iheader.php");?>
<?php include("includes/burgermenu.php");?>

<?php include("forms/feditPassword.php"); 
$asd3=$_SESSION['suserID'];
?>

<?php
//Luodaan yhteys databaseen.
$conn = new mysqli('mysql.metropolia.fi', 'miikkast', 'Miikkantoivonen', 'miikkast');
//Tarkastetaan yhteys.
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


if(isset($_POST['changePassword']))
{

    $n_password=$_POST['n_password'];
    $c_password=$_POST['c_password'];

    if(strlen($_POST['n_password'])<4){
    $_SESSION['swarningInput']="Liian lyhyt salasana";
    }else if($_POST['n_password']!= $_POST['c_password']){
    $_SESSION['swarningInput']="Salasanat eivät täsmää";
    }else{
    unset($_SESSION['swarningInput']);
    }
  $data = password_hash($_POST['n_password'].$added, PASSWORD_BCRYPT);
  $sql="UPDATE revibe_user SET userPwd='$data' WHERE userID = '$asd3'";
  $res=mysqli_query($conn,$sql);
  }
?>
<?php include("includes/ifooter.php");?>