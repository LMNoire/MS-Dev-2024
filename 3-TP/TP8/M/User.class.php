<?php
/** @author  farid  mekentichifa@gmailcom */
class User { 

   // attributs
   
    private string $nom;
    private string $prenom;
    private string $mail;
    private String $tel;
    private string $password;

    //instance  et  iniatialisation
    public function __construct (string $nom, string $prenom, string $mail, String $tel, string $password ){
        
         $this->nom = $nom;
         $this->prenom = $prenom;
         $this->mail = $mail;
         $this->tel = $tel;
         $this->password = $password;
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

}