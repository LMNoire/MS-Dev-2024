<?php
/*Exercice 36 :
    Toujours à partir de deux tableaux précédemment saisis,
écrivez un algorithme qui calcule le schtroumpf des deux tableaux. Pour calculer
le schtroumpf, il faut multiplier chaque élément du tableau 1 par chaque
élément du tableau 2, et additionner le tout. Par exemple pour un tableau 1
avec 2, 5, 8, 4 et un tableau 2 avec 6 et 7, le schtroumpf sera :
6*2 + 6*5 + 6*8 + 6*4 + 7*2 + 7*5 + 7*8 + 7*4 = 247

Name : Sum of the product of all values from two array
Var : int
Start
    //Set variables
        $array1 = array(2, 5, 8, 4) 
        $array2 = array(6, 7) 
        $totalProd = 0 
        $totalSum = 0 
    //Netched loop for
        $totalProd = product of each array values
        $totalSum = sum of each products
    //Echo results
        Echo $totalSum
End
*/

    //Set variables
        $array1 = array(2, 5, 8, 4) ;
        $array2 = array(6, 7) ;
        $totalProd = 0 ;
        $totalSum = 0 ;
    //Netched loop for
        for ($i=0; $i < sizeof($array1); $i++) { 
            for ($j=0; $j < sizeof($array2) ; $j++) { 
                $totalProd = $array1[$i]*$array2[$j] ;
                $totalSum = $totalSum + $totalProd ;
                }
            }
    //Echo results
        echo $totalSum ;
?>