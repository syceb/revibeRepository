<?php include("includes/header.php");?>

<?php include("includes/inavIndex.php"); ?>

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
h1{
  font-size:20px;
  margin:0;
  
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

<h1>Stressin seuranta</h1>

<article>
<label for="appt">Mittaa syke</label>
<br>

  <label for="appt">Kuinka voit:</label>
  <br>
  <select id="gender" name="givenGender">
      <option value="Ei stressiä">Ei stressiä</option>
      <option value="Vähän stressiä">Vähän stressiä</option>
      <option value="Kohtalaisesti stressiä">Kohtalaisesti stressiä</option>
      <option value="Paljon stressiä">Paljon stressiä</option>
      <option value="En voi hyvin">En voi hyvin</option>
    </select>

    <p>
      <input id="tallenna" type="submit" name="submitFeeling" value="Tallenna"/>
   
  </p>

 
</article>


</body>

<?php
//Lomakkeen submit painettu???
if(isset($_POST['submitFeeling'])){}
?>

</html>

<?php include("includes/ifooter.php");?>