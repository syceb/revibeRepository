<?php
include_once("config/https.php");
include_once("config/config.php");
session_start();
?>
<!DOCTYPE html> 
<html  lang="fi-FI">
<head>
<title> Lab5: Lomakkeet ja sessio</title>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="css/lab6.css">
</head>
<body>
<nav>
<?php


//Käyttäjän tila
echo("<h2>Recovery diary</h2>");
if($_SESSION['loggedIn']=="yes"){
    echo("Logged in: " .$_SESSION['userName']);
}
?>
</nav>