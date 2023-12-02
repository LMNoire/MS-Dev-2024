<?php
/*Exercice 39
    Toujours et encore sur le même principe, écrivez un algorithme
permettant à l'utilisateur de saisir les notes d'une classe. Le programme, une fois
la saisie terminée, renvoie le nombre de ces notes supérieures à la moyenne de la classe.
    
Name : Algorithm for determining whether a grade is above average
Var : int
Start
    //Set variables
        $array <- [] 
        $average <- 0 
        $supGrades <- 0 
        $nbGra <- valeur choisie
    //Loop for
        $array[$i] <- valeur choisie
        Increment $average with $array[$i] + $average 
    //Calculate average
        Divide $average by $nbGra
    //Loop for each grade
    //Condition if
        Test if ($array[$i] > $average)
        $supGrades <- $supGrades + 1
    //Echo results
        echo $average and $supGrades
End 
*/

    //Set variables
        $array = [] ;
        $average = 0 ;
        $supGrades = 0 ;
        $nbGra = readline("Enter number of grades : ") ;
    //Loop for
        for ($i=0; $i < $nbGra ; $i++) { 
            $array[$i] = readline ("Enter a grade : ") ;
            $average = $array[$i] + $average ;
        }
    //Calculate average
        $average = $average/$nbGra ;
    //Loop for
        for ($i=0; $i < $nbGra; $i++) { 
    //Condition if
        if ($array[$i] > $average) {
            $supGrades = $supGrades + 1 ;
        }
    }
    //Echo results
        echo $average." ".$supGrades ;
?>