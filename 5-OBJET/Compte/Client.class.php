<?php
/*Name of the class*/
class Client
{
/*Attributs (or Properties) of the class*/
    private string $cinClient;
    private string $nomClient;
    private string $prenomClient;
    private string $telClient;
/*Instanciate the object*/
public function __construct(string $cinClient, string $nomClient, string $prenomClient, string $telClient) {
    $this->cinClient = $cinClient;
    $this->nomClient = $nomClient;
    $this->prenomClient = $prenomClient;
    $this->telClient = $telClient;
    }
/**
* Get the value of cinClient
*/ 
public function getCinClient() {
    return $this->cinClient;
    }
/**
* Set the value of cinClient
*
* @return  self
*/ 
public function setCinClient($cinClient) {
    $this->cinClient = $cinClient;
    return $this;
    }
/**
* Get the value of nomClient
*/ 
public function getNomClient() {
    return $this->nomClient;
    }
/**
* Set the value of nomClient
*
* @return  self
*/ 
public function setNomClient($nomClient) {
    $this->nomClient = $nomClient;
    return $this;
    }
/**
* Get the value of prenomClient
*/ 
public function getPrenomClient() {
    return $this->prenomClient;
    }
/**
* Set the value of prenomClient
*
* @return  self
*/ 
public function setPrenomClient($prenomClient) {
    $this->prenomClient = $prenomClient;
    return $this;
    }
/**
* Get the value of telClient
*/ 
public function getTelClient() {
    return $this->telClient;
    }
/**
* Set the value of telClient
*
* @return  self
*/ 
public function setTelClient($telClient) {
    $this->telClient = $telClient;
    return $this;
    }
/*Method to view customer informations*/
public function afficher () : void {
    echo "Le CIN du client est de : ".$this->cinClient."\n";
    echo "Le nom du client est : ".$this->nomClient."\n";
    echo "Le prénom du client est : ".$this->prenomClient."\n";
    echo "Le téléphone du client est : ".$this->telClient."\n";
    }
}
?>