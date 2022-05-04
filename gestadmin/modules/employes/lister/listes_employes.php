<?php
session_start();
if (isset($_SESSION['sess_user_id']) && $_SESSION['sess_user_id'] != "") {
} else {
  header('location:index.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../../css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/6.5.95/css/materialdesignicons.min.css" integrity="sha512-Zw6ER2h5+Zjtrej6afEKgS8G5kehmDAHYp9M2xf38MPmpUWX39VrYmdGtCrDQbdLQrTnBVT8/gcNhgS4XPgvEg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>Listes des employés | Gestion de Stock</title>
</head>

<body>
  <section id="grid-dashboard">
    <div class="sidebar_menu">
      <div class="profil">
        <div class="rond-icon">
        </div>
        <div class="coordonnees">
          <span><?php echo ($_SESSION['sess_user_nom']); ?></span>
          <span><?php echo ($_SESSION['sess_user_prenom']); ?></span>
        </div>
      </div>
      <?php
      include('../../../modules/menu/menu.php');
      ?>
    </div>
    <div class="contain">
      <div class="bar-title">
        <h2 class="title">Gestion des Employés</h2>
        <div class="case-plus">
          <a href="http://localhost/pointageSalarie/gestadmin/modules/employes/ajouter/ajouter_employes.php">
            <i class="fas fa-plus-circle" id="plus-boutton"></i>
          </a>
        </div>
      </div>
      <div class="grid-employes">
        <?php
        include('affiche_employes.php');
        ?>
      </div>
  </section>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="../../../js/misc.js"></script>
  <!-- <script src="../../../js/boutton-filtre.js"></script> -->
</body>

</html>