<?php
include_once "../M/DbManagement.class.php";
session_start();
$_SESSION["tab_offence"] = DBManagement::readOffence();
DBManagement::updateOffence($_POST["nom"]);
$_SESSION["tab_offence"] = DBManagement::readOffence();

//Header
header("Location: ../V/displayOffence.php");
?>