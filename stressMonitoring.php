<?php include("includes/iheader.php");?>
<?php include("includes/burgermenu.php");?>







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