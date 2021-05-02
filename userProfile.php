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
    echo "<p>Nimi: " . $row["userName"]."</p>", "<p>Sukunimi: " . $row["userSurname"]."</p>", "<p>Email: " . $row["userEmail"]."</p>", 
    "<p>Ikä: " . $row["userAge"]."</p>", "<p>Sukupuoli: " . $row["userGender"]."</p>";
  }
  //Jos tietoja ei ole tulostetaan "Ei profiili tietoja".
} else {
  echo "Ei profiili tietoja";
}
//katkaistaan database yhteys.
$conn->close();
?>
<div>
    <div>
        <input id="muokkaaTietoja" type="submit" onclick="location.href='editProfile.php'"; value="Muokkaa tietoja">
    </div>
    <div>
        <input id="vaihdaSalasana" type="submit" onclick="location.href='editPassword.php'"; value="Vaihda salasana">
    </div>
    <div>
        <input id="poistaProfiili" type="submit" onclick="location.href='removeProfile.php'"; value="Poista profiili">
    </div>
</div>

</body>
<?php include("includes/ifooter.php");?>