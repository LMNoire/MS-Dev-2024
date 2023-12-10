<?php
/*Include vehicule.class*/
include_once "Vehicule.class.php";
class Camion extends Vehicule {
/*Method to test vehicule*/
    public function demarrer() {
        echo "Le camion démarre\n";
    }
    public function accelerer() {
        echo "Le camion accélère\n";
    }
}
?>