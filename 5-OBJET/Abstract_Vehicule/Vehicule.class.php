<?php
abstract class Vehicule {
/*Initialisation attributes*/
    private $matricule;
    private $anneeModele;
    private $prix;
    private static $nombreVehicules = 0;
/*Method to construct*/
    public function __construct($anneeModele, $prix) {
        self::$nombreVehicules++;
        $this->matricule = self::$nombreVehicules;
        $this->anneeModele = $anneeModele;
        $this->prix = $prix;
    }
/*Magic method toString*/
    public function __toString() {
        return "Matricule : ".$this->matricule.", Année du modèle : ".$this->anneeModele.", Prix : ".$this->prix;
    }
/*Abstract method to test vehicules*/
    abstract public function demarrer();
    abstract public function accelerer();
/*Start of getters and setters*/   
/**
* Get the value of matricule
*/ 
public function getMatricule() {
    return $this->matricule;
    }
/**
* Set the value of matricule
*
* @return  self
*/ 
public function setMatricule($matricule) {
    $this->matricule = $matricule;
    return $this;
    }
/**
* Get the value of anneeModele
*/ 
public function getAnneeModele() {
    return $this->anneeModele;
    }
/**
* Set the value of anneeModele
*
* @return  self
*/ 
public function setAnneeModele($anneeModele) {
    $this->anneeModele = $anneeModele;
    return $this;
    }
/**
* Get the value of prix
*/ 
public function getPrix() {
    return $this->prix;
    }
/**
* Set the value of prix
*
* @return  self
*/ 
public function setPrix($prix) {
    $this->prix = $prix;
    return $this;
    }
}
?>