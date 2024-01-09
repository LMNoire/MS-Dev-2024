<?php
/** @author  farid  mekentichifa@gmailcom */
class User { 

   // attributs
   
    private string $nom;
    private string $prenom;
    private string $mail;
    private String $tel;
    private string $password;
    private string $adresse;
    private string $codepostal;
    private string $ville;

    //instance  et  iniatialisation
    public function __construct (string $nom, string $prenom, string $mail, String $tel, string $password, string $adresse, string $codepostal, string $ville ){
        
         $this->nom = $nom;
         $this->prenom = $prenom;
         $this->mail = $mail;
         $this->tel = $tel;
         $this->password = $password;
         $this->adresse = $adresse;
         $this->codepostal = $codepostal;
         $this->ville = $ville;
    }   
// asseceur 

    /**
     * Get the value of nom
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of prenom
     */ 
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set the value of prenom
     *
     * @return  self
     */ 
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get the value of mail
     */ 
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set the value of mail
     *
     * @return  self
     */ 
    public function setMail($mail)
    {
        $this->mail = $mail;

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

    /**
     * Get the value of password
     */ 
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @return  self
     */ 
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }


    /**
     * Get the value of adresse
     */ 
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set the value of adresse
     *
     * @return  self
     */ 
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get the value of codepostal
     */ 
    public function getCodepostal()
    {
        return $this->codepostal;
    }

    /**
     * Set the value of codepostal
     *
     * @return  self
     */ 
    public function setCodepostal($codepostal)
    {
        $this->codepostal = $codepostal;

        return $this;
    }

    /**
     * Get the value of ville
     */ 
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set the value of ville
     *
     * @return  self
     */ 
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }
}