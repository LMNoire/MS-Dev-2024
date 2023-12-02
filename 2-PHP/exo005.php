<?PHP
/*Exercice 5 : Créez un tableau multidimensionnel avec des informations sur des employés (nom, salaire, département). 
Utilisez une boucle foreach pour calculer la moyenne des salaires dans chaque département.

$employees = array(
    array("nom" => "Alice", "salaire" => 5000, "département" => "Ventes"),
    array("nom" => "Bob", "salaire" => 6000, "département" => "Ventes"),
    array("nom" => "Charlie", "salaire" => 7000, "département" => "RH"),
    array("nom" => "David", "salaire" => 5500, "département" => "RH")
);
*/

$employees = array(
    array("nom" => "Alice", "salaire" => 5000, "département" => "Ventes"),
    array("nom" => "Bob", "salaire" => 6000, "département" => "Ventes"),
    array("nom" => "Charlie", "salaire" => 7000, "département" => "RH"),
    array("nom" => "David", "salaire" => 5500, "département" => "RH")
);

$averageVentes = 0;
$averageRh = 0;

foreach ($employees as $value) {
    if ($value["département"]=="Ventes") {
        $averageVentes += $value["salaire"];
    }
    if ($value["département"]=="RH") {
        $averageRh += $value["salaire"];
    }
}

    $averageVentes = $averageVentes / 2;
    $averageRh = $averageRh /2;
    
    echo "Average Ventes : " .$averageVentes." ". " Average RH : " .$averageRh;

?>