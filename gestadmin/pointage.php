<?php 
session_start();
if(isset($_SESSION['sess_user_id']) != "") {
	
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
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/6.5.95/css/materialdesignicons.min.css" integrity="sha512-Zw6ER2h5+Zjtrej6afEKgS8G5kehmDAHYp9M2xf38MPmpUWX39VrYmdGtCrDQbdLQrTnBVT8/gcNhgS4XPgvEg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="./js/vanilla-counter.js"></script>
    <title>Pointage | Salarie</title>
</head>
<body>
    <section id="grid-dashboard">
        <div class="sidebar_menu">
            <div class="profil">
                <div class="coordonnees">
                    <span><?php echo($_SESSION['sess_user_nom']); ?></span>
                    <span><?php echo($_SESSION['sess_user_prenom']); ?></span>
                    
                </div>
            </div>
            <?php
                include('modules/menu/menu2.php');
            ?>
        </div>
        <div class="contain">
            <div class="bar-title">
            <h2 class="title">Veuillez vous effectuer votre pointage</h2>
            </div>
            <form action="modules/pointage/traitement_recherche_pointage.php" method="POST">
                <?php 
                    include('modules/pointage/requete/requete_valider.php');
                    $row = $stmt->fetch(PDO::FETCH_ASSOC);
                    $aujourdhui = date("Y-m-d");
                    if(!empty($row)){
                        $dateHeure = $row['DateHeure'];
                        $timestamp = strtotime($dateHeure); 
                        $newDate = date("Y-m-d", $timestamp);
                        // echo $newDate;
                    }
                ?>
                <?php
                    if(isset($newDate)){
                        if($newDate == $aujourdhui && $_SESSION['sess_user_id'] == $row['Idsalarie']){
                            include('modules/pointage/validation_pointage.php');
                        }
                        else{
                            include("modules/pointage/pointage_case.php");
                        }
                    }
                    else{
                        include("modules/pointage/pointage_case.php");
                    }
                ?>
            </form>
        </div> 
       </section>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="js/misc.js"></script>
</body>
</html>