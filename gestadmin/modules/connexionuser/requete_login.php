<?php
    $msg = ""; 
    if(isset($_POST['submitBtnLogin'])) {
      $username = trim($_POST['username']);
      $password = $_POST['password'];
      $role = $_POST['role'];
      if($username != "" && $password != "") {
        try {
          if($role == "Admin"){
            $query = "SELECT * FROM `adminrh` WHERE Identifiant=:username AND Motdepasse=:password";
          }
          elseif($role == "Salarie"){
            $query = "SELECT * FROM `salarie` WHERE Identifiant=:username AND Motdepasse=:password";
          }
          $stmt = $db->prepare($query);
          $stmt->bindParam('username', $username, PDO::PARAM_STR);
          $stmt->bindValue('password', $password, PDO::PARAM_STR);
          $stmt->execute();
          $count = $stmt->rowCount();
          $row = $stmt->fetch(PDO::FETCH_ASSOC);
          if($count == 1 && !empty($row)) {
            // valid login
            if($role == "Admin"){
              $_SESSION['sess_user_id'] = $row['Idadminrh'];
              $_SESSION['sess_user_nom'] = $row['Nom'];
              $_SESSION['sess_user_prenom'] = $row['Prenom'];
              header('location:http://localhost/pointageSalarie/gestadmin/modules/employes/lister/listes_employes.php');    
            }
            else{
              $_SESSION['sess_user_id'] = $row['Idsalarie'];
              $_SESSION['sess_user_nom'] = $row['Nom'];
              $_SESSION['sess_user_prenom'] = $row['Prenom'];
              $_SESSION['sess_user_role'] = $role;
              header('location:http://localhost/pointageSalarie/gestadmin/pointage.php');    
            }
            } else {
              $msg = "Identifiant ou mot de passe incorrect!";
              // invalid password
            }
          //$_SESSION['sess_user_image'] = $row['Image'];
        } catch (PDOException $e) {
          echo "Error : ".$e->getMessage();
        }
      } else {
        $msg = "Remplir les champs requis!";
      }
      //echo $e;
    }
    ?>
