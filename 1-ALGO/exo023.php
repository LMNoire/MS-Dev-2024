<?php
/*Exercice 23 :
    Reecrire l'algorithme précédent, mais cette fois-ci on ne connait
pas d'avance combien l'utilisateur souhaite saisir de nombres. La
saisie des nombres s'arrête lorsque l'utilisateur entre un zéro.

Name : Algorithm to determine the largest number and display its position
Var : int
Start 
    //Set variables
        $max <- 0
        $nb <- 1
        $position <- 1
        $positionMax <- 0
    //While ($nb > 0 )
        Ask for number
    //Condition if
        $max < $nb
        $max = $nb
        $positionMax = $position
    //Condition elseif 
        ($nb == 0)
        Echo stop
    //Echo results
        Echo $max
        Echo $positionMax
End
*/

    //Set variables
        $max = 0 ;
        $nb = 1 ;
        $position = 1 ;
        $positionMax = 0 ;
    //While
        while ($nb > 0 ) { 
        $nb = readline ("Entrez un chiffre : ") ;
    //Condition if        
        if ($max < $nb) { ; 
            ($max = $nb) ;
            ($positionMax = $position) ;
        } elseif ($nb == 0) {
        echo "Stop" ;}
        $position = $position + 1 ;
        }
    //Echo results 
        echo "Chiffre le plus grand : " .$max ;
        echo "\n" ;
        echo "Position Max : " .$positionMax ;
?>