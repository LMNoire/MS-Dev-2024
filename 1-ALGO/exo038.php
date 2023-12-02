<?php
/*Exercice 38 :
    Ecrivez un algorithme permettant, toujours sur le même principe, à 
l'utilisateur de saisir un nombre déterminé de valeurs. Le programme, une fois la saisie
terminée, renvoie la plus grande valeur en précisant quelle position elle occupe dans le 
tableau. On prendra soin d'effectuer la saisie dans un premier temps, et la recherche
de la plus grande valeur du tableau dans un second temps.

Name : Search and find highest value and position in an array
Var : int
Start
    //Set variables
        $tab <- array()
        $valMax <- 0
        $posMax <- 0
        $nbVal <- valeur choisie
    //Loop for
        $tab[$i] <- valeur choisie
    //Echo results
        $valMax <- max($array)
        $posMax <- array_search($valMax, $array) + 1
        Echo $valMax and $posMax
End 
*/

    //Set variables
        $tab = array();
        $valMax = 0;
        $posMax = 0;
        $nbVal = readline("Enter number of values : ");
    //Loop for
        for ($i = 0; $i < $nbVal; $i++) {
            $tab[$i] = readline("Enter values : ");
            }
    //Echo results
        $valMax = max($array);
        $posMax = array_search($valMax, $array)+1;
        echo $valMax." ".$posMax;
?>