<?php
include_once "Personne.class.php";
class Developpeur extends Personne {
/*Initialisation attributes*/
    private String $_specialite;
/*Method to construct*/
    public function __construct($nom, $prenom, $mail, $telephone, $salaire, $_specialite) {
        parent::__construct($nom, $prenom, $mail, $telephone, $salaire);
        $this->specialite = $_specialite;
    }
/*Method to calculate the salary*/
    public function calculerSalaire() : float {
        return $this->salaire * 1.20;
    }
/*Method to display*/
    public function afficher() : String {
        $return = "Salaire du développeur $this->nom $this->prenom : $this->salaire €. Spécialité : $this->specialite\n" ;
        return $return;
    }
}
?>