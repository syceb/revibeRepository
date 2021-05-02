<form class="createform" method="post">
<p> <!-- Etunimi: -->
<br /> <input type="text" name="givenName" placeholder="etunimi" maxlength="40"/>
</p>
<p> <!-- Sukunimi: -->
    <input type="text" name="givenSurname" placeholder="sukunimi" maxlength="40"/>
</p>
<p>  
  <!-- Ikä -->
    <input type="text" name="givenAge" placeholder="ikä" />
</p>
<p>
<!-- Sukupuoli -->
    <select id="gender" name="givenGender">
        <option value="sukupuoli">sukupuoli</option>
        <option value="nainen">nainen</option>
        <option value="mies">mies</option>
        <option value="Muunsukupuolinen">muunsukupuolinen</option>
    </select>
</p>
<p><!-- Sähköposti: --> 
    <input type="text" name="givenEmail" placeholder="sähköpostiosoite" maxlength="40"/>
</p>
<p>
<!-- Tallenna nappi -->
    <input id="tallennaTiedot" type="submit" name="changeInfo" value="Tallenna tiedot"/>
</p>
</form>