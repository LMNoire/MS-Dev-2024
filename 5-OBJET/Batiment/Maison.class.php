<?PHP
/*Include Batiment.class*/
include "Batiment.class.php" ;
/*Create a new class object Maison, extends from Batiment*/
class Maison extends Batiment {
    private int $nbPieces ;
/*Instanciate the object*/   
public function __construct(string $adresse, float $superficie, int $nbPieces) {
    $this->nbPieces = $nbPieces ;
    parent::__construct($adresse, $superficie) ;
    }
/*Magic method toString*/
public function __toString() : string {
    return "L'addresse du bâtiment est : ".$this->getAdresse()."\n".
    "La superficie du bâtiment est de : ".$this->getSuperficie()."\n".
    "Le nombre de pièces est de : ".$this->getNbPieces() ;
    }
/*Start of getters and setters*/     
/**
* Get the value of nbPieces
*/ 
public function getNbPieces() {
    return $this->nbPieces;
    }
/**
* Set the value of nbPieces
*
* @return  self
*/ 
public function setNbPieces($nbPieces) {
    $this->nbPieces = $nbPieces;
    return $this;
    }
/*End of getters and setters*/   
}
