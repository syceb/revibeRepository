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
  text-align:center;
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
.button2 {
  font-family: 'Poppins';
  font-size:18px;
  background-color:#af99be;
  color:white;
  box-shadow:  0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  border-radius: 25px;
  border:none;
  padding: 10px;
  text-align: center;
  cursor: pointer;
  margin:auto;
}
.image {
padding: 20px;
width:150px
}
.helloUser {
  padding-left:50px;
  font-size:20px;
}


   
</style>

 

<div class="helloUser">
<?php echo("<p> Hei, ".$_SESSION['suserName']."!"); ?>
  </div>
  <article>
    <h1>Stressin seuranta</h1>
     <img class= "image" src="images/hrv.png" alt="hrv">
     <a href="stressMonitoring.php"><button class="button1">Suorita mittaus</button>
  </article>

  <article>
    <h1>Unen seuranta</h1>
        <img class= "image" src="images/dream.png" alt="dream">
          <a href="sleepMonitoring.php"><button class="button1">Lisää unitiedot</button>
    </article>

  <article>
 <p> Muista nousta ylös ja liikkua työpäivän aikana </p>
 <a href="reminders.php"><button class="button1">Lisää muistutus</button>
  </article>
</body>
</html>