<?PHP
/*Exercice 7 : Créez un tableau de dates (au format "YYYY-MM-DD").
Utilisez une boucle foreach pour déterminer la date la plus ancienne dans le tableau.
$dates = array("2023-05-10", "2022-12-15", "2024-02-20", "2021-08-05");
*/

$dates = array("2023-05-10", "2022-12-15", "2024-02-20", "2021-08-05");
$oldestDate = +INF;

    foreach ($dates as $value) {
        if ($value < $oldestDate) {
            $oldestDate = $value;
        }
    }

echo $oldestDate;
?>