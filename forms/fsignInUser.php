<fieldset><legend>Käyttäjätiedot</legend>
<form method="post">
  <p><!--Etunimi: -->
  <br /> <input type="text" name="givenName" placeholder="Etunimi" maxlength="40"/>
  </p><p>
  <p><!--Sukunimi:-->
  <br /> <input type="text" name="givenSurname" placeholder="Sukunimi" maxlength="40"/>
  </p><p>  
  <!--Sähköposti: -->
  <br />  <input type="text" name="givenEmail" placeholder="Sähköpostiosoite" maxlength="40"/>
  </p>
  <p>  
  <!--Ikä:-->
  <br /> <input type="text" name="givenAge" placeholder="Ikä" />
  </p><p>
 <!-- Paino:-->
  <br /> <input type="text" name="givenWeight" placeholder="Paino" />
  </p><p>
 <!-- Pituus:-->
  <br /> <input type="text" name="givenHeight" placeholder="Pituus" />
  </p><p>
  <!--Sukupuoli: -->
  <input type="radio" name="givenGender" value="mies" checked> Mies</input> 
  <input type="radio" name="givenGender" value="nainen" checked> Nainen</input> 
  <input type="radio" name="givenGender" value="muunsukupuolinen" checked> Muunsukupuolinen</input> 
  </p>  <p>
 <!-- Salasana: -->
  <br />  <input type="password" name="givenPassword" placeholder="Salasana" maxlength="40"/>
  </p><p>
  <!--Salasana uudelleen:-->
  <br />  <input type="password" name="givenPasswordVerify" placeholder="Salasana uudelleen" maxlength="40"/>
  </p><p>
  <br />  <input type="submit" name="submitUser" value="Luo"/>
          <input type="reset"  value="Tyhjennä"/>
          <input type="submit" name="submitBack" value="Palaa takaisin"/>
  </p>
</form>
</fieldset>