<?php
/*Exercice 31 :
    Ecrire un algorithme qui déclare et remplisse un tableau contenant 
les six voyelles de l'alphabet latin

Name : Vowels array
Var : letters
Start
    //Create array
        Fill array with vowels a, e, i, o, u, y
    //Choose a position in the array
        $pos <- valeur choisie
    //Echo results
        Echo $voyelles[$pos]
End
*/

    //Create array
        $voyelles = array ("a", "e", "i", "o", "u", "y") ;
    //Choose a position in the array
        $pos = readline ("Please chose a position between 0 to 5 : ");
    //Echo results
        echo $voyelles[$pos] ;
?>
