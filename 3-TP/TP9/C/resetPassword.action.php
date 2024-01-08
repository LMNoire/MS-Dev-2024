<?php
include "../M/DbManagement.class.php";

$token = urlencode($_GET["token"]);
// var_dump($token);
$result = DbManagement::getTokenHash($token);



if ($result === "Token not found") {
    // Rediriger vers une page d'erreur
    header("Location: ../V/get1_error.php");
    exit();
} elseif ($result === "Token has expired") {
    // Rediriger vers une page d'erreur
    header("Location: ../V/get1_error.php");
    exit();
} else {
    // Rediriger vers la page de réinitialisation du mot de passe

    header("Location: ../V/resetPassword.php?token=$token");
    exit();
}
