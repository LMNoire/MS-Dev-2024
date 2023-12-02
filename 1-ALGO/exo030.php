<?php
/*Exercice 30 :
    Give the result of two numbers sum multiplication but only doing additions.

Name : Multiplication but only with additions
Var : int
Start
    //Set variables
        $total <- 0
        $n <- valeur choisie
    //Loop for
        Increment $total avec $n chaque tour
    //Echo results
        Echo $total
End 
*/

    //Set variables
        $total = 0 ;
        $n = readline ("Please type a number : ") ;
    //Loop for
        for ($i = 0; $i < $n; $i++) {
            $total = $total+$n ;
        }
    //Echo results
        echo $total;
?>