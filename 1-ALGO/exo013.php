<?php
/*Exercice 13 :
    Ecrire un algorithme qui demande un nombre à l'utilisateur, et l'informe ensuite si ce nombre est positif ou négatif (on laisse de côté le cas ou le nombre 
vaut zéro)

Name : Algorithm to determine whether a number is positive or negative
Var : int
Start
    //Set variable
        nb <- valeur choisie 
    //Condition if
        Si nb > 0 
    //Echo result
        Echo positif 
    //Else
        Echo negatif 
End

Results
Start
    //Set variable
        nb <- -5 
    //Condition if
        Si nb > 0 
    //Else
        Echo negatif 
End 
*/

    //Set variable
        $nb = readline ("Entrez un nombre : ");
    //Condition if
        if ($nb > 0){
    //Echo result
        echo "Positif";
    //Else
        }else{
        echo "Negatif";
        }        
?>