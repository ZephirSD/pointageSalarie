<?php 

include("C:/xampp2/htdocs/ClimTechStock/gestadmin/modules/connexiondb/connexiondb.php");
include('C:/xampp2/htdocs/ClimTechStock/gestadmin/modules/dashboard/graphique/intervalle_date.php')

?>

<?php 
$sql = "SELECT SUM(Montant) AS Total_Montant_Jour FROM `ca` GROUP BY Date_traitement LIMIT ".$varNum.",".$nombreDate."";
try{
 
  $stmt = $db->query($sql);

  $count = $stmt->rowCount();
  if($count == 0){
 
     $msg = "Aucune donnée trouvée...";
   
  } 
  
  if($stmt === false){
   die("Erreur");
  }
  
 }catch (PDOException $e){
   echo $e->getMessage();
 }

?>
<?php 
$sql = "SELECT * FROM `ca` GROUP BY Date_traitement LIMIT ".$varNum.",".$nombreDate."";
try{
 
  $stmt2 = $db->query($sql);

  $count = $stmt2->rowCount();
  if($count == 0){
 
     $msg = "Aucune donnée trouvée...";
   
  } 
  
  if($stmt2 === false){
   die("Erreur");
  }
  
 }catch (PDOException $e){
   echo $e->getMessage();
 }
//  var_dump($compteur);
//  var_dump($nombreDate);
?>