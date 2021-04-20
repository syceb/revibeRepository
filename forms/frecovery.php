<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
<link rel="stylesheet" href="css/projekti.css">
</head>

  <div class="helloUser">
    <?php 
      echo("<p> Hei, ".$_SESSION['suserName']."!"); 
    ?>
  </div>

  <article>
    <h1>Stressin seuranta</h1>
    <input type="button" onclick="location.href='stressMonitoring.php';" value="Mittaa syke" />
  </article>

  <article>
    <h1>Unen seuranta</h1>
    <input type="button" onclick="location.href='sleepMonitoring.php';" value="Lisää unitiedot" />
  </article>

  <article>
    <p> Muista nousta ylös ja liikkua työpäivän aikana </p>
    <input type="button" onclick="location.href='reminders.php';" value="Lisää muistutus" />
  </article>
  
</body>
</html>