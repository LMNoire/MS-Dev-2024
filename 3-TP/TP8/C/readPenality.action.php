<?php
include_once "../M/DbManagement.class.php";
session_start();
$_SESSION["tab_penality"] = DBManagement::readPenality();
?>