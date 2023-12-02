<?php
/*Exercice 28 :
    Ecrire l'algorithme permettant d'imprimer le triangle suivant,
le nombre de lignes étant données par l'utilisateur :
    1
    12
    123
    1234
    12345
    123456
    1234567

Name : Triangle creation algorithm
Var : int
Start 
    //Set variable
        $nbL <- valeur choisie
    //Nested loop for
        Echo $j and a line break
End         
*/

    //Set variable
        $nbL = readline ("How many lines for your triangle ? : ");
    //Nested loop for 
        for ($i = 0 ; $i <= $nbL ; $i++) {
            for ($j = 1; $j <= $i ; $j++) {
                echo $j ;
            }
                echo "\n";
        }
?>
