<?PHP
include "Filiere.class.php" ;
/*Name of the class Etudiant*/
class Etudiant {
/*Attributs (or Properties) of the class*/
    private static $id ;
    private string $nom ;
    private string $prenom ;
    private DateTime $dateNaissance ;
    private Filiere $filiere ;
/*Instanciate the object*/    
public function __construct(string $nom, string $prenom, DateTime $dateNaissance, Filiere $filiere) {
    self::$id++ ;
    $this->nom = $nom ;
    $this->prenom = $prenom ;
    $this->dateNaissance = $dateNaissance ;
    $this->filiere = $filiere ;
    }
/*Magic method toString*/
public function __toString() : string {
    return "Je suis l'étudiant ".$this->nom." ".$this->prenom." et ma date de naissance est le : ".$this->dateNaissance->format('Y/m/d') ;
    }
/*Start of getters and setters*/    
/**
* Get the value of id
*/ 
public function getId() {
    return $this->id;
    }
/**
* Set the value of id
*
* @return  self
*/ 
public function setId($id) {
    $this->id = $id;
    return $this;
    }
/**
* Get the value of nom
*/ 
public function getNom() {
    return $this->nom;
    }
/**
* Set the value of nom
*
* @return  self
*/ 
public function setNom($nom) {
    $this->nom = $nom;
    return $this;
    }
/**
* Get the value of prenom
*/ 
public function getPrenom() {
    return $this->prenom;
    }
/**
* Set the value of prenom
*
* @return  self
*/ 
public function setPrenom($prenom) {
    $this->prenom = $prenom;
    return $this;
    }
/**
* Get the value of dateNaissance
*/ 
public function getDateNaissance() {
    return $this->dateNaissance;
    }
/**
* Set the value of dateNaissance
*
* @return  self
*/ 
public function setDateNaissance($dateNaissance) {
    $this->dateNaissance = $dateNaissance;
    return $this;
    }
/**
* Get the value of filiere
*/ 
public function getFiliere() {
    return $this->filiere;
    }
/**
* Set the value of filiere
*
* @return  self
*/ 
public function setFiliere($filiere) {
    $this->filiere = $filiere;
    return $this;
    }
/*End of getters and setters*/
}