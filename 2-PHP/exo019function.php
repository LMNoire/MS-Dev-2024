<?PHP
/*Exercice 3 : Créez une fonction nommée "estPalindrome" qui prend une chaîne de caractères en entrée et renvoie vrai si la chaîne est un palindrome 
se lit de la même manière de gauche à droite et de droite à gauche), sinon renvoie faux.

// Exemple d'utilisation :
$resultat = estPalindrome("radar"); // Renvoie vrai
*/

$word = readline ("");

function estPalindrome (string $word): string {
    $reverseWord = strrev($word);
    if ($reverseWord == $word) {
        return "true";
    }
    else {
        return "false";
    }
}

echo estPalindrome($word);
?>
