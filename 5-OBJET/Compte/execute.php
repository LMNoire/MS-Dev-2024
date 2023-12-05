<?php
include "Compte.class.php";




// $client1->afficher();
$client1 = new Client ("EE111222", "Salim", "Omar", "0611111");
echo "Détails du compte:" ."\n";
echo "**********************" ."\n";
$compte1 = new Compte ($client1, 0);
$compte1->afficherCompte();
echo "**********************" ."\n";

echo "Donner le montant à déposer: ".$compte1->crediter(5000)."\n";
echo "Opération bien effectuée" ."\n";
echo "**********************" ."\n";
$compte1->afficherCompte();
echo "**********************" ."\n";


echo "Donner le montant à retirer: ".$somme = 1000 ."\n";
$compte1->debiter($somme);
echo "Opération bien effectuée" ."\n";
echo "**********************" ."\n";
$compte1->afficherCompte();


$client2 = new Client ("EE333444", "Karimi", "samir", "0622222");
echo "Détails du compte:" ."\n";
echo "**********************" ."\n";
$compte2 = new Compte ($client2, 0);
$compte2->afficherCompte();
echo "**********************" ."\n";

echo "Créditer le compte 2 à partir du compte 1 ". "\n";
echo "Donner le montant à déposer: ".$somme = 3000 ."\n";
$compte2->crediterCpt($somme, $compte1);
echo "Opération bien effectuée" ."\n";
echo "Créditer le compte 1 et créditer le com ". "\n";
echo "Donner le montant à retirer: ".$somme = 1000 ."\n";
$compte1->debiterCpt($somme, $compte2);
echo "Opération bien effectuée" ."\n";
echo "**********************" ."\n";


$compte1->afficherCompte();
echo "**********************" ."\n";
$compte2->afficherCompte();
echo "**********************" ."\n";


$compte1->afficherNbCompte();
