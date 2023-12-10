<?php
/*Include camion and voiture classes*/
include_once "Camion.class.php";
include_once "Voiture.class.php";
/*Instanciate two objects*/
$voiture = new Voiture(2022, 30000);
$camion = new Camion(2020, 50000);
/*Echo results*/
echo "Voiture : ".$voiture."\n" ;
echo "Camion : ".$camion."\n" ;
/*Call methods to test vehicules*/
$voiture->demarrer();
$voiture->accelerer();
$camion->demarrer();
$camion->accelerer();
?>