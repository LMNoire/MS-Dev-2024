<?PHP
/**
* @author Selim.C (selim.coulombel@live.fr)
*/ 
/*Init class Penality*/
class Penality {
    private int $codeInfraction ;
    private string $libelle ;
    private float $montant ;
/*Construct method*/
public function __construct(int $codeInfraction, string $libelle, float $montant) {
        $this->codeInfraction = $codeInfraction ;
        $this->libelle = $libelle ;
        $this->montant = $montant ;
    }
public function __toString() : string {
    return "Code infraction : ".$this->codeInfraction."\n"."Libellé : ".$this->libelle."\n"."Montant : ".$this->montant." €" ;
    }
/*Start get & set*/
/**
* Get the value of codeInfraction
*/ 
public function getCodeInfraction() {
    return $this->codeInfraction;
    }
/**
* Set the value of codeInfraction
*
* @return  self
*/ 
public function setCodeInfraction($codeInfraction) {
    $this->codeInfraction = $codeInfraction;
    return $this;
    }
/**
* Get the value of Libelle
*/ 
public function getLibelle() {
    return $this->libelle;
    }
/**
* Set the value of Libelle
*
* @return  self
*/ 
public function setLibelle($Libelle) {
    $this->Libelle = $Libelle;
    return $this;
    }
/**
* Get the value of Montant
*/ 
public function getMontant() {
    return $this->montant;
    }
/**
* Set the value of Montant
*
* @return  self
*/ 
public function setMontant($montant) {
    $this->montant = $montant;
    return $this;
    }
/*End get & set*/
}

?>