<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!--Käyttäjän etunimi tulee etusivun tervehdykseen -->
  <div class="helloUser">
    <?php 
      echo("<p> Hei, ".$_SESSION['suserName']."!"); 
    ?>
  </div>
<!--Siirtyminen stressin seuranta -sivulle -->
  <article>
    <h1>Stressin seuranta</h1>
    <image class="heart" type="image" src="images/sydan2.png" name="submit" width="50px" height="50px" alt="submit"/>  
    <br>
    <input type="button" onclick="location.href='stressMonitoring.php';" value="Lisää merkintä" />
  </article>
<!--Siirtyminen unen seuranta -sivulle -->
  <article>
    <h1>Unen seuranta</h1>
    <i class="fa fa-clock-o" style="font-size:50px"></i>
    <br>
    <input type="button" onclick="location.href='sleepMonitoring.php';" value="Lisää unitiedot" />
  </article>
