<?php include("includes/iheader.php");?>
<?php include("includes/burgermenu.php");?>



<h1 id="pageTitle" >Unen seuranta</h1>

  <article>
  
    <label for="sleep">Nukahtamisaika:</label>
    <input type="time" id="sleep" name="sleep" min="09:00" max="18:00" required>
    <br>
    <label for="awake">Heräämisaika:</label>
    <input type="time" id="awake" name="awake" min="00:00" max="24:00" required>

    <input type="button" value="Tallenna" onclick="msg()">

    <p> Tyypillisesti aikuisen ihmisen unentarve on noin 7–9 tuntia vuorokaudessa.</p>

 </article>




<?php include("includes/ifooter.php");?>