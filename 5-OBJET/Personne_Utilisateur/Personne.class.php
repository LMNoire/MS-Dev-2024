<?PHP
/*Create a new class object Personne*/
class Personne {
    protected int $id ;
    protected string $nom ;
    protected string $prenom ;
    protected string $mail ;
    protected string $telephone ;
    protected float $salaire ;
/*Instanciate the object*/
public function __construct(int $id, string $nom, string $prenom, string $mail, string $telephone, float $salaire) {
    $this->id = $id ;
    $this->nom = $nom ;
    $this->prenom = $prenom ;
    $this->mail = $mail ;
    $this->telephone = $telephone ;
    $this->salaire = $salaire ;
    }
/*Method to display Personne*/
public function afficher() {
    echo "Identité : ".$this->nom." ".$this->prenom."\nMail : ".$this->mail."\nTelephone : ".$this->telephone."\nSalaire : ".$this->salaire."€\n" ;
    }
/*Method to calculate the salary*/
public function calculerSalaire() : float {
    return $this->salaire ;
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
* Get the value of mail
*/ 
public function getMail() {
    return $this->mail;
    }
/**
* Set the value of mail
*
* @return  self
*/ 
public function setMail($mail) {
    $this->mail = $mail;
    return $this;
    }
/**
* Get the value of telephone
*/ 
public function getTelephone() {
    return $this->telephone;
    }
/**
* Set the value of telephone
*
* @return  self
*/ 
public function setTelephone($telephone) {
    $this->telephone = $telephone;
    return $this;
    }
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