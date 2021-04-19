<?php include("includes/header.php");?>

<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
<link rel="stylesheet" href="css/projekti.css">

</head>
<style>

article {
  background: rgba(180, 148, 202, 0.3);
  box-shadow:  0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  border-radius: 25px;
  padding: 20px;
  margin: 0 30px 0 30px;
  font-size:20px;
}

.button1 {
  font-family: 'Poppins';
  font-size:18px;
  background-color:#af99be;
  color:white;
  box-shadow:  0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  border-radius: 25px;
  border:none;
  padding: 15px 20px;
  margin: auto;
  text-align: center;
  cursor: pointer;
}
.image {
padding: 20px;
width:150px
}
input {
    margin-left:10px;
}

</style>

 

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