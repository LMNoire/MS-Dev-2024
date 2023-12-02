<?php
/*Exercice 4 :
    Quelles seront les valeurs des variables a, b et c après exécution des instructions suivantes ?

Name : Algorithm for assigning three variable
Var : int
Start
    //Set variables
        a <- 3
        b <- 10
        c <- a + b
        b <- a + b
        a <- c
    //Echo results
        Echo a
        Echo b
        Echo c
End

Results
Start
    //Set variables
        a = 3 | b = 0 | c = 0
        a = 3 | b = 10 | c = 0
        a = 3 | b = 10 | c = 13
        a = 3 | b = 13 | c = 13
        a = 13 | b = 13 | c = 13
    //Echo results           
        Echo a = 13
        Echo b = 13
        Echo c = 13
End
*/

    //Set variables
        $a = 3;
        $b = 10;
        $c = $a + $b;
        $b = $a + $b;
        $a = $c;
    //Echo results
        echo "A = $a";
        echo "\n";
        echo "B = $b";
        echo "\n";
        echo "C = $c";
?>

