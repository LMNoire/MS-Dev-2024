<?php
/*Include classes*/
include_once "Developpeur.class.php";
include_once "Manager.class.php";
/*Instantiate classes into an array*/
$employes = [
$employe1 = new Manager ("LACHGAR", "Jean", "jean.lachgar@toubkalit.com", "0611111111", "2100", "Manager"),
$employe2 = new Manager ("MARTIN", "Omar", "omar.martin@toubkalit.com", "0622222222", "3000", "Manager"),
$employe3 = new Developpeur ("COULOMBEL", "Selim", "selim.coulombel@toubkalit.com","0633333333", "5000", "JS" ),
$employe4 = new Developpeur ("MARTIN", "Salim", "salim.martin@toubkalit.com", "0644444444", "3000", "PHP" ),
];
/*Foreach employe, display results*/
foreach ($employes as $employe) {
    $stmt = $employe->afficher();
    echo "$stmt";
}
?>