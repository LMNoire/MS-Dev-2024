<?php
/*Include the class of the object*/
include "Point.class.php";
/*Initiate variables for absiss and ordonate, point 1*/
$x=1;
$y=2;
/*Instanciate a new object of class Point*/
$pt1 = new Point($x, $y);
/*Call method norme*/
$distance = $pt1->norme();
/*Echo the results*/
echo $distance;
echo "\n";
/*Initiate variables for absiss and ordonate, point 2*/
$x=3;
$y=5;
/*Instanciate a new object of class Point*/
$pt2 = new Point($x, $y);
/*Call method norme*/
$distance = $pt2->norme();
/*Echo the results*/
echo $distance;
echo "\n";
print_r($pt1);
print_r($pt2);
?>
