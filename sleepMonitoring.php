<?php include("includes/header.php");?>

<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
<link rel="stylesheet" href="css/projekti.css">
</head>

 <h1>Unen seuranta</h1>

  <article>
  
    <label for="appt">Nukahtamisaika:</label>
    <input type="time" id="appt" name="appt" min="09:00" max="18:00" required>
    <br>
    <label for="appt">Heräämisaika:</label>
    <input type="time" id="appt" name="appt" min="00:00" max="24:00" required>

    <input type="button" value="Tallenna" onclick="msg()">

 </article>

</body>
</html>


<?php include("includes/ifooter.php");?>