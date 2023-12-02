<?PHP
/*IMPORTANT : LET METHODS/FUNCTIONS BE GENERICS AND REUSABLES, DO NOTE WRITE SPECIFIC TEXT WHEN RETURN RESULT, WRITE IT IN THE EXECUTE*/
/*Name of the class, start with Capitale letter and CamelCase*/
class Rectangle 
{
/*Attributs (or Properties) of the class*/
    private int $longueur;
    private int $largeur;
/*Instantiate the object with magic function __construct and properties*/
public function __construct(int $long, int $larg) {
    $this->longueur = $long;
    $this->largeur = $larg;
    }
/**
* Get the value of longueur
*/ 
public function getLongueur() {
    return $this->longueur;
    }
/**
* Set the value of longueur
*
* @return  self
*/ 
public function setLongueur($longueur) {
    $this->longueur = $longueur;
    return $this;
    }
/**
* Get the value of largeur
*/ 
public function getLargeur() {
    return $this->largeur;
    }
/**
* Set the value of largeur
*
* @return  self
*/ 
public function setLargeur($largeur) {
    $this->largeur = $largeur;
    return $this;
    }
/*Method to get the perimeter*/
public function perimetre() : string {
    $perimetre = ($this->longueur*2)+($this->largeur*2); 
    return "Le périmètre de ce rectangle est de : "."$perimetre";
    }
/*Method to get the square of the rectangle*/
public function aireRectangle() : string {
    $aire = ($this->longueur*$this->largeur);
    return "L'aire de ce rectangle est de : "."$aire";
    }
/*Method to tell if it's a square or a rectangle*/
public function estCarre() : string {
    if ($this->longueur==$this->largeur) {
        return "C'est un carré";
    }
    elseif ($this->longueur!=$this->largeur) {
        return "Ce n'est pas un carré";
    }
    }
/*Method to return all the properties and functions of the object rectangle*/
public function afficherRectangle($perimetre, $aire) : string {
    return "Longueur : ".$this->longueur." - ".
    "Largeur : ".$this->largeur." - ".
    "Perimetre : ".$perimetre." - ".
    "Aire : ".$aire." - ";
    }
}

?>