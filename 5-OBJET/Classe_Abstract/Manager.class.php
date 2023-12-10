<?php
include_once "Personne.class.php";
class Manager extends Personne {
/*Initialisation attributes*/
    private String $_service;
/*Method to construct*/
    public function __construct($nom, $prenom, $mail, $telephone, $salaire,$_service) {
        parent::__construct($nom, $prenom, $mail, $telephone, $salaire);
        $this->service = $_service;
    }
/*Method to calculate the salary*/
    public function calculerSalaire() : float {
        return $this->salaire * 1.35;
    }
/*Method to display*/
    public function afficher() : void {
        echo "Salaire du manager $this->nom $this->prenom : $this->salaire €. Service : $this->service \n";
    }
}
?>