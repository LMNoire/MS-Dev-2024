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
        $_SESSION ["nom_user"] = $tab["Nom"];
        $_SESSION ["prenom_user"] =$tab["Prenom"];
        $_SESSION ["mail_user"] = $tab["Mail"];
        $_SESSION ["tel_user"] = $tab["Tel"];
        //All users in one tab
        $_SESSION["tab_user"] = DBManagement::getAllUsers();
        //All users in this tab for sorting "cpt-denonciations"
        $_SESSION["topDenonciation"] = $_SESSION["tab_user"];
        usort($_SESSION["topDenonciation"], function ($a, $b){
            return $b["cpt_denonciations"] - $a["cpt_denonciations"];
        });
        //All users in another tab for sorting "cpt_casier"
        $_SESSION["topContrevenant"] = $_SESSION["tab_user"];
        usort($_SESSION["topContrevenant"] , function ($a, $b){
            return $b["cpt_casier"] - $a["cpt_casier"];
        });
        // SQL Sum to add debt
        for ($i=0; $i < sizeof($_SESSION["tab_user"]) ; $i++) {
            $_SESSION["tab_user"][$i]["total_debt"] = DBManagement::offenceSum($_SESSION["tab_user"][$i]["Nom"] );
            
        }
header("Location:../V/displayUser.php");
        exit();
    }

?>