<?php include("includes/iheader.php");?>
<?php include("includes/burgermenu.php");?>
<?php include("forms/feditPassword.php"); 
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

//Toimii kun changePassword nappi painettu
if(isset($_POST['changePassword']))
{

    $n_password=$_POST['n_password'];
    $c_password=$_POST['c_password'];

    //katsotaan onko salasana tarpeeksi pitkä
    if(strlen($_POST['n_password'])<4){
    $_SESSION['swarningInput']="Liian lyhyt salasana";
    //Katsotaan täsmäävätkö Salasanat
    }else if($_POST['n_password']!= $_POST['c_password']){
    $_SESSION['swarningInput']="Salasanat eivÃ¤t tÃ¤smÃ¤Ã¤";
    }else{
    unset($_SESSION['swarningInput']);
    }
    //Salataan salasana ja tallennetaan tietokantaan
  $data = password_hash($_POST['n_password'].$added, PASSWORD_BCRYPT);
  $sql="UPDATE revibe_user SET userPwd='$data' WHERE userID = '$asd3'";
  $res=mysqli_query($conn,$sql);
  }
?>
<?php include("includes/ifooter.php");?>