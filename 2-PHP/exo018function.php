<?PHP
/*Exercice 2 : Écrivez une fonction nommée "calculerMoyenne" qui prend un tableau de nombres en entrée et renvoie la moyenne de ces nombres.
Utiliser les fonctions array_sum() et count() 

// Exemple d'utilisation :
$listeNombres = array(10, 20, 30, 40, 50);
$resultat = calculerMoyenne($listeNombres); // Renvoie 30
*/

$listeNombres = array(10, 20, 30, 40, 50);
$total = 0;
$result = 0;

function calculerMoyenne (array $listeNombres): int {
    $total = array_sum($listeNombres);
    $nbNotes = count($listeNombres);
    $result = $total / $nbNotes;
    return $result;
}

echo calculerMoyenne($listeNombres);
?>