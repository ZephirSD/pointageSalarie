<?php
    session_start();
    include("modules/connexiondb/connexiondb.php");
	include("modules/connexionuser/requete_login.php");
    $role = $_GET['Role'];
    $_SESSION['role'] = $role;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Système de Connexion</title>
</head>
<body>
    <section id="case-connect">
        <div class="link-account">
            <a href="../index.php">
                <i class="fas fa-chevron-left" id="icon-return"></i>
            </a>
        </div>
        <form action="" method="post">
            <div class="grid-connexion">
                <div class="identifiant">
                    <label for="" class="label-form">Identifiant</label>
                    <input type="hidden" name="role" value="<?php echo($role);?>">
                    <input type="text" name="username" class="input-connect" autocomplete="off">
                </div>
                <div class="password">
                    <label for="" class="label-form">Mot de passe</label>
                    <input type="password" name="password" class="input-connect">
                </div>
                <div class="submit">
                    <button type="submit" name="submitBtnLogin" class="boutton-connect">Se connecter</button>
                </div>
                <!-- <div class="submit">
                    <button class="boutton-connect"><a href="motdepasseoublie.php?Role=<?php echo ($role)?>&Role2=<?php if(isset($role2)){echo($role2);} ?>">Mot de passe oublié</a></button>
                </div> -->
                <span class="loginMsg"><?php echo @$msg;?></span>
            </div>
        </form>
    </section>
</body>
</html>