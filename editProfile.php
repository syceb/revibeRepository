<?php include("includes/iheader.php");?>
<?php include("includes/burgermenu.php");?>
<?php include("forms/feditProfile.php"); 
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

//Odotetaan napin painallusta
if(isset($_POST['changeInfo']))
 {
 //Määritetään tiedot
    $fname=$_POST['givenName'];
    $lname=$_POST['givenSurname'];
    $email=$_POST['givenEmail'];
    $age=$_POST['givenAge'];
    $gender=$_POST['givenGender'];
//Haetaan käyttäjän tiedot
    $select= "SELECT userID, userName, userSurname, userEmail, userAge, userGender FROM revibe_user WHERE userID = '$asd3'";
    $sql = mysqli_query($conn,$select);
    $row = mysqli_fetch_assoc($sql);
    $res= $row['userID'];
    if($res === $asd3)
    {
//Päivitetään käyttäjän tiedot mikäli käyttäjän ID täsmää määritettyyn ID($asd3)   
       $update = "UPDATE revibe_user SET userName='$fname', userSurname='$lname', userEmail='$email', userAge='$age', userGender='$gender' WHERE userID = '$asd3'";
       $sql2=mysqli_query($conn,$update);
if($sql2)
       { 
           /*Successful*/
           echo "Tietojen päivitys onnistui";
       }
       else
       {
           /*sorry your profile is not update*/
           echo "Tietojen päivitys epäonnistui";

       }
    }
    else
    {
        /*sorry your id is not match*/
        echo "Virhe";
    }
 }
?>
<?php include("includes/ifooter.php");?>