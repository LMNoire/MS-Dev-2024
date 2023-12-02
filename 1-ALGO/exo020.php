<?php
/*Exercice 20 :
    Ecrire un algorithme qui demande un nombre de départ, et qui calcule la somme des entiers jusqu'à ce nombre. Par exemple, si l'on entre 5, 
le programme doit calculer : 1 + 2 + 3 + 4 + 5 = 15

Name : Algorithm for calculating the sum of integers
Var : int
Start
    //Set variables
        nb1 <- attribuer un chiffre
        $somme <- zero
    //Loop for      
        Increment variable $somme
    //Echo results
        Echo somme
End
*/

    //Set variables
        $nb1 = readline ("Entrez un chiffre : ");
        $somme = 0;
    //Loop for
        for ($i = 0 ; $i <= $nb1 ; $i++) { 
        $somme = $somme+$i;
        }
    //Echo results
        echo ("$somme");
?>
    