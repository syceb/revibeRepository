<?php
include_once("config/https.php");
include_once("config/config.php");

session_start();
?>
<!DOCTYPE html> 
<html  lang="fi-FI">
<head>
<title> revibe</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/projekti.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
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