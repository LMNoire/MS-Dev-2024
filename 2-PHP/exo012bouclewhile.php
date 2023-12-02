<?PHP
/*Exercice 2 : Créez un script qui calcule la somme des nombres de 1 à 100 à l'aide d'une boucle "while".
*/

$val = 0;
$sum =0;
while ($val <= 100) {
    $sum = $sum+$val;
    $val++;
}

echo $sum." ";

?>