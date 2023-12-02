<?php
/*Exercice 26 :
    Saisir trois entiers a, b et c. Determiner dans R les racines
de l'équation ax² + bx + c = 0

Name : Square of three whole numbers in ax² + bx + c = 0
Var : int
Start 
    //Set variables
        vara <- valeur choisie
        varb <- valeur choisie
        varc <- valeur choisie
    //Calculating delta
        $delta = ($varb * $varb) - (4 * $vara * $varc)
    //Condition if
        ($delta > 0)
        Appliquer la formule de calcul des racines
    //Echo results
        Echo $r1 and $r2
    //Condition elseif 
        ($delta < 0)
    //Echo results
        Echo "No roots"
    //Condition elseif    
        ($delta == 0)
        Appliquer la formule en cas de $delta == 0
    //Echo results
        Echo $r3
End
*/

    //Set variables
        $vara = readline ("Type the first whole number : ") ;
        $varb = readline ("Type the second whole number : ") ;
        $varc = readline ("Type the third whole number : ") ;
    //Calculating delta
        $delta = ($varb * $varb) - (4 * $vara * $varc) ;
    //Condition if  
        if ($delta > 0) {
            $r1 = ((-$varb - (sqrt($delta))) / 2 * $vara) ;
            $r2 = ((-$varb + (sqrt($delta))) / 2 * $vara) ;
    //Echo results
        echo "Roots 1 : $r1" ;
        echo "\n";
        echo "Roots 2 : $r2" ;
        }
    //Condition elseif  
        elseif ($delta < 0) {
    //Echo results
        echo "No roots (Delta < zero)" ;
        }
    //Condition elseif  
        elseif ($delta == 0) {
        $r3 = (-$varb / (2 * $vara)) ;
    //Echo results
        echo "Delta equal zero : $r3" ;
        }
?>