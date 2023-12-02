<?PHP
/*Class Book*/
class Livre {
/*Attributs (or Properties) of the class*/
    private string $titre;
    private string $auteur;
    private int $prix;
/*Instanciate the object with magic function __construct and properties*/
public function __construct(string $titre, string $auteur, int $prix){
    $this->titre = $titre;
    $this->auteur = $auteur;
    $this->prix = $prix;
}
/**
* Get the value of titre
*/ 
public function getTitre() {
    return $this->titre;
    }
/**
* Set the value of titre
*
* @return  self
*/ 
public function setTitre($titre) {
    $this->titre = $titre;
    return $this;
    }
/**
* Get the value of auteur
*/ 
public function getAuteur() {
    return $this->auteur;
    }
/**
* Set the value of auteur
*
* @return  self
*/ 
public function setAuteur($auteur) {
    $this->auteur = $auteur;
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
/*Method to return info about the book*/
public function afficher() : mixed {
    return "Donner le titre : ".$this->titre."\n".
    "Donner l'auteur : ".$this->auteur."\n".
    "Donner le prix : ".$this->prix."\n".
    "Le titre est : ".$this->titre."\n".
    "L'auteur est : ".$this->auteur."\n".
    "le prix est : ".$this->prix."\n".
    "Titre: ".$this->titre.", Auteur: ".$this->auteur.", Prix: ".$this->prix;
    }
}