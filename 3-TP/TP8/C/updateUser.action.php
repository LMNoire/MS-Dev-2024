<?php
/** @author  farid  mekentichifa@gmailcom */
include_once "../M/DbManagement.class.php";
include_once "../M/User.class.php";
session_start();

// recuperation données methode post 
$id = $_SESSION["ID_UserDenonciateur"];
// apppel des fonctions update

    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $mail = $_POST["mail"];
    $tel = $_POST["tel"];
    if (filter_var($mail, FILTER_VALIDATE_EMAIL) === false) {
        echo "Votre adresse mail n'est pas valide /*/";
        echo "Patience est mère de vertue";
        header("Refresh:5; url=../V/settingUser.php");
    } elseif (!is_numeric($tel)) {
        echo "Ne prend que des chiffres /*/ ";
        echo "Patience est mère de vertue";
        header("Refresh:5; url=../V/settingUser.php");
    } elseif (strlen($tel)< 10 || strlen($tel) > 10) {
    echo "Veuillez entrer un numéro de téléphone valide /*/ ";
    echo "Patience est mère de vertue";
    header("Refresh:5; url=../V/settingUser.php");
    } else {
        DbManagement::updateUser($id,$tel,$nom,$prenom,$mail);
        $tab = (DbManagement::readUser($mail)[0]);
        $_SESSION["denonciateur"] = new User ($tab["Nom"],$tab["Prenom"],$tab['Mail'], $tab['Tel'], $tab['Password']);
        header('Location: ../C/readUser.action.php');
        exit();
    }

?>