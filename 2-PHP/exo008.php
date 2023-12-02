<?PHP
/*
Exercice 8 : Créez un tableau de dates de naissance.
Utilisez une boucle foreach pour afficher l'âge de chaque personne en années.
$birthdays = array("1990-05-15", "1985-12-10", "1998-03-25");
*/

$birthdays = array("1990-05-15", "1985-12-10", "1998-03-25");
$age=0;

foreach ($birthdays as $value) {
    $age = date("Y") - date("Y", strtotime($value));
    echo $age."\n";
}
?>