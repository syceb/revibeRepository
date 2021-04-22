<nav>
<?php
//Käyttäjän tila

if($_SESSION['sloggedIn']=="yes"){
    echo("<p>");
    
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