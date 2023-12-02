<?php
/*Exercice 22b :
    Ecrire un algorithme qui demande succesivement 20 nombres à l'utilisateur et qui lui dit ensuite quel était le plus
grand parmis ces 20 nombres. Modifier ensuite l'algorithme pour que le programme affiche de surcroît en quelle position
avait été saisie ce nombre.

Name : Algorithm to determine the largest number and display its position
Var : int
Start
    //Set variables
        $max <- zero
        $position <- zero
    //Loop for
        Set $nb <- valeur choisie
    //Condition if
        $nb > $max
        $max <- $nb
        $position <- $i + 1
    //Echo results
        Echo $max and $position
End 
*/

    //Set variables
        $max = 0 ;
        $position = 0 ;
    //Loop for
        for ($i = 0 ; $i <= 20 ; $i++) {
        $nb = readline ("Entrez un chiffre : ") ;
        //Condition if
        if ($max < $nb) { ;
            ($max = $nb) ;
            ($position = $i + 1) ;}
        }
    //Echo results
        echo "Chiffre le plus grand" .$max ;
        echo "\n" ;
        echo "Position : " .$position ;
?>