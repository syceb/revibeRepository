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
  $n_password=mysqli_real_escape_string($conn,$n_password);
  $n_password=htmlentities($n_password);
  $c_password=$_POST['c_password'];
  $c_password=mysqli_real_escape_string($conn,$c_password);
  $c_password=htmlentities($c_password);

  $data['pwd'] = password_hash($_POST['n_password'].$added, PASSWORD_BCRYPT);

if($c_password === $n_password)
  {
    $sql="UPDATE revibe_user SET userPwd='$data' WHERE userID = '$asd3'";
     $res=mysqli_query($conn,$sql);
     
     if($res)
     {
         //Password Successfully Changed.
         header('location:userProfile.php');
     }
     else
     {
         //Sorry, Something went wrong, Please Try Again.
         header('location:index.php');
     }
  }
  else
  {
      //Password do not Match.
      header('location:sleepMonitoring.php');
}
}
?>
<?php include("includes/ifooter.php");?>