<?php
include "../M/DbManagement.class.php";

session_start();
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
?>