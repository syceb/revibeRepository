<?php include("includes/iheader.php");?>
<?php include("includes/burgermenu.php");?>
<?php include("forms/stressIndex.php");?>







<?php
 //kirjautuneen käyttäjän userID?
    $data1['email'] = $_SESSION['suserEmail'];
    //var_dump($data1);
    $sql1 = "SELECT userID FROM revibe_user where userEmail =  :email";
    $kysely1=$DBH->prepare($sql1);
    $kysely1->execute($data1);
    $tulos1=$kysely1->fetch();
    $currentUserID=$tulos1[0];
    ?>

 <!-- Tiedot kantaan -->   
<?php
if(isset($_POST['submitRecovery'])){
   try {
    $data2['commentText']=$_POST['givenDescription'];
    $data2['commentPainLevel']=$_POST['givenPain'];
    $data2['commentUserID']=$currentUserID;
    //var_dump($data2);
    $sql2="INSERT INTO revibe_stressIndex (commentText, commentPainLevel, commentUserID)
    VALUES (:commentText, :commentPainLevel, :commentUserID);";
     $kysely2 = $DBH->prepare($sql2); 
     $kysely2->execute($data2);
   } catch(PDOException $e) {
    file_put_contents('log/DBErrors.txt', 'index.php: '.$e->getMessage()."\n", FILE_APPEND);
   }
  }
?>
  <h2 id="stressiotsikko">Stressipäiväkirja</h2>

<!-- Tuodaan tiedot kannasta indexitaulukoksi sivulle -->  
<?php
$data3['commentUserID'] = $currentUserID;
$sql3 = "SELECT commentText, commentPainLevel, commentDate FROM revibe_stressIndex WHERE commentUserID = :commentUserID ORDER BY commentDate DESC LIMIT 30";
$kysely3=$DBH->prepare($sql3);
$kysely3->execute($data3);				

	echo("<table>
	 	<tr>
			<th>Merkintä</th>
      <th>Stressitaso (1-5)</th>
      <th>Päivämäärä</th>
		</tr>");
	
		while	($row=$kysely3->fetch()){	
				echo("<tr><td>".$row["commentText"]."</td>
				<td>".$row["commentPainLevel"]."</td>
				<td>".$row["commentDate"]."</td></tr>");
		}
	
  echo("</table>");?>
  <br>
  <br>

<?php include("includes/ifooter.php");?>