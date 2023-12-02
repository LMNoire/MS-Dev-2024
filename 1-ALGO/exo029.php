<?php
/*Exercice 29 :
    Ecrire un algorithme qui demande un nombre, calcule et affiche la somme Σ pour n, i=1 et i au cube

Name : Epsilon sum algorithm
Var : int
Start 
    //Set variables
        $total <- zero
        $n <- valeur choisie
    //Loop for
        $total += $i
    //Calculate sum
        $sum = $total * $total
    //Echo results
        Echo $sum
End
*/

    //Set variables
        $total = 0 ;
        $n = readline ("Please type a number : ") ;
    //Loop for
        for ($i = 1; $i < $n + 1; $i++) {
            $total += $i ;
        }
    //Calculate sum
        $sum = $total * $total;
    //Echo results
        echo $sum;
?>
