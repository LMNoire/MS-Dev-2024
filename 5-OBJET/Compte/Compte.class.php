<?php
include "Client.class.php";
class Compte
{
    private Client $client;
    private int $solde;
    private int $numCompte;
    public static $code;

    public function __construct(Client $client, $solde){
        $this->client = $client;
        $this->solde = $solde;
        self::$code++;
        $this->numCompte = self::$code;
        
    }

    public function crediter($montant): float{
        $crediter = $this->solde += $montant; 
        return $crediter;
    }

    public function crediterCpt($montant, $compte): float{
        $this->solde += $montant ;
        return $compte->solde -= $montant;
     
    }

    public function debiter($montant): float{
        $debiter = $this->solde -= $montant;
        return $debiter;
    }

    public function debiterCpt($montant, $compte): float{
        $this->solde -= $montant ;
        return $compte->solde += $montant;
    }

    public function afficherCompte(): void{
        echo "Numéro de compte: " .$this->numCompte . "\n";
        echo "Solde du compte: " .$this->solde . "\n";
        echo "Propriétaire du compte: " ."\n";
        echo "CIN: ".$this->client->getCIN(). "\n";
        echo "NOM: ".$this->client->getName(). "\n";
        echo "Prénom: ".$this->client->getFirstname(). "\n";
        echo "Tel: ".$this->client->getTel(). "\n";

    }

    public function afficherNbCompte(): void{
        echo "Le nombre de comptes crées: " . self::$code;
    }

    /**
     * Get the value of client
     */ 
    public function getClient()
    {
        return $this->client;
    }

    /**
     * Set the value of client
     *
     * @return  self
     */ 
    public function setClient($client)
    {
        $this->client = $client;

        return $this;
    }

    /**
     * Get the value of solde
     */ 
    public function getSolde()
    {
        return $this->solde;
    }

    /**
     * Set the value of solde
     *
     * @return  self
     */ 
    public function setSolde($solde)
    {
        $this->solde = $solde;

        return $this;
    }

    /**
     * Get the value of numCompte
     */ 
    public function getNumCompte()
    {
        return $this->numCompte;
    }

    /**
     * Set the value of numCompte
     *
     * @return  self
     */ 
    public function setNumCompte($numCompte)
    {
        $this->numCompte = $numCompte;

        return $this;
    }
}