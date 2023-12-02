<?PHP

/*
Exercice 6 : Créez un script qui génère une séquence de nombres de 5 en 5, commençant par 20 et s'arrêtant à 100 à l'aide d'une boucle "for".
*/

$temp = 0;

for($i=20; $i<=100; $i+=5 ){
    $temp += $i;
    echo $i." ";
}

?>