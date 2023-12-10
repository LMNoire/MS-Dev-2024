<?php
/*Include vehicule.class*/
include_once "Vehicule.class.php";
class Voiture extends Vehicule {
/*Method to test vehicule*/    
public function demarrer() {
    echo "La voiture démarre\n";
    }
public function accelerer() {
    echo "La voiture accélère\n";
    }
}
?>