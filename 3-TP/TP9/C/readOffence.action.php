<?php
//Include path
include_once "../M/DbManagement.class.php";

//Session start
session_start();

//Récupérer offence depuis BDD
$_SESSION["tab_offence"] = DBManagement::readOffence();

//Header
header("Location: ../V/displayOffence.php");
?>