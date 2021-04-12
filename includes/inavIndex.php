<nav>
<?php
//Käyttäjän tila

if($_SESSION['sloggedIn']=="yes"){
    echo("<p>** User: " .$_SESSION['suserName']. " " . $_SESSION['suserEmail']);
    echo(" ** <a href=\"logOutUser.php\">Log out</a></p>");
}else{
    ?>
    <div class="frontpage">
    <a href="logInUser.php">Kirjaudu sisään</a> <br/>
    <a href="createAccount.php">Luo tili</a> 

    </div>
    <?php
}
?>
</nav>
<br/>