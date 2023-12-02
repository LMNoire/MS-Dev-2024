<?php
/*Name of the class, start with Capitale letter and CamelCase*/
class Point
{
/*Attributs (or Properties) of the class*/
    private float $abcisse;
    private float $ordonnee;
/*Instanciate the object with magic function __construct and properties*/
public function __construct(float $x, float $y){
    $this->abcisse = $x;
    $this->ordonnee = $y;
    }
/*Method to get the norme of the point*/
public function norme(): String{
    $distance = sqrt(($this->abcisse*$this->abcisse)+($this->ordonnee*$this->ordonnee));
    return "la norme du point (".$this->abcisse.","."$this->ordonnee".") est : "."$distance"; 
    }
/**
* Get the value of abcisse
*/ 
public function getAbcisse() {
    return $this->abcisse;
    }
/**
* Set the value of abcisse
*
* @return  self
*/ 
public function setAbcisse($abcisse) {
    $this->abcisse = $abcisse;
    return $this;
    }
/**
* Get the value of ordonnee
*/ 
public function getOrdonnee() {
    return $this->ordonnee;
    }
/**
* Set the value of ordonnee
*
* @return  self
*/ 
public function setOrdonnee($ordonnee) {
    $this->ordonnee = $ordonnee;
    return $this;
    }
}
