<?PHP
/*Include Personne.class*/
include "Personne.class.php" ;
/*Create a new class object Etudiant, extends from Personne*/
class Etudiant extends Personne {
    private string $cne ;
/*Instanciate the object*/     
public function __construct(string $cne, int $id, string $nom, string $prenom) {
    $this->cne = $cne ;
    parent::__construct($id, $nom, $prenom) ;
    }
/*Magic method toString*/
public function __toString() : string {
    return parent::__toString()." mon CNE est : ".$this->cne ;
    }
/*Start of getters and setters*/ 
/**
* Get the value of cne
*/ 
public function getCne() {
    return $this->cne;
    }
/**
* Set the value of cne
*
* @return  self
*/ 
public function setCne($cne) {
    $this->cne = $cne;
    return $this;
    }
/*End of getters and setters*/  
}