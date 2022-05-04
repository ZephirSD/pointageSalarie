<?php 
session_start();
include("D:/laragon/www/pointageSalarie/gestadmin/modules/connexiondb/connexiondb.php");



?>

<?php 

$Idsalarie = $_POST['Id_salarie'];
if($Idsalarie == $_SESSION['sess_user_id']){
  $sql = "INSERT INTO pointage (`Idsalarie`) VALUES (:Idsalarie)";
  
try{
    
  $stmt = $db->prepare($sql);
  $stmt->bindValue('Idsalarie', $Idsalarie, PDO::PARAM_STR);
  $stmt->execute();
  if($stmt == true){
    $msg = "Aucun résultat pour votre recherche";
  }


  if($stmt === false){
    die("Erreur");
  }
 
}
catch (PDOException $e){
 
}

}
?>
<?php
//echo $e;
header('location:http://localhost/pointageSalarie/gestadmin/pointage.php');
?>