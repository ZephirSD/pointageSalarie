<?php
session_start();
$_SESSION['sess_user_id'] = "";
$_SESSION['sess_user_nom'] = "";
$_SESSION['sess_user_prenom'] = "";
$_SESSION['sess_user_role'] = "";
if(empty($_SESSION['sess_user_id'])) header("location: http://localhost/pointageSalarie/index.php");

?>