<?php
/*Exercice 22a :
    Ecrire un algorithme qui demande succesivement 20 nombres à l'utilisateur et qui lui dit ensuite quel était le plus
grand parmis ces 20 nombres

Name : Algorithm determining the largest number
Var : int
Start
    //Set variable
        $max <- zero
    //Loop for
        Set variable $nb <- valeurs choisies
    //Condition if
        $max < $nb
        $max <- $nb
    //Echo results
        Echo $max
End
*/

    //Set variable
        $max = 0 ;
    //Loop for
        for ($i = 0 ; $i <= 20 ; $i++) {
        $nb = readline ("Entrez un chiffre : ");
    //Condition if
        if ($max < $nb){;
            ($max = $nb);
            }
        }
    //Echo results
        echo $max
?>