<?php 

include("C:/xampp2/htdocs/ClimTechStock/gestadmin/modules/connexiondb/connexiondb.php");

?>

<?php 
$sql = "SELECT COUNT(*) AS Total_Produits FROM `produits` WHERE Stock = 'Rupture'";
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
