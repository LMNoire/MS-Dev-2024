<?php
/*Exercice 17 :
    Ecrire un algorithme qui demande deux nombres à l'utilisateur et l'informe ensuite si le produit est positif ou negatif (on inclut cette fois le traitement
du cas ou le produit peut être nul)

Name : Algorithm to determine whether the product of two numbers is positive or negative
Var : int
Start
    //Set variables
        nb1 <- valeur choisie 
        nb2 <- valeur choisie 
    //Condition if
        Si les deux valeurs sont positives ou negatives 
    //Echo results
        Echo positif
    //Condition elseif                
        Si l'une des deux valeurs est negative
    //Echo results
        Echo negatif
    //Condition elseif
        Si l'une des valeurs est égale à zero
    //Echo results
        Echo zéro
End
*/

    //Set variables
        $nb1 = readline ("Entrer Nb1 :");
        $nb2 = readline ("Entrer Nb2 :");
    //Condition if
        if ($nb1 > 0 and $nb2 > 0 or $nb1 < 0 and $nb2 < 0){
    //Echo results
        echo "Positif";
        } 
    //Condition elseif         
        elseif ($nb1 < 0 and $nb2 > 0 or $nb1 > 0 and $nb2 < 0){
    //Echo results
        echo "Negatif";
        } 
    //Condition elseif         
        elseif ($nb1 == 0 or $nb2 == 0){
    //Echo results
        echo "Zero";
        }
?>