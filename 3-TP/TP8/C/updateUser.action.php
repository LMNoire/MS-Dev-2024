<?php
/** @author  farid  mekentichifa@gmailcom */
include_once "../M/DbManagement.class.php";

// recuperation données methode post 
$nom = $_POST['nom'];
$fprenom = $_POST['prenom'];
$mail = $_POST['mail'];
$tel = $_POST['tel'];

// apppel des fonctions update
DbManagement::updateUserNom($nom);
DbManagement::updateUserPrenom($prenom);
DbManagement::updateUserMail($mail);
DbManagement::updateUserTel($tel);
// rediection
header('Location: ../V/displayUser.php');

?>