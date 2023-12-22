<?php
include "../M/User.class.php";
include "../M/DbManagement.class.php";

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $mail = $_POST['mail'];
    $password = $_POST['password'];

    if (trim($_POST['mail'])&&trim($_POST['password'])== !NULL ) {
        if(DbManagement::loginUser($mail, $password)){
        $_SESSION["autoriser"] = "oui";
        $tab = (DbManagement::readUser($mail)[0]);
        $_SESSION["denonciateur"] = new User ($tab["Nom"],$tab["Prenom"],$tab['Mail'], $tab['Tel'], $tab['Password']);
        header('Location: ../C/readUser.action.php');
    }
    else {
        header('Location: ../V/get1_error.php');
    }
}


}