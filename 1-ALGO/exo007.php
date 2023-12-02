<?php
/*Exercice 7 :
    On dispose de 3 variables a, b et c. Ecrivez un algorithme transférant à b la valeur de a, à c la valeur de b et à a la valeur de c

Name : Three variable permutation algorithm
Var : int
Start
    //Set variables
        a <- 1 
        b <- 2 
        c <- 3 
    //Permutation
        d <- a 
        e <- b 
        f <- c 
        b <- d 
        c <- e 
        a <- f 
    //Echo results
        Echo a 
        Echo b 
        Echo c 
End

Results
Start
    //Set variables
        a = 1 | b = 0 | c = 0 | D = 0 | E = 0 | F = 0 
        a = 1 | b = 2 | c = 0 | D = 0 | E = 0 | F = 0 
        a = 1 | b = 2 | c = 3 | D = 0 | E = 0 | F = 0     
    //Permutation
        a = 1 | b = 2 | c = 3 | D = 1 | E = 0 | F = 0 
        a = 1 | b = 2 | c = 3 | D = 1 | E = 2 | F = 0 
        a = 1 | b = 2 | c = 3 | D = 1 | E = 2 | F = 3    
        a = 1 | b = 1 | c = 3 | D = 1 | E = 2 | F = 3   
        a = 1 | b = 1 | c = 2 | D = 1 | E = 2 | F = 3   
        a = 3 | b = 1 | c = 2 | D = 1 | E = 2 | F = 3   
    //Echo results 
        Echo a = 3 
        Echo b = 1 
        Echo c = 2 
End       
*/

    //Set variables
        $a = readline("Entrez A:"); 
        $b = readline("Entrez B:");
        $c = readline("Entrez C:");
    //Permutation
        $d = $a;
        $e = $b;
        $f = $c;
        $b = $d;
        $c = $e;
        $a = $f;
    //Echo results
        echo "A = $a";
        echo "\n";
        echo "B = $b";
        echo "\n";
        echo "C = $c";
?>