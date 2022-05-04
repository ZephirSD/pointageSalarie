<?php
    include('D:/laragon/www/pointageSalarie/gestadmin/modules/pointage/requete/requete_valider.php');
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    $dateHeure = $row['DateHeure'];
    $timestamp = strtotime($dateHeure); 
    $newJour = date("d/m/Y", $timestamp);
    $newHeures = date("H:i:s", $timestamp);
?>

<div class="form-employes-ajout-categories">
    <div class="flex-form-ajout-categories">
    <div class="label-form">
        <label for="" class="designation-form">Vous avez déjà validé votre pointage le <?php echo htmlspecialchars($newJour); ?> à <?php echo htmlspecialchars($newHeures); ?></label>
    </div>
    </div>
</div>