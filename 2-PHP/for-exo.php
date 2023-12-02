<?php

// Copiez-collez le tableau que vous avez écrit dans l'exercice 2) des tableaux simples (`tableaux-simples.php`)
// Écrivez le code d'une boucle `for` qui affiche dans la console toutes les valeurs du tableau
// Vous devez utiliser la fonction `count()` pour déterminer le nombre maximal de boucles

$tabInt = array(1, 3, 5) ;

count($tabInt) ;
for ($i=0; $i < sizeof($tabInt) ; $i++) { 
    echo "".$tabInt[$i]." ";
}