<?php

class Client
{
    private String $CIN;
    private string $name;
    private string $firstname;
    private string $tel;

    public function __construct($CIN, $name, $firstname, $tel){
        $this->CIN = $CIN;
        $this->name = $name;
        $this->firstname = $firstname;
        $this->tel = $tel;
    }

    public function afficher(): void{
        echo "CIN : ".$this->CIN ."\n";
        echo "Le nom : ".$this->name."\n";
        echo "Le prénom : ".$this->firstname."\n";
        echo "Le numéro de téléphone : ".$this->tel."\n";
    }

    /**
     * Get the value of CIN
     */ 
    public function getCIN()
    {
        return $this->CIN;
    }

    /**
     * Set the value of CIN
     *
     * @return  self
     */ 
    public function setCIN($CIN)
    {
        $this->CIN = $CIN;

        return $this;
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of firstname
     */ 
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set the value of firstname
     *
     * @return  self
     */ 
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get the value of tel
     */ 
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * Set the value of tel
     *
     * @return  self
     */ 
    public function setTel($tel)
    {
        $this->tel = $tel;

        return $this;
    }
}