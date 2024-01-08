<?php
/** @author Jérémy.D <jeremydecreton@live.fr> */
include_once "User.class.php";
include_once "Penality.class.php";
class Offence
{
//Attributes
    private User $denonciateur;
    private Penality $penalite;
    private User $contrevenant;

//Methods
    //Construct 
        public function __construct(User $denonciateur, Penality $penalite, User $contrevenant) {
            $this->contrevenant = $contrevenant;
            $this->penalite = $penalite;
            $this->denonciateur = $denonciateur;
            $this->nom = $contrevenant->getNom();
            $this->prenom = $contrevenant->getPrenom();
            $this->codeInfraction = $penalite->getCodeInfraction();
            $this->libelle = $penalite->getLibelle();
            $this->montant = $penalite->getMontant();
        }

    /**
     * Get the value of denonciateur
     */ 
    public function getDenonciateur()
    {
        return $this->denonciateur;
    }

    /**
     * Get the value of penalite
     */ 
    public function getPenalite()
    {
        return $this->penalite;
    }

    /**
     * Get the value of contrevenant
     */ 
    public function getContrevenant()
    {
        return $this->contrevenant;
    }
}
?>