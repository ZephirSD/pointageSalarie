<?php 
include("D:/laragon/www/pointageSalarie/gestadmin/modules/connexiondb/connexiondb.php");
$Iduser = $_SESSION['sess_user_id'];
$sql = "SELECT * FROM pointage WHERE Idsalarie = $Iduser ORDER BY DateHeure DESC LIMIT 1";
     
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

