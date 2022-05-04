<?php 

    include("D:/laragon/www/pointageSalarie/gestadmin/modules/connexiondb/connexiondb.php");
    include("D:/laragon/www/pointageSalarie/gestadmin/modules/employes/lister/requete_affiche_employes.php");
  ?>

<?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)) : ?>
  <div class="grid-info">
    <span><?php echo htmlspecialchars($row['Nom']); ?></span>
    <span><?php echo htmlspecialchars($row['Prenom']); ?></span>
    <span><?php echo htmlspecialchars($row['Poste']); ?></span>
    <span><?php echo htmlspecialchars($row['Numerotelephone']); ?></span>
  </div>
<?php endwhile; ?>
