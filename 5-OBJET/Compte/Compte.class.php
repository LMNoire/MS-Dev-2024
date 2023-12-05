<?php
/*Name of the class*/
class Compte
{
/*Attributs (or Properties) of the class*/
    public static $cpt;
    private float $solde;
    private string $cinClient;
public function __construct($cpt, float $solde, string $cinClient) {
    self::$cpt++;
    $this->solde = $solde;
    $this->cinClient = $cinClient;
    }
/**
* Get the value of cpt
*/ 
public function getCpt() {
    return $this->cpt;
    }
/**
* Get the value of solde
*/ 
public function getSolde() {
    return $this->solde;
    }
/**
* Get the value of cinClient
*/ 
public function getCinClient() {
    return $this->cinClient;
    }
/**
* Set the value of cinClient
*
* @return  self
*/ 
public function setCinClient($cinClient) {
    $this->cinClient = $cinClient;
    return $this;
    }
/*Method to view account informations*/
public function afficher () : void {
    echo "Le numéro de compte est de : ".self::$cpt."\n";
    echo "Le solde du compte est de : ".$this->solde."\n";
    echo "Le CIN du client est de : ".$this->cinClient."\n";
    }
/*Method to credit the sold of an account*/
public function crediter (float $credit) : float {
    $this->solde += $credit;
    return $this->solde;
    }
/*Method to debit the sold of an account*/
public function debiter (float $debit) : float {
    $this->solde -= $debit;
    return $this->solde;
    }
public function crediterCpt($montant, $compte): float {
    $this->solde += $montant ;
    return $this->solde -= $montant;
    }
public function debiterCpt () {

    }
}
?>