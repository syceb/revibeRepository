<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <div class="helloUser">
    <?php 
      echo("<p> Hei, ".$_SESSION['suserName']."!"); 
    ?>
  </div>

  <article>
    <h1>Stressin seuranta</h1>
    <image class="heart" type="image" src="images/sydan2.png" name="submit" width="50px" height="50px" alt="submit"/>  
    <br>
    <input type="button" onclick="location.href='stressMonitoring.php';" value="Lisää merkintä" />
  </article>

  <article>
    <h1>Unen seuranta</h1>

    <i class="fa fa-clock-o" style="font-size:50px"></i>
    <br>
    <input type="button" onclick="location.href='sleepMonitoring.php';" value="Lisää unitiedot" />
  </article>

  <article>
    <p> Muista nousta ylös ja liikkua työpäivän aikana </p>
    <input type="button" onclick="location.href='reminders.php';" value="Lisää muistutus" />
  </article>
  
