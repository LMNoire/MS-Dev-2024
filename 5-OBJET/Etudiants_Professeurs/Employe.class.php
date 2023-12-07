<?PHP
/*Create a new class object Employe, extends from Personne*/
class Employe extends Personne {
    protected float $salaire ;
/*Instanciate the object*/ 
public function __construct(float $salaire, int $id, string $nom, string $prenom) {
    $this->salaire = $salaire ;
    parent::__construct($id, $nom, $prenom) ;
    }
/*Magic method toString*/
public function __toString() : string {
    return parent::__toString()." mon salaire est de : ".$this->salaire."€" ;
    }
/*Start of getters and setters*/ 
/**
* Get the value of salaire
*/ 
public function getSalaire() {
    return $this->salaire;
    }
/**
* Set the value of salaire
*
* @return  self
*/ 
public function setSalaire($salaire) {
    $this->salaire = $salaire;
    return $this;
    }
/*End of getters and setters*/  
}