<?php

/*

afficher les nombres non divisibles par 3, entre 1 et 100

résultat attendu :

    1
    2
    4
    5
    7
    8
    10
    11
    13
    14
    ...

*/

$number = 100 ;

for ($i=0; $i < $number; $i++) { 
    if ($i%3!==0) {
        echo "$i\n";
    }
}