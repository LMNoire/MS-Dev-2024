<?PHP
/*Name of the class Employe*/
class Employe {
/*Attributs (or Properties) of the class*/
    private string $matricule;
    private string $nom;
    private string $prenom;
    private string $dateNaissance;
    private string $dateEmbauche;
    private float $salaire;
/*Instanciate the object*/
public function __construct(string $matricule, string $nom, string $prenom, string $dateNaissance, string $dateEmbauche, float $salaire) {
    $this->matricule = $matricule;
    $this->nom = $nom;
    $this->prenom = $prenom;
    $this->dateNaissance = $dateNaissance;
    $this->dateEmbauche = $dateEmbauche;
    $this->salaire = $salaire;
    }
/*Start of getters and setters*/        
/**
* Get the value of matricule
*/ 
public function getMatricule() {
    return $this->matricule;
    }
/**
* Set the value of matricule
*
* @return  self
*/ 
public function setMatricule($matricule) {
    $this->matricule = $matricule;
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
* Get the value of dateEmbauche
*/ 
public function getDateEmbauche() {
    return $this->dateEmbauche;
    }
/**
* Set the value of dateEmbauche
*
* @return  self
*/ 
public function setDateEmbauche($dateEmbauche) {
    $this->dateEmbauche = $dateEmbauche;
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
/*Get the age of employee*/
public function age() : int {
    $age = date("Y") - date("Y", strtotime($this->dateNaissance));
    return $age."\n";
    }
/*Get seniority of employee*/
public function anciennete() : int {
    $anciennete = date("Y") - date("Y", strtotime($this->dateEmbauche));
    return $anciennete."\n";    
    }
/*Raise salary*/
public function augmentationDuSalaire($anciennete) : float {
    if ($anciennete > 10) {
        $salaireAugm = ($this->getSalaire()+(($this->getSalaire()*10)/100));
        return $salaireAugm;
        }
    elseif ($anciennete > 5 && $anciennete <= 10) {
        $salaireAugm = ($this->getSalaire()+(($this->getSalaire()*5)/100));
        return $salaireAugm;
        }
    elseif ($anciennete <= 5) {
        $salaireAugm = ($this->getSalaire()+(($this->getSalaire()*2)/100));
        return $salaireAugm;
        }
    }
/*Display employee*/
public function AfficherEmployé() {
    echo "Matricule : ".$this->getMatricule()."\n";
    echo "Nom complet : ".$this->getNom()." ".$this->getPrenom()."\n";
    echo "Age : ".$age = $this->age()."\n";
    echo "Ancienneté : ".$anciennete = $this->anciennete()."\n";
    echo "Salaire : ".$salaire = $this->augmentationDuSalaire($anciennete);    
    }
}
?>