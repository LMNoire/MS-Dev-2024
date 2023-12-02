<?php
/*Exercice 34 :
    Ecrivez un algorithme calculant la somme des valeurs d'un tableau
(on suppose que le tableau a été préalablement saisi.)

Name : Add the sum of a pre filled array
Var : int 
Start
    //Set variables
        $sum <- zero
        $tab <- array (1, 3, 5, 7, 9,)
    //Loop for
        Increment $sum by $tab[0]+ $tab[1]+ $tab[2]+ $tab[3]+ $tab[4]
    //Echo results
        Echo $sum
End
*/

    //Set variables
        $sum = 0 ;
        $tab = array (1, 3, 5, 7, 9,) ;
    //Loop for
        for ($i = 0; $i < 5; $i ++) {
            $sum = $tab[0]+ $tab[1]+ $tab[2]+ $tab[3]+ $tab[4];
            }
    //Echo results
            echo"".$sum."";
?>
