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
        //Get ID Connected User
        $_SESSION["ID_UserDenonciateur"] = $tab["ID_Users"];
        //Set for UpdateUser
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
    }
    else {
        header('Location: ../V/get1_error.php');
    }
}


}