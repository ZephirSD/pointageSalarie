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
  <link rel="shortcut icon" href="../../../../Image/logo-entreprise.png" type="image/x-icon">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/6.5.95/css/materialdesignicons.min.css" integrity="sha512-Zw6ER2h5+Zjtrej6afEKgS8G5kehmDAHYp9M2xf38MPmpUWX39VrYmdGtCrDQbdLQrTnBVT8/gcNhgS4XPgvEg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
  <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
  <title>Ajout Profil | Gestion Employes</title>
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
        <h2 class="title">Ajouter un nouveau profil</h2>
      </div>
      <form action="traitement_ajout_employes.php" method="POST" enctype="multipart/form-data">
        <div class="form-employes-ajout">
          <div class="swiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <h2 class="title-ajout">Coordonnées</h2>
                <div class="flex-form-ajout">
                  <div class="grid-form-ajout">
                    <div class="label-form">
                      <label for="" class="designation-form">Civilité</label>
                      <select name="Civilite">
                        <option value=" ">Selectionner votre civilité</option>
                        <option value="Madame">Madame</option>
                        <option value="Monsieur">Monsieur</option>
                      </select>
                    </div>
                    <div class="label-form">
                      <label for="" class="designation-form">Nom</label>
                      <input type="text" name="Nom">
                    </div>
                    <div class="label-form">
                      <label for="" class="designation-form">Prénom</label>
                      <input type="text" name="Prenom">
                    </div>
                    <div class="label-form">
                      <label for="" class="designation-form">Date de naissance</label>
                      <input type="date" name="Date_de_naissance">
                    </div>
                    <div class="label-form">
                      <label for="" class="designation-form">Adresse Postal</label>
                      <input type="text" name="Adresse">
                    </div>
                    <div class="label-form">
                      <label for="" class="designation-form">Numéro de téléphone</label>
                      <input type="tel" name="Numerotelephone">
                    </div>
                    <div class="label-form">
                      <label for="" class="designation-form">Email</label>
                      <input type="email" name="Email">
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <h2 class="title-ajout">Informations Complémentaires</h2>
                <div class="flex-form-ajout">
                  <div class="grid-form-ajout">
                    <div class="label-form">
                      <label for="" class="designation-form">Type de contrat</label>
                      <select name="Contrat">
                        <option value="CDD">CDD</option>
                        <option value="CDI">CDI</option>
                        <option value="Intérim">Intérim</option>
                      </select>
                    </div>
                    <div class="label-form">
                      <label for="" class="designation-form">Poste</label>
                      <select name="Poste">
                        <option value="Directeur">Directeur</option>
                        <option value="Technicien">Technicien</option>
                        <option value="Frigoriste">Frigoriste</option>
                        <option value="Chargé_ADV">Chargé ADV</option>
                      </select>
                    </div>
                    <div class="label-form">
                      <label for="" class="designation-form">Identifant</label>
                      <input type="text" name="Identifant">
                    </div>
                    <div class="label-form">
                      <label for="" class="designation-form">Mot de passe</label>
                      <div class="case-password">
                        <input type="text" name="Motdepasse" id="motdepasse" value="">
                        <i onclick="random_string(10)" class="fas fa-unlock-alt" id="generMP"></i>
                      </div>
                    </div>
                    <div class="boutton-ajout">
                      <button type="submit" class="boutton-ajout">Ajouter</button>
                    </div>
                    <!-- <div class="label-form">
                      <label for="" class="designation-form">Image de profil</label>
                      <input type="file" name="fileToUpload" id="exampleInputFile">
                    </div> -->
                  </div>
                </div>
              </div>
              ...
            </div>
            <div class="swiper-pagination"></div>
          </div>
        </div>
      </form>
    </div>
  </section>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="../../../js/misc.js"></script>
  <script src="../../../js/random_password.js"></script>
  <script>
    const swiper = new Swiper('.swiper', {
      direction: 'horizontal',
      loop: false,

      pagination: {
        el: '.swiper-pagination',
      },

      scrollbar: {
        el: '.swiper-scrollbar',
      },
    });
  </script>
</body>

</html>