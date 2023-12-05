<?php
/*Include the class of the object*/
include 'Client.class.php';
include 'Compte.class.php';
/*Instanciate a new object of class Client*/
$client = new Client("EE111222", "DUPONT", "Michel", "0606060606");
/*Call method to view customer informations*/
$afficher = $client->afficher();
echo $afficher;
/*Instanciate a new object of class Compte*/
$compte = new Compte(0, 2000, "EE111222");
/*Call method to view account informations*/
$afficherCpt = $compte->afficher();
echo $afficherCpt;
/*Ask amount and call method to credit an account*/
$credit = readline ("Quel montant souhaitez-vous créditer ? : ");
$nouveauSolde = $compte->crediter($credit);
echo "Votre nouveau solde est de : ".$nouveauSolde."\n";
/*Ask amount and call method to debit an account*/
$debit = readline ("Quel montant souhaitez-vous débiter ? : ");
$nouveauSolde = $compte->debiter($debit);
echo "Votre nouveau solde est de : ".$nouveauSolde."\n";
/*Ask amount and call method to credit an account from another*/
$montant = readline ("Quel montant souhaitez-vous débiter ? : ");
$soldeCredit = $compte->crediterCpt($montant, $compte);
echo "Votre nouveau solde est de : ".$soldeCredit;
