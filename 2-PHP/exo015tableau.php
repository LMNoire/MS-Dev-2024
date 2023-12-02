<?PHP
/*Exercice 4 (Tableau Simple) : Créez un tableau de nombres. 
Trouvez le deuxième nombre le plus grand dans le tableau et affichez-le.

$numbers = array(42, 67, 31, 88, 59, 74, 53);
Utiliser un fonction de trie de tableau.
*/

$numbers = array(42, 67, 31, 88, 59, 74, 53);

function findSecondLargest(array $numbers): mixed {
    sort($numbers);
    $secondLargest = $numbers[sizeof($numbers)-2];
    return $secondLargest;
  }

  echo "Second-largest number : ".findSecondLargest($numbers);

?>