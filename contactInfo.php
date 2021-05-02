
<?php include("includes/iheader.php");?>
<?php include("includes/burgermenu.php");?>

<style>
input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc; 
  border-radius: 4px; 
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px; 
  resize: vertical 
}
.container {
  border-radius: 5px;
  padding: 20px;
}
* {
  box-sizing: border-box;
}
.row {
  display: flex;
}
.facebook {
    padding: 5px;
    margin-left: 40%;
}
.instagram {
    padding: 5px;
    margin-right: 44%;
}
</style>

  <h1 id="pageTitle">Yhteystiedot</h1>

<article>



  <h1>Ota yhteyttä</h1>

<!--Ota yhteyttä - lomake. Viestit tallentuvat tietokantaan -->

    <input type="text" id="fname" name="firstname" placeholder="Etunimi">

    <input type="text" id="lname" name="lastname" placeholder="Sukunimi">

    <textarea id="subject" name="subject" placeholder="Kirjoita viesti tähän..." style="height:200px"></textarea>

    <input type="submit" value="Lähetä viesti">

  </form>
</div>
</article>

<div class ="contactInfo">

<p><b>Stressitönkatu 7<br>
    00150 Helsinki<br>
    045 123 1234<br>
    info@revibe.fi
    </b></p>
</div>
<!--Somekuvakkeet -->
<div class="row">
  <div class="facebook">
  <a href ="https://www.facebook.com/"><img src="images/facebook.png" name="submit" width="30px" height="30px" alt="submit"/> 
  </div>
  <div class="instagram">
  <a href ="https://www.instagram.com/"><img src="images/instagram.png" name="submit" width="30px" height="30px" alt="submit"/>
  </div>
</div>

<?php include("includes/ifooter.php");?>