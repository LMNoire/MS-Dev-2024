<?php
/*Exercice 19 :
    Ecrire un algorithme qui demande un nombre de départ, et qui ensuite affiche les dix nombres suivants. Par exemple, si 
l'utilisateur entre le nombre 17, le programme affichera les nombres de 18 à 27

Name : Algorithm for displaying a sequence of tens
Var : int
Start  
    //Set variable
        nb1 <- attribuer un chiffre
    //Loop for
        Afficher les dix prochains chiffres
    //Echo results
        Echo ten next numbers
End
*/

    //Set variable
        $nb1 = readline ("Entrez un chiffre : ");
    //Loop for
        for ($i = $nb1 ; $i < $nb1 + 10 ; $i++) { 
    //Echo results
        echo ($i + 1). " ";
        }
?>
