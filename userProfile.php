<?php include("includes/iheader.php");?>
<?php include("includes/burgermenu.php");?>
<?php
//Määritetään nykeisen käyttäjän email ja etunimi asd1 ja asd2 arvoiksi.
$asd1=$_SESSION['suserEmail'];
$asd2=$_SESSION['suserName'];
$asd3=$_SESSION['suserID'];
?>
<body>
 <?php
//Luodaan yhteys databaseen.
$conn =mysqli_connect('mysql.metropolia.fi', 'miikkast', 'Miikkantoivonen', 'miikkast');
//Tarkastetaan yhteys.
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//Haetaan tiedot kaikilta joilla on sama etunimi ja email kuin asd1 ja asd2.
$sql = "SELECT userID, userName, userSurname, userEmail, userAge, userGender FROM revibe_user WHERE userID = '$asd3'";
$result = $conn->query($sql);
//Tarkistetaan onko tietoja enemmän kuin 0 ja tulostetaan ne.
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo "ID: " . $row["userID"]. "Nimi: " . $row["userName"]. " " . $row["userSurname"]. " - Email: " . $row["userEmail"]. 
    " - Ikä: " . $row["userAge"]. " - Sukupuoli: " . $row["userGender"]."<br>";
  }
  //Jos tietoja ei ole tulostetaan "Ei profiili tietoja".
} else {
  echo "Ei profiili tietoja";
}
//katkaistaan database yhteys.
$conn->close();
?>

<input class="testi" onclick="location.href='editProfile.php'"; value="Muokkaa tietoja">
<input class="testi1" onclick="location.href='editPassword.php'"; value="Vaihda salasana">
<input class="testi2" onclick="location.href='removeProfile.php'"; value="Poista profiili">

</body>
<?php include("includes/ifooter.php");?>