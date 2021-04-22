

  <div class="helloUser">
    <?php 
      echo("<p> Hei, ".$_SESSION['suserName']."!"); 
    ?>
  </div>

  <article>
    <h1>Stressin seuranta</h1>
    <input class="heart" type="image" src="images/sydan2.png" name="submit" width="50px" height="50px" alt="submit"/>  
    <input type="button" onclick="location.href='stressMonitoring.php';" value="Tee päiväkirjamerkintä" />
  </article>

  <article>
    <h1>Unen seuranta</h1>

    <i class="fa fa-clock-o"></i>
    <br>
    <input type="button" onclick="location.href='sleepMonitoring.php';" value="Lisää unitiedot" />
  </article>

  <article>
    <p> Muista nousta ylös ja liikkua työpäivän aikana </p>
    <input type="button" onclick="location.href='reminders.php';" value="Lisää muistutus" />
  </article>
  
