<?php
include_once("config/https.php");
include_once("config/config.php");
session_start();
?>
<!DOCTYPE html> 
<html  lang="fi-FI">
<head>
<title> Revibe</title>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="css/projekti.css">
</head>
<body>
<nav>
<?php


//Käyttäjän tila
echo("<h2>Päiväkirja</h2>");
if($_SESSION['loggedIn']=="yes"){
    echo("Logged in: " .$_SESSION['userName']);
}
?>
</nav>