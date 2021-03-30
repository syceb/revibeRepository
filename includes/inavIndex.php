<nav>
<?php
//Käyttäjän tila

if($_SESSION['sloggedIn']=="yes"){
    echo("<p>** User: " .$_SESSION['suserName']. " " . $_SESSION['suserEmail']);
    echo(" ** <a href=\"logOutUser.php\">Log out</a></p>");
}else{
    ?>
    <a href="createAccount.php">Luo käyttäjätunnus</a> <br/>
    <a href="logInUser.php">Kirjaudu sisään</a>
    <?php
}
?>
</nav>
<br/>