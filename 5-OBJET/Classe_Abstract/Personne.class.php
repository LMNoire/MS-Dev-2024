<?php
abstract class Personne {
/*Initialisation attributes*/
    public static $cpt ;
    protected int $id ;
    protected String $nom ;
    protected String $prenom ;
    protected String $mail ;
    protected String $telephone ;
    protected float $salaire ;
/*Method to construct*/
    public function __construct($nom, $prenom, $mail, $telephone, $salaire) {
        self::$cpt++;
        $this->id = self::$cpt;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->mail = $mail;
        $this->telephone = $telephone;
        $this->salaire = $salaire;
    }
/*Method to calculate the salary*/
    abstract function calculerSalaire();
}
?>