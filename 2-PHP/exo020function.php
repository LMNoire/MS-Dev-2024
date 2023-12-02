<?PHP
/*Exercice 4 : Écrivez une fonction nommée "compterMots" qui prend une chaîne de caractères en entrée et renvoie le nombre de mots dans cette chaîne.

// Exemple d'utilisation :
$texte = "Ceci est un exemple de texte.";
$resultat = compterMots($texte); // Renvoie 6
*/

$texte = "Ceci est un exemple de texte";

function compterMots (string $texte) : int {
    $resultat = str_word_count($texte);
    return $resultat;
}

echo compterMots($texte);
?>