<?php
/*Exercice 35 :
    Ecrivez un algorithme constituant un tableau, à partir
de deux tableaux de même longueur préalablement saisis. Le nouveau
tableau sera la somme des éléments des deux tableaux de départ.

Name : Array with the sum of two others array
Var : int 
Start 
    //Set variables
        $array1 = array(4, 8, 7, 9, 1, 5, 4, 6)
        $array2 = array(7, 6, 5, 2, 1, 3, 7, 4)
        $array3 = array()
    //Loop for
        $array3[$i] = $array1[$i]+$array2[$i]
    //Echo results
        Echo $array3[0] to [7]
End 
*/

    //Set variables
        $array1 = array(4, 8, 7, 9, 1, 5, 4, 6);
        $array2 = array(7, 6, 5, 2, 1, 3, 7, 4);
        $array3 = array();
    //Loop for
        for ($i = 0; $i < 8; $i++) {
            $array3[$i] = $array1[$i]+$array2[$i] ;
            }
    //Echo results
        echo $array3[0]." ";
        echo $array3[1]." ";
        echo $array3[2]." ";
        echo $array3[3]." ";
        echo $array3[4]." ";
        echo $array3[5]." ";
        echo $array3[6]." ";
        echo $array3[7]." ";
?>

