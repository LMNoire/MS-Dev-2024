<?php
/*Exercice 2 :
    Quelles seront les valeurs des variables a, b et c aprés exécution des instructions suivantes ? 
 
Name : Algorithm for assigning three variable
Var : int 
Start
    //Set variables
        a <- 5
        b <- 3
        c <- a + b
        a <- 2
        c <- b - a
    //Echo results                
        Echo a
        Echo b
        Echo c
End

Results 
Start
    //Set variables
        a = 5 | b = 0 | c = 0
        a = 5 | b = 3 | c = 0
        a = 5 | b = 3 | c = 8
        a = 2 | b = 3 | c = 8
        a = 2 | b = 3 | c = 1
    //Echo results              
        Echo a = 2
        Echo b = 3
        Echo c = 1
End         
*/

    //Set variables
        $a = 5;
        $b = 3;
        $c = $a + $b;
        $a = 2;
        $c = $b - $a;
    //Echo results
        echo "A = ".$a;
        echo "\n";
        echo "B = ".$b;
        echo "\n";
        echo "C = ".$c;
?>