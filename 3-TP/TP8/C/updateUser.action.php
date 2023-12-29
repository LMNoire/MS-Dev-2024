<?php
/** @author  farid  mekentichifa@gmailcom */
include_once "../M/DbManagement.class.php";

// recuperation données methode post 

$id = $_POST['ID'];
$select = $_POST['colunn'];
if ($select == "Probablement pas"){
echo "ça ne fonctionne pas";
}
// apppel des fonctions update
if ($select == "nom") {
    $nom = $_POST["info"];
    DbManagement::updateUserNom($id,$nom);
    header('Location: ../C/readUser.action.php');
    exit();
} elseif ($select == "prenom") {
    $prenom = $_POST["info"];
    DbManagement::updateUserPrenom($id,$prenom);
    header('Location: ../C/readUser.action.php');
    exit();
} elseif ($select == "mail") {
    $mail = $_POST["info"];
    if (filter_var($mail, FILTER_VALIDATE_EMAIL) === false) {
        echo "Votre adresse mail n'est pas valide /*/";
        echo "Patience est mère de vertue";
        header("Refresh:5; url=../V/settingUser.php");
    } else {
    DbManagement::updateUserMail($id,$mail);
    header('Location: ../C/readUser.action.php');
    exit();
    }
} elseif ($select == "tel" ) {
    $tel = $_POST["info"];
    if (!is_numeric($tel)) {
        echo "Ne prend que des chiffres /*/ ";
        echo "Patience est mère de vertue";
        header("Refresh:5; url=../V/settingUser.php");
    } elseif (strlen($tel)< 10 || strlen($tel) > 10) {
    echo "Veuillez entrer un numéro de téléphone valide /*/ ";
    echo "Patience est mère de vertue";
    header("Refresh:5; url=../V/settingUser.php");
    } else {
        DbManagement::updateUserTel($id,$tel);
        header('Location: ../C/readUser.action.php');}
        exit();
}

?>