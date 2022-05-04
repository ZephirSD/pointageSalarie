<?php 

include('D:/laragon/www/pointageSalarie/gestadmin/modules/connexiondb/connexiondb.php')

?>

<?php 

$Idsalarie = $_POST['Idsalarie'];
if($Idsalarie == $_SESSION['sess_user_id']){
  $sql = "SELECT * FROM salarie WHERE `Idsalarie`= $Idsalarie";
  
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
else{
  header('location:http://localhost/pointageSalarie/gestadmin/pointage.php');
}
?>
