<?php

/*

écrire une fonction nommée `message` qui :

- prend un paramètre de type chaîne de caractère
- renvoit le paramètre en y ajoutant un saut de ligne

appeler cette fonction en lui passant un paramètre ayant la valeur `'Php 5.6'` et afficher le résultat dans la console

*/



function message (String $chaine ): String {
    return "". $chaine ."" .PHP_EOL;
    
}
$result = message ("Php 5.6");
echo $result . PHP_EOL;

