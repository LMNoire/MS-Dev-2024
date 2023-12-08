<?PHP  
/*Name of the class Profil*/
class Profil {
/*Attributs (or Properties) of the class*/
    private static $id ;
    private string $code ;
    private string $libelle ;
/*Instanciate the object*/    
    public function __construct(string $code, string $libelle) {
    self::$id++ ;
    $this->code = $code ;
    $this->libelle = $libelle ;
    }
public function afficher() {
    echo "Service ".$this->libelle." Code ".$this->code."\n" ;
}
/*Start of getters and setters*/   
/**
* Get the value of id
*/ 
public function getId() {
    return $this->id;
    }
/**
* Set the value of id
*
* @return  self
*/ 
public function setId($id) {
    $this->id = $id;
    return $this;
    }
/**
* Get the value of code
*/ 
public function getCode() {
    return $this->code;
    }
/**
* Set the value of code
*
* @return  self
*/ 
public function setCode($code) {
    $this->code = $code;
    return $this;
    }
/**
* Get the value of libelle
*/ 
public function getLibelle() {
    return $this->libelle;
    }
/**
* Set the value of libelle
*
* @return  self
*/ 
public function setLibelle($libelle) {
    $this->libelle = $libelle;
    return $this;
    }
/*End of getters and setters*/
}
