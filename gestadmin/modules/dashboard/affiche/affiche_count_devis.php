<?php
    include('C:/xampp2/htdocs/ClimTechStock/gestadmin/modules/dashboard/requete/requete_count_devis.php');
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<div id="case-count">
    <h2>Nombre de devis à traiter</h2>
    <h1  data-vanilla-counter data-start-at="0" data-end-at="<?php echo htmlspecialchars($row['Total_Devis']); ?>"></h1>
</div>