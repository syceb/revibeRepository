<form class="createform" method="post">
  <p> <!-- Etunimi: -->
  <br /> <input type="text" name="givenName" placeholder="etunimi" maxlength="40"/>
  </p><p>
  <p> <!-- Sukunimi: -->
      <input type="text" name="givenSurname" placeholder="sukunimi" maxlength="40"/>
</p><p>  
  <!-- Ikä -->
    <input type="text" name="givenAge" placeholder="ikä" />
  </p><p>
  <!-- Sukupuoli -->
  <select id="gender" name="givenGender">
      <option value="sukupuoli">sukupuoli</option>
      <option value="nainen">nainen</option>
      <option value="mies">mies</option>
      <option value="Muunsukupuolinen">muunsukupuolinen</option>
    </select>
 
  
  </p>  
  <!-- Sähköposti: --> 
      <input type="text" name="givenEmail" placeholder="sähköpostiosoite" maxlength="40"/>
   </p><p>
  <!-- Salasana: -->
      <input type="password" name="givenPassword" placeholder="salasana" maxlength="40"/>
   </p><p>
  <!-- Salasana uudelleen: -->
      <input type="password" name="givenPasswordVerify" placeholder="salasana uudelleen" maxlength="40"/>
  </p><p>
      <input id="luotili" type="submit" name="submitUser" value="Luo tili"/>
   
  </p>
</form>
