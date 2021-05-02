<?php include("includes/iheader.php");?>
<?php include("includes/burgermenu.php");?>
<?php
//M��ritet��n nykeisen k�ytt�j�n email, etunimi ja ID asd1, asd2 ja asd3 arvoiksi.
$asd1=$_SESSION['suserEmail'];
$asd2=$_SESSION['suserName'];
$asd3=$_SESSION['suserID'];
?>
<body>
<article>
 <?php
//Luodaan yhteys databaseen.
$conn = mysqli_connect('mysql.metropolia.fi', 'miikkast', 'Miikkantoivonen', 'miikkast');
//Name of the character set
$res = mysqli_set_charset($conn, "utf8");
//Tarkastetaan yhteys.
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

//Haetaan tiedot k�ytt�j�lt�, jolla on sama ID kuin m��ritetty ID (asd3)
$sql = "SELECT userID, userName, userSurname, userEmail, userAge, userGender FROM revibe_user WHERE userID = '$asd3'";
$result = $conn->query($sql);
//Tarkistetaan onko tietoja enemm�n kuin 0 ja tulostetaan ne.
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo "<p>Nimi: " . $row["userName"]."</p>", "<p>Sukunimi: " . $row["userSurname"]."</p>", "<p>Sähköposti: " . $row["userEmail"]."</p>", 
    "<p>Ika: " . $row["userAge"]."</p>", "<p>Sukupuoli: " . $row["userGender"]."</p>";
  }
  //Jos tietoja ei ole tulostetaan "Ei profiili tietoja".
} else {
  echo "Ei profiilitietoja";
}
//katkaistaan database yhteys.
$conn->close();
?>
</article>
<article>
    <div>
        <input id="muokkaaTietoja" type="submit" onclick="location.href='editProfile.php'"; value="Muokkaa tietoja">
    </div>
    <div>
        <input id="vaihdaSalasana" type="submit" onclick="location.href='editPassword.php'"; value="Vaihda salasana">
    </div>
    <div>
        <input id="poistaProfiili" type="submit" onclick="location.href='removeProfile.php'"; value="Poista profiili">
    </div>
</article>
<?php include("includes/ifooter.php");?>
</body>