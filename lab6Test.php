<?php

$password = 'MetropolianOpe2020';   //murtoaika?
$added='@£$€098';                   
$passwordAdded=$password.$added;    //MetropolianOpe2020@£$€098 murtoaika?

/* TÄMÄ EI MEILLÄ ONNISTU!!!
echo("PHP version pitää olla vähintään 7.3: nyt " . phpversion());
//uusin tapa: kryptausalgoritmi 
$hashARGON2I = password_hash($password, PASSWORD_ARGON2I);
*/


//Vanhempi tapa: kryptausalgoritmi BCRYPT
echo("<fieldset><legend>1. Hyvä muistaa salasanoista</legend>");
$hashBCRYPT = password_hash($password, PASSWORD_BCRYPT);
echo("<p>1. Kryptataan $password käyttäen BCRYPT: <br />" . $hashBCRYPT."</p>");
var_dump($hashBCRYPT);

$hashBCRYPTAdded = password_hash($passwordAdded, PASSWORD_BCRYPT);
echo("<p>2. Kryptataan $passwordAdded käyttäen BCRYPT: <br />" . 
$hashBCRYPTAdded."</p>");
var_dump($hashBCRYPTAdded);

echo("<p>Onko annettu salasana sama kuin salattuna sama kuin yllä kryptattu?</p>");
$hashBCRYPTAdded_again = password_hash($passwordAdded, PASSWORD_BCRYPT);
echo("<p>3a. $passwordAdded kryptattu kohdassa 2.: $hashBCRYPTAdded</p>");
echo("<p>3b. $passwordAdded kryptataan uudelleen: $hashBCRYPTAdded_again</p>");
if(password_verify($passwordAdded, $hashBCRYPTAdded_again)){
    echo("3a. ja 3b. ovat SAMA käyttäjätunnus - MIKSI");
}else{
    echo("3a. ja 3b. ovat ERI");
}
echo("</fieldset>");
?>


