<?php
/*Exercice 40 :
    Soit un tableau T à deux dimensions (12, 8)
préalablement rempli de valeurs numériques. Ecrire un algorithme
qui recherche la plus grande valeur au sein de ce tableau.

Name : Find highest value in a two dimension array
Var : int
Start 
    //Set variable
        $max <- 0     
        $tab <- (12, 8)      
    //Netched loop for
        Read the bidimensional array 
    //Condition if
        Test if (($tab[$i][$j]) > $max)
        $max = $tab[$i][$j]
    //Echo results
        Echo $max
End
*/

    //Set variable
        $max = 0 ;
        $tab = [
            [16, 3, 5, 25, 7, 18, 42, 18],
            [16, 22, 885, 725, 7, 88, 42, 18],
            [16, 3, 75875, 25, 7, 58, 42, 18],
            [16, 433, 5, 25, 7, 38, 42, 18],
            [16, 3, 5, 25, 888, 18, 42, 18],
            [16, 53, 77, 25, 7, 18, 42, 18],
            [16, 3, 5, 875, 7, 18, 42, 18],
            [16, 3, 225, 25, 7, 18, 42, 18],
            [7536, 3, 5, 25, 7, 18, 42, 18],
            [16, 3, 15, 25, 7, 558, 42, 18],
            [16, 3, 5, 288, 7, 18, 435, 18],
            [16, 3, 5, 25, 7, 18, 42, 18]
            ] ;
    //Netched loop for
        for ($i=0; $i < sizeof($tab); $i++) { 
        for ($j=0; $j < sizeof($tab[$i]); $j++) { 
    //Condition if
        if (($tab[$i][$j]) > $max) {
            $max = $tab[$i][$j] ;}
            }
        }
    //Echo result
        echo $max ;
?>