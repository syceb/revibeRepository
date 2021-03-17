<nav>
<?php
//Käyttäjän tila
echo("<h1>Recovery diary</h1>");
if($_SESSION['sloggedIn']=="yes"){
    echo("<p>** User: " .$_SESSION['suserName']. " " . $_SESSION['suserEmail']);
    echo(" ** <a href=\"logOutUser.php\">Log out</a></p>");
}else{
    ?>
    <a href="createAccount.php">Create account</a> <a href="logInUser.php">Log in</a>
    <?php
}
?>
</nav>
<br/>