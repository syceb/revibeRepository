<?php include("includes/iheader.php");?>
<?php include("includes/burgermenu.php");?>



 <h1>Unen seuranta</h1>

  <article>
  
    <label for="appt">Nukahtamisaika:</label>
    <input type="time" id="appt" name="appt" min="09:00" max="18:00" required>
    <br>
    <label for="appt">Heräämisaika:</label>
    <input type="time" id="appt" name="appt" min="00:00" max="24:00" required>

    <input type="button" value="Tallenna" onclick="msg()">

 </article>




<?php include("includes/ifooter.php");?>