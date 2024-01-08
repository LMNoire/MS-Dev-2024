<?php
/** @author  farid  mekentichifa@gmailcom */
include_once "../M/DbManagement.class.php";


// recuperation variable methode post 
$nom = $_POST['nom'];
$fprenom = $_POST['prenom'];
$mail = $_POST['mail'];
$tel = $_POST['tel'];
$password = $_POST[ "password"];

// creation objet a suprimer
$user = new User ($name, $firstname, $mail, $tel, $password);

//appel de la fonction delete
DbManagement::deleteUser($user);
header('Location: ../V/displayUser.php');
?>