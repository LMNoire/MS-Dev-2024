<?php
/*Exercice 6 :
    Ecrire un algorithme permettant d'échanger les valeurs de deux variables a et b

Name : Two variable permutation algorithm
Var : int
Start
    //Set variables
        a <- 1 
        b <- 3 
    //Permutation
        c <- a 
        a <- b 
        b <- c 
    //Echo results
        Echo a 
        Echo b 
End

Results
Start
    //Set variables
        a = 1 | b = 0 | c = 0 
        a = 1 | b = 3 | c = 0 
    //Permutation
        a = 1 | b = 3 | c = 1 
        a = 3 | b = 3 | c = 1 
        a = 3 | b = 1 | c = 1     
    //Echo results
        Echo a = 3 
        Echo b = 1 
End  
*/

    //Set variables
        $a = 1;
        $b = 3;    
    //Permutation
        $c = $a;
        $a = $b;
        $b = $c;
    //Echo results
        echo "A = $a";
        echo "\n";
        echo "B = $b";
?>
