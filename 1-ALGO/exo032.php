<?php
/*Exercice 32 :
    Ecrire un algorithme qui déclare un tableau de 9 notes,
dont on fait ensuite saisir les valeurs par l'utilisateur

Name : Nine grades array
Var : int
Start
    //Create array
        $tab empty
    //Loop for
        $tab[$i] <- valeur choisie
    //Loop for
        Fill the array with $tab[$i]
        Echo $tab[$i]
End 
*/

    //Create array
        $tab = array();
    //Loop for
        for ($i=0; $i < 9; $i++) { 
            $tab[$i] = readline ("Please enter a grade : ");
            }
        for ($i=0; $i < 9; $i++) { 
            echo $tab[$i]." " ;
            }
?>