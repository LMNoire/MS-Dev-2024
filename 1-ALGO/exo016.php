<?php
/*Exercice 16 :
    Ecrire un algorithme qui demande un nombre à l'utilisateur et l'informe ensuite si ce nombre est positif ou negatif (on inclut cette fois le traitement
du cas ou le nombre vaut zéro)

Name : Algorithm to determine whether a number is positive, negative or zero
Var : int
Start
    //Set variable
        nb1 <- Valeur choisie 
    //Condition if
        Si la valeur est positive 
    //Echo results
        Echo positif 
    //Condition elseif              
        Si la valeur est negative 
    //Echo results
        Echo negatif 
    //Condition elseif 
        Si la valeur est egale à 0 
    //Echo results
        Echo zero 
End
*/

    //Set variable
        $nb1 = readline ("Entrer Nb1 : ");
    //Condition if
        if ($nb1 > 0){
    //Echo results
        echo "Positif";
    //Condition elseif
        }elseif ($nb1 < 0){
    //Echo results
        echo "Negatif";
    //Condition elseif
        }elseif ($nb1 == 0){
    //Echo results
        echo "Zero";
        }
?>