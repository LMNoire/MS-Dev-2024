<?PHP
/*Exercice 1 : Créez une fonction nommée "calculerCarre" qui prend un nombre en entrée et renvoie le carré de ce nombre.
// Exemple d'utilisation :
$resultat = calculerCarre(5); // Renvoie 25
*/

$result =0;
$square = readline("");

function calculerCarre (int $square): int {
    $result = $square*$square;
    return $result;
}

echo calculerCarre($square);

?>