<?php
/*Exercice 3 :
    Quelles seront les valeurs des variables a et b après exécution des instructions suivantes ?

Name : Algorithm for assigning two variable
Var : int
Start
    //Set variables
        a <- 5
        b <- a + 4
        a <- a + 1
        b <- a - 4
    //Echo results 
        Echo a
        Echo b
End

Results
Start
    //Set variables
        a = 5 | b = 0
        a = 5 | b = 9
        a = 6 | b = 9
        a = 6 | b = 2
    //Echo results            
        Echo a = 6
        Echo b = 2
End
*/

    //Set variables
        $a = 5;
        $b = $a + 4;
        $a = $a + 1;
        $b = $a - 4;
    //Echo results
        echo "A = $a";
        echo "\n";
        echo "B = $b";
?>