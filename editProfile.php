<?php include("includes/iheader.php");?>
<?php include("includes/burgermenu.php");?>

<?php include("forms/feditProfile.php"); 
$asd3=$_SESSION['suserID'];
?>

<?php
//Luodaan yhteys databaseen.
$conn = new mysqli('mysql.metropolia.fi', 'miikkast', 'Miikkantoivonen', 'miikkast');
//Tarkastetaan yhteys.
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['changeInfo']))
 {
    $fname=$_POST['givenName'];
    $lname=$_POST['givenSurname'];
    $email=$_POST['givenEmail'];

    $select= "SELECT userID, userName, userSurname, userEmail, userAge FROM revibe_user WHERE userID = '$asd3'";
    $sql = mysqli_query($conn,$select);
    $row = mysqli_fetch_assoc($sql);
    $res= $row['userID'];
    if($res === $asd3)
    {
   
       $update = "UPDATE revibe_user SET userName='$fname', userSurname='$lname', userEmail='$email' WHERE userID = '$asd3'";
       $sql2=mysqli_query($conn,$update);
if($sql2)
       { 
           /*Successful*/
           header('location:userProfile.php');
       }
       else
       {
           /*sorry your profile is not update*/
           header('location:index.php');

       }
    }
    else
    {
        /*sorry your id is not match*/
        header('location:sleepMonitoring.php');
    }
 }
?>
<?php include("includes/ifooter.php");?>