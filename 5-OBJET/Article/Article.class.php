<?PHP
/*Class Article*/
class Article {
/*Attributs (or Properties) of the class*/
    private string $reference;
    private string $designation;
    private float $prixHt;
    public const TVA = 20;
/**
* Get the value of reference
*/ 
public function getReference() {
    return $this->reference;
    }
/**
* Set the value of reference
*
* @return  self
*/ 
public function setReference($reference) {
    $this->reference = $reference;
    return $this;
    }
/**
* Get the value of designation
*/ 
public function getDesignation() {
    return $this->designation;
    }
/**
* Set the value of designation
*
* @return  self
*/ 
public function setDesignation($designation) {
        $this->designation = $designation;
        return $this;
    }
/**
* Get the value of prixHt
*/ 
public function getPrixHt() {
    return $this->prixHt;
    }
/**
* Set the value of prixHt
*
* @return  self
*/ 
public function setPrixHt($prixHt) {
    $this->prixHt = $prixHt;
    return $this;
    }
/*Instanciate the object with magic function __construct and properties, but only reference and designation*/
public function __construct(string $reference, string $designation){
    $this->reference = $reference;
    $this->designation = $designation;
    }
/*Method to calculate the price of an article*/
public function calculerPrix() : float {
    $prixHT = readline ("Prix de l'article : ");
    $prix = $prixHT+(self::TVA*($prixHT)/100);
    return $prix;
    }
// /*Method to get info about an article*/
// public function afficherArticle() : mixed {
//     return $this->reference."\n".
//     $this->designation."\n".
//     $this->prixHt."\n".
//     $this->tva."\n";
//     }
}

?>