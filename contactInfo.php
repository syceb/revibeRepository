
<?php include("includes/iheader.php");?>
<?php include("includes/burgermenu.php");?>

<style>
input[type=text], select, textarea {
  width: 100%; /* Full width */
  padding: 12px; /* Some padding */ 
  border: 1px solid #ccc; /* Gray border */
  border-radius: 4px; /* Rounded borders */
  box-sizing: border-box; /* Make sure that padding and width stays in place */
  margin-top: 6px; /* Add a top margin */
  margin-bottom: 16px; /* Bottom margin */
  resize: vertical /* Allow the user to vertically resize the textarea (not horizontally) */
}
/* When moving the mouse over the submit button, add a darker green color */
input[type=submit]:hover {
  background-color: #45a049;
}

/* Add a background color and some padding around the form */
.container {
  border-radius: 5px;

  padding: 20px;
}
</style>

<div class="container">
  <form action="action_page.php">
  <h1>Yhteystiedot</h1>

            <p>Stressitönkatu 7<br>
                00150 Helsinki<br>
                045 123 1234<br>
                info@revibe.fi
            </p>


  <h1>Ota yhteyttä</h1>
    

    <input type="text" id="fname" name="firstname" placeholder="Etunimi">

    <input type="text" id="lname" name="lastname" placeholder="Sukunimi">

    <textarea id="subject" name="subject" placeholder="Kirjoita viesti tähän..." style="height:200px"></textarea>

    <input type="submit" value="Lähetä viesti">

  </form>
</div>

<?php include("includes/ifooter.php");?>