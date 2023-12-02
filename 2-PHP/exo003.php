<?PHP
/*Exercice 3 : Créez un tableau de chaînes de caractères contenant des phrases. Utilisez une boucle foreach pour trouver la phrase la plus longue dans le tableau.

$phrases = array(
    "La vie est belle.",
    "L'apprentissage est essentiel pour grandir.",
    "Le monde est vaste et mystérieux."
);
*/

$phrases = array(
    "La vie est belle.",
    "L'apprentissage est essentiel pour grandir.",
    "Le monde est vaste et mystérieux."
);

$string = 0;
$stringMax = 0;
$sentence = 0;

foreach ($phrases as $value) {
    $string = strlen($value);
    if ($string > $stringMax) {
        $stringMax = $string;
        $sentence = $value;
    }
}

echo $stringMax. " ".$sentence;
?>