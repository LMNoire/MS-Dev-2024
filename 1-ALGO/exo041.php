<?php
/*Exercice 41 :
    Ecrire l'algorithme effectuant le décalage des éléments d'un tableau. 
Tableau initial : D E C A L A G E
Tableau modifié : E C A L A G E D

Name : Shift an array element
Var : int
Start
    //Set variables
        $tab1 <- ["D", "E", "C", "A", "L", "A", "G", "E"]
        $pos <- 0
    //Loop for
        ($i=0; $i < sizeof($tab1)-1 ; $i++)
        $pos = $tab1[$i] 
        $tab1[$i-1] = $pos
    //Loop for        
        ($i=0; $i < sizeof($tab1)-1; $i++)
        Echo $pos
End
*/

    //Set variables
        $tab1 = ["D", "E", "C", "A", "L", "A", "G", "E"] ;
        $pos = 0 ;
    //Loop for
        for ($i=0; $i < sizeof($tab1)-1 ; $i++) { 
            $pos = $tab1[$i] ;
            $tab1[$i-1] = $pos ;
            }
    //Loop for
        for ($i=0; $i < sizeof($tab1)-1; $i++) { 
            echo $pos ;
        }
?>