<?php
/*Exercice 14 :
    Ecrire un algorithme qui demande deux nombres à l'utilisateur et l'informe ensuite si leur produit est négatif ou positif (on laisse de côté le cas 
ou le produit est nul). Attention toutefois, on ne doit pas calculer le produit des deux sommes

Name : Algorithm to determine whether the product of two numbers is positive or negative
Var : int
Start
    //Set variables
        nb1 <- Valeur choisie 
        nb2 <- Valeur choisie 
    //Condition if
        Si les deux valeurs sont positives ou negatives
    //Echo results
        Echo positif
    //Else
        Echo negatif 
End

Results
Start
    //Set variables
        nb1 <- 7 
        nb2 <- 8 
    //Condition if
        Si les deux valeurs sont positives ou negatives 
    //Echo results
        Echo positif
End
*/

    //Set variables
        $nb1 = readline ("Entrer Nb1 :");
        $nb2 = readline ("Entrer Nb2 :");
    //Condition if
        if ($nb1 > 0 and $nb2 > 0 or $nb1 < 0 and $nb2 < 0){
    //Echo results
        echo "Positif";
    //Else
        }else{
        echo "Negatif";
        }   
 ?>