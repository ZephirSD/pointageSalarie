<?php
$nombreDate = 5;
$varNum = 0;

include("C:/xampp2/htdocs/ClimTechStock/gestadmin/modules/connexiondb/connexiondb.php");

$sql = "SELECT * FROM ca GROUP BY Date_traitement";
try{
 
    $stmt = $db->query($sql);
   
    if($stmt === false){
     die("Erreur");
    }
    
   }catch (PDOException $e){
     echo $e->getMessage();
   }
$compteur = $stmt->rowCount();
    if($compteur > 5){
        for($i = 1; $i < $compteur + 1; $i++){
            if($compteur > 5){
                $varNum++;
            }
        }
        $varNum -= $nombreDate;
    }
?>