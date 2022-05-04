<?php 

include("D:/laragon/www/pointageSalarie/gestadmin/modules/connexiondb/connexiondb.php");



?>

<?php 

$Civilite = $_POST['Civilite'];
$Nom = $_POST['Nom'];
$Prenom = $_POST['Prenom'];
$Date_naissance = $_POST['Date_de_naissance'];
$Adresse_postal = $_POST['Adresse'];
$N_telephone = $_POST['Numerotelephone'];
$Email = $_POST['Email'];
$Type_de_contrat = $_POST['Contrat'];
$Poste = $_POST['Poste'];
$Identifant = $_POST['Identifant'];
$Motdepasse = $_POST['Motdepasse'];


$sql = "INSERT INTO salarie (`Civilite`, `Nom`, `Prenom`,`Date_de_naissance`,`Adresse`,`Numerotelephone`,`Poste`,`Email`,`Typedecontrat`,`Identifiant`,`Motdepasse`) VALUES (:Civilite, :Nom, :Prenom,:Date_naissance,:Adresse,:N_telephone,:Poste,:Email,:Contrat,:Identifant,:Motdepasse)";
try{
    
  $stmt = $db->prepare($sql);
  $stmt->bindValue('Civilite', $Civilite, PDO::PARAM_STR);
  $stmt->bindValue('Nom', $Nom, PDO::PARAM_STR);
  $stmt->bindValue('Prenom', $Prenom, PDO::PARAM_STR);
  $stmt->bindValue('Date_naissance', $Date_naissance, PDO::PARAM_STR);
  $stmt->bindValue('Adresse', $Adresse_postal, PDO::PARAM_STR);
  $stmt->bindValue('N_telephone', $N_telephone, PDO::PARAM_STR);
  $stmt->bindValue('Email', $Email, PDO::PARAM_STR);
  $stmt->bindValue('Poste', $Poste, PDO::PARAM_STR);
  $stmt->bindValue('Contrat', $Type_de_contrat, PDO::PARAM_STR);
  $stmt->bindValue('Identifant', $Identifant, PDO::PARAM_STR);
  $stmt->bindValue('Motdepasse', $Motdepasse, PDO::PARAM_STR);
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

?>
<?php





header('location:http://localhost/pointageSalarie/gestadmin/modules/employes/lister/listes_employes.php');
//echo($e);

?>