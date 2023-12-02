<?php
include 'Point.class.php';
/*Name of the class*/
class Cercle 
{
/*Attributs (or Properties) of the class*/
    private Point $centre;
    private float $rayon;
/*Instanciate the object*/
public function __construct($x, $y, $rayon) {
    $this->centre = new Point ($x, $y);
    $this->rayon = $rayon;
    }
/**
* Get the value of centre
*/ 
public function getCentre() {
    return $this->centre;
    }
/**
* Set the value of centre
*
* @return  self
*/ 
public function setCentre($centre) {
    $this->centre = $centre;
    return $this;
    }
/**
* Get the value of rayon
*/ 
public function getRayon() {
    return $this->rayon;
    }
/**
* Set the value of rayon
*
* @return  self
*/ 
public function setRayon($rayon) {
    $this->rayon = $rayon;
    return $this;
    }
/*Method to get perimeter*/
public function getPerimetre(): int {
    $perimetre = 2*pi()*$this->rayon;
    return $perimetre;
    }
/*Method to get surface*/
public function getSurface(): int {
    $surface = $this->rayon*$this->rayon*pi();
    return $surface;
    }
/*Method to know if a point is on the circle*/
public function appartient($pointP): bool {
    $distance = sqrt(pow($pointP->getAbcisse()-$this->centre->getAbcisse(), 2) + pow($pointP->getOrdonnee()-$this->centre->getOrdonnee(), 2));
    if ($distance <= $this->rayon) {
        return true;
        }
    else {
        return false;
        }
    }
/*Method to read the results*/
public function afficher() : void {
    echo "Cercle (".$this->centre->getAbcisse().", ".$this->centre->getOrdonnee().", ".$this->rayon.")"."\n";
    echo "Le perimetre du cercle est de : ".$this->getPerimetre()."\n";
    echo "La surface du cercle est de : ".$this->getSurface()."\n";
    }
}
?>