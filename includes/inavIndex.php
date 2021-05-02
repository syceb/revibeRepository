<nav>
<?php
//Käyttäjän tila

if($_SESSION['sloggedIn']=="yes"){
    echo("<p>");
    
}else{
    ?>
    <style>/*PopUp - ikkuna*/

.modal {
  display: none; 
  position: fixed;
  z-index: 1; 
  padding-top: 100px; /* Sijainti */
  left: 0;
  top: 0;
  width: 100%; 
  height: 100%; 
  overflow: auto; 
  background-color: rgb(0,0,0); 
  background-color: rgba(0,0,0,0.4); 
  box-shadow:  0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}

/* PopUpin sisältö */
.modal-content {
  background-color: #F9F9F9;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
  text-shadow:none;
}

/* Sulkunappi */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
#myBtn {
  border: none;
  background-color: inherit;
  padding-top: 40px;
  cursor: pointer;
  display: inline-block;
  color: white;
  text-decoration: none;
  text-shadow: 2px 5px 5px rgb(27 27 27 / 50%);
  font-family: 'Poppins', sans-serif;
  font-size: 20.8px;
  font-weight: bold;
}

</style>

    <div class="frontpage">
    <a href="logInUser.php">Kirjaudu sisään</a> <br/>
    <a href="createAccount.php">Luo tili</a> 

    <button id="myBtn">Mikä on revibe?</button>

<!-- Popup -ikkuna -->
<div id="myModal" class="modal">

  <!-- PopUp -ikkunan sisältö -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <p> Revibe on luotettava ja helppokäyttöinen päiväkirjasovellus stressistä kärsiville.
     Päiväkirjamerkinnät ja olokyselyn vastaukset tallentuvat käyttäjän profiiliin, minkä jälkeen ne näkyvät stressi- sivulla taulukossa.
    <br>
     <br>
    Päiväkirjasovellukset tutkitusti parantavat käyttäjiensä hyvinvointia, sillä ne kannustavat
     ihmisiä huolehtimaan paremmin terveydestään.

     </p>
  </div>

</div>

<script src="js/popUp.js"></script>
    </div>

    <?php
}
?>
</nav>



