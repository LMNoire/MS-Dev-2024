<?php
/*Exercice 5 :
    Quelles seront les valeurs des variables a et b après exécution des instructions suivantes ?

Name : Algorithm for assigning two variable
Var : int
Start
    //Set variables
        a <- 5 
        b <- 2 
        a <- b 
        b <- a 
    //Echo results
        Echo a 
        Echo b 
End

Results
Start
    //Set variables
        a = 5 | b = 0 
        a = 5 | b = 2
        a = 2 | b = 2 
        a = 2 | b = 2     
    //Echo results
        Echo a = 2 
        Echo b = 2 
End 
*/

    //Set variables
        $a = 5;
        $b = 2;
        $a = $b;
        $b = $a;
    //Echo results
        echo "A = $a";
        echo "\n";
        echo "B = $b";
?>