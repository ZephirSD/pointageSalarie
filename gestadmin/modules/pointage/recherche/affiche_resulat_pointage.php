<?php
    include('D:/laragon/www/pointageSalarie/gestadmin/modules/pointage/requete_recherche_pointage.php');
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<div class="form-employes-ajout-categories">
    <div class="flex-form-ajout-categories">
    <div class="label-form">
        <label for="" class="designation-form">Nom</label>
        <input type="hidden" name="Id_salarie" value="<?php echo htmlspecialchars($_SESSION['sess_user_id']); ?>">
        <span><?php echo htmlspecialchars($row['Nom']); ?></span>
    </div>
    <div class="label-form">
        <label for="" class="designation-form">Prenom</label>
        <span><?php echo htmlspecialchars($row['Prenom']); ?></span>
    </div>
    <div class="label-form">
        <label for="" class="designation-form">Email</label>
        <span><?php echo htmlspecialchars($row['Email']); ?></span>
    </div>
    <div class="boutton-ajout-categories">
        <button type="submit" class="boutton-ajout">Valider</button>
    </div>
    </div>
</div>