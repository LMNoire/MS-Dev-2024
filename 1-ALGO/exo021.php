<?php
/*Exercice 21 :
    Ecrire un algorithme qui demande un nombre de départ, et qui calcule sa factorielle

Name : Algorithm for factorial calculation
Var : int
Start
    //Set variables
        nb1 <- attribuer un chiffre
        factoriel <- 1
    //Loop for
        Product of each integral until choosen number is reach
    //Echo results
        Echo factoriel
End
*/

    //Set variables
        $nb1 = readline ("Entrez un chiffre : ");
        $factoriel = 1;
    //Loop for
        for ($i = 1 ; $i <= $nb1 ; $i++) { 
        $factoriel = $factoriel*$i;
        }
    //Echo results
        echo ("$factoriel");
?>