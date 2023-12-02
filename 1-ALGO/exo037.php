<?php
/*Exercice 37 :
    Ecrivez un algorithme qui permette la saisie d'un nombre
quelconque de valeurs. Toutes les valeurs doivent être ensuite augmentées de 1,
et le nouveau tableau sera affiché à l'écran.

Name : Add +one to given values in an array
Var : int
Start
    //Set variables
        $nbVal <- valeur choisie
        $array <- array()
        $array2 <- array()
    //Loop for
        $array[$i] <- valeur choisie
        $array2[$i] = $array[$i] + 1
    //Echo results
        Echo $array2[0] to [4]
End
*/

    //Set variables
        $nbVal = readline ("Please enter how many values : ");
        $array = array();
        $array2 = array();
    //Loop for
        for ($i = 0; $i < $nbVal; $i ++) {
            $array[$i] = readline ("Please enter a value : ");
            $array2[$i] = $array[$i] + 1;
            }
    //Echo results
        echo $array2[0]." ";
        echo $array2[1]." ";
        echo $array2[2]." ";
        echo $array2[3]." ";
?>