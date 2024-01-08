<?php
/** @author Jérémy */
include_once "../M/DbManagement.class.php";
include_once "../M/User.class.php";

session_start();
$tab = (DBManagement::readContrevenant($_POST["nom"])[0]);
$_SESSION["contrevenant"] = new User ($tab["Nom"],$tab["Prenom"],$tab['Mail'], $tab['Tel'], $tab['Password']);

$_SESSION['nomContrevenant'] = $_SESSION['contrevenant']->getNom() ;
$_SESSION['prenomContrevenant'] = $_SESSION['contrevenant']->getPrenom() ;

header("Location:../V/addOffence.php");
?>