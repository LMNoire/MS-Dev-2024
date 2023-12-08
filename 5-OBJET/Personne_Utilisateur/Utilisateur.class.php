<?PHP
/*Include Personne.class*/
include "Personne.class.php" ;
/*Create a new class object Utilisateur, extends from Personne*/
class Utilisateur extends Personne {
    private string $login ;
    private string $password ;
    private string $service ;
    private Profil $profil ;
/*Instanciate the object*/ 
public function __construct(string $login, string $password, string $service, int $id, string $nom, string $prenom, string $mail, string $telephone, float $salaire, profil $profil) {
    $this->login = $login ;
    $this->password = $password ;
    $this->service = $service ;
    $this->profil = $profil ;
    parent::__construct($id, $nom, $prenom, $mail, $telephone, $salaire) ;
    }
/*Method to display Utilisateur*/
public function afficher() {
    echo parent::afficher() ;
    echo "Service : ".$this->service."\n" ;
    }
/*Method to calculate the salary*/
public function calculerSalaire() : float {
    if ($this->service == "Manager") {
        return $this->salaire = 1.1 * $this->salaire ;
    }
    if ($this->service == "Directeur général") {
        $this->salaire = 1.4 * $this->salaire ;
    }
    return $this->salaire ;
    }
/*Start of getters and setters*/ 
/**
* Get the value of login
*/ 
public function getLogin() {
    return $this->login;
    }
/**
* Set the value of login
*
* @return  self
*/ 
public function setLogin($login) {
    $this->login = $login;
    return $this;
    }
/**
* Get the value of password
*/ 
public function getPassword() {
    return $this->password;
    }
/**
* Set the value of password
*
* @return  self
*/ 
public function setPassword($password) {
    $this->password = $password;
    return $this;
    }
/**
* Get the value of service
*/ 
public function getService() {
    return $this->service;
    }
/**
* Set the value of service
*
* @return  self
*/ 
public function setService($service) {
    $this->service = $service;
    return $this;
    }
        /**
     * Get the value of profil
     */ 
    public function getProfil()
    {
        return $this->profil;
    }

    /**
     * Set the value of profil
     *
     * @return  self
     */ 
    public function setProfil($profil)
    {
        $this->profil = $profil;

        return $this;
    }
/*End of getters and setters*/


}