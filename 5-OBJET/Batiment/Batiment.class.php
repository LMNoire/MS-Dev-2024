<?PHP
/*Create a new class object Batiment*/
class Batiment {
/*Attributs (or Properties) of the class*/
    protected string $adresse ;
    protected float $superficie ;
/*Instanciate the object*/    
public function __construct(string $adresse, float $superficie) {
    $this->adresse = $adresse ;
    $this->superficie = $superficie ;
    }
/*Magic method toString*/
public function __toString() : string {
    return "L'addresse du bâtiment est : ".$this->getAdresse()."\n".
    "La superficie du bâtiment est de : ".$this->getSuperficie()."\n" ;
    }
/*Start of getters and setters*/      
/**
* Get the value of adresse
*/ 
public function getAdresse() {
    return $this->adresse;
    }
/**
* Set the value of adresse
*
* @return  self
*/ 
public function setAdresse($adresse) {
    $this->adresse = $adresse;
    return $this;
    }
/**
* Get the value of superficie
*/ 
public function getSuperficie() {
    return $this->superficie;
    }
/**
* Set the value of superficie
*
* @return  self
*/ 
public function setSuperficie($superficie) {
    $this->superficie = $superficie;
    return $this;
    }
/*End of getters and setters*/      
}