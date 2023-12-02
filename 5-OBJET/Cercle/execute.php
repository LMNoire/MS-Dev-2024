<?php
/*Include the class of the object*/
include 'Cercle.class.php';
/*Instanciate a new object of class Cercle*/
$cercle1 = new Cercle(4, 3, 5);
/*Call method to get the abcisse from Cercle.class*/
$pt1 = $cercle1->getCentre()->getAbcisse();
/*Call method to get the ordonnee from Cercle.class*/
$pt2 = $cercle1->getCentre()->getOrdonnee();
/*Call method to get the rayon from Cercle.class*/
$r = $cercle1->getRayon();
/*Call method to get the perimetre from Cercle.class*/
$perimetre = $cercle1->getPerimetre();
/*Call method to get the surface from Cercle.class*/
$surface = $cercle1->getSurface();
/*Echo the results*/
// echo "L'abcisse du centre du cercle est de : ".$pt1."\n".
// "L'ordonnée du centre du cercle est de : ".$pt2."\n".
// "Le rayon du cercle est de : ".$r."\n".
// "Le perimetre du cercle est de : ".$perimetre."\n".
// "La surface du cercle est de : ".$surface."\n";
/*Instanciate a new object of class Point*/
$point = new Point (5,5);
/*Call method to know if the point is in the circle*/
$afficher = $cercle1->afficher();
$appartient = $cercle1->appartient($point);
if ($appartient == true) {
    echo "Ce point appartient au cercle";
}
elseif ($appartient!=true) {
    echo "Ce point n'appartient pas au cercle";
}
?>