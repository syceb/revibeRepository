<?php include("includes/iheader.php");?>



<?php
  if(!isset($_SESSION['sloggedIn'])){
   
?>

  
    <img class="relax" src="images/relax.jpg" alt="lepo"/>
    <h1 class="welcome">Tervetuloa!</h1>
<?php
  }else{
  //Lomake päiväkirjamerkinnällee
  include("includes/header.php");
  include("forms/frecovery.php");
  
  

  

?>

<?php
 //kirjautuneen käyttäjän userID???
    $data1['email'] = $_SESSION['suserEmail'];
    //var_dump($data1);
    $sql1 = "SELECT userID FROM wsk6_user where userEmail =  :email";
    $kysely1=$DBH->prepare($sql1);
    $kysely1->execute($data1);
    $tulos1=$kysely1->fetch();
    $currentUserID=$tulos1[0];
    ?>
<?php
if(isset($_POST['submitRecovery'])){
   try {
    $data2['commentText']=$_POST['givenDescription'];
    $data2['commentPainLevel']=$_POST['givenPain'];
    $data2['commentUserID']=$currentUserID;
    //var_dump($data2);
    $sql2="INSERT INTO wsk6_comment (commentText, commentPainLevel, commentUserID)
    VALUES (:commentText, :commentPainLevel, :commentUserID);";
     $kysely2 = $DBH->prepare($sql2); 
     $kysely2->execute($data2);
   } catch(PDOException $e) {
    file_put_contents('log/DBErrors.txt', 'index.php: '.$e->getMessage()."\n", FILE_APPEND);
   }
  }
?>
  <h2>Report</h2>
<?php
$data3['commentUserID'] = $currentUserID;
$sql3 = "SELECT commentText, commentPainLevel, commentDate FROM wsk6_comment WHERE commentUserID = :commentUserID ORDER BY commentDate DESC LIMIT 30";
$kysely3=$DBH->prepare($sql3);
$kysely3->execute($data3);				

	echo("<table>
	 	<tr>
			<th>Description</th>
      <th>Pain level 0-10</th>
      <th>Date</th>
		</tr>");
	
		while	($row=$kysely3->fetch()){	
				echo("<tr><td>".$row["commentText"]."</td>
				<td>".$row["commentPainLevel"]."</td>
				<td>".$row["commentDate"]."</td></tr>");
		}
	
  echo("</table>");
  }
?>





<?php include("includes/inavIndex.php"); ?>
<?php include("includes/ifooter.php");?>