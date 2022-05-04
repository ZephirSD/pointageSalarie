<?php 
include("D:/laragon/www/pointageSalarie/gestadmin/modules/connexiondb/connexiondb.php");
  $sql = "SELECT * FROM salarie";
     
    try{
   
     $stmt = $db->query($sql);
  
     $count = $stmt->rowCount();
     if($count == 0){
    
        $resultat = "Aucune donnée trouvée...";
      
     } 
     
     if($stmt === false){
      die("Erreur");
     }
     
    }catch (PDOException $e){
      echo $e->getMessage();
    }
?>

