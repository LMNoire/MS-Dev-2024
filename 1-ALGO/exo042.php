<?php
/*Exercice 42 :
    Ecrire un algorithme triant un tableau par séléction
- On cherche l'élément de plus petite valeur dans le tableau
- Le placer en tête du tableau
- Recommencer avec le tableau moins la première case

Name : Algorithm for sorting an array in ascending order
Var : int
Start
    //Set variables
        $tab = [14, 3, 9, 2, 5] ;
        $tempVal = 0 ;
        $midVal = 0;
        $maxVal = -INF;
        $minVal = INF;
    //Nested loop for
        Parcourir le tableau
    //Condition if
        Si ($tab[$i] < $tab[$j])
        Increment $midVal with $tab[$i]
        Increment $tab[$i] with $tab[$j]
        Increment $tab[$j] with $midVal
    //Loop for
        Echo $tab[$i] separeted with | at each loop
End
*/

    //Set variables
        $tab = [14, 3, 9, 2, 5] ;
        $tempVal = 0 ;
        $midVal = 0;
        $maxVal = -INF;
        $minVal = INF;
    //Nested loop for
        for ($i=0; $i < sizeof($tab); $i++) { 
        for ($j=0; $j < sizeof($tab); $j++) { 
    //Condition if
        if ($tab[$i] < $tab[$j]) {
            $midVal = $tab[$i] ;
            $tab[$i] = $tab[$j] ;
            $tab[$j] = $midVal ;
                }
        }
        }
    //Loop for
        for ($i=0; $i < sizeof($tab); $i++) { 
            echo $tab[$i]." | ";
        }
?>