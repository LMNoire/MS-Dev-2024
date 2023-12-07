<?PHP
/*Create a new class object Professeur, extends from Employe*/
class Professeur extends Employe {
    private string $specialite ;
/*Instanciate the object*/ 
public function __construct(string $specialite, $salaire, int $id, string $nom, string $prenom) {
    $this->specialite = $specialite ;
    parent::__construct($salaire, $id, $nom, $prenom) ;
    }
/*Magic method toString*/
public function __toString() : string {
    return parent::__toString()." ma spécialité est : ".$this->specialite ;
    }
/*Start of getters and setters*/ 
/**
* Get the value of specialite
*/ 
public function getSpecialite() {
    return $this->specialite;
    }
/**
* Set the value of specialite
*
* @return  self
*/ 
public function setSpecialite($specialite) {
    $this->specialite = $specialite;
    return $this;
    }
/*End of getters and setters*/ 
}