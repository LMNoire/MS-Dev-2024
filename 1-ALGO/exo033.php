<?php
/*Exercice 33
    Ecrivez un algorithme permettant à l'utilisateur de saisir
un nombre quelconque de valeurs, qui devront être stockées dans un tableau.
L'utilisateur doit donc commencer par entrer le nombre de valeurs qu'il compte
saisir. Il effectuera ensuite cette saisie. Enfin une fois la saisie terminée, 
le programme affichera le nombre de valeurs négatives et le nombre de valeurs positives.

Name : Determine how many positives and negatives numbers in an array
Var : int
Start
    //Set variables
        $nbVal <- valeur choisie
        $tab <- array()
        $posVal <- zero
        $negVal <- zero
    //Loop for
        $tab[$i] <- valeur choisie
    //Condition if
        ($tab[$i] >= 0)
        Increment $posVal
    //Condition elseif
        ($tab[$i] <0)
        Increment $negVal
    //Echo results
        Echo $posVal and $negVal
End
*/

    //Set variables
        $nbVal = readline ("Please enter how many values : ");
        $tab = array ();
        $posVal = 0 ;
        $negVal = 0 ;
    //Loop for
        for ($i=0; $i < $nbVal; $i++) { 
            $tab[$i] = readline ("Please enter a value : ");
    //Condition if
        if ($tab[$i] >= 0)  {
            $posVal++ ;
            }
    //Condition elseif
        elseif($tab[$i] <0) {
            $negVal++ ;
            }
        }
    //Echo results
            echo "Number of positives values : " .$posVal. " Number of negatives values : " .$negVal;
  ?>
