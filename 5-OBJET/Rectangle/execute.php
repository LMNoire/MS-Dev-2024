<?PHP
/*Include the class of the object*/
include "Rectangle.class.php";
/*Initiate variables for long and larg*/
$long = 2;
$larg = 3;
/*Instanciate a new object of class Rectangle*/
$rectangle = new Rectangle ($long, $larg);
/*Call method perimetre*/
$perimetre = $rectangle->perimetre();
/*Echo the results*/
echo $perimetre;
echo "\n";
/*Call method aireRectangle*/
$aireRectangle = $rectangle->aireRectangle();
/*Echo the results*/
echo $aireRectangle;
echo "\n";
/*Call method estCarre*/
$estCarre = $rectangle->estCarre();
/*Echo the results*/
echo $estCarre;
echo "\n";
/*Call method afficherRectangle*/
$afficherRectangle = $rectangle->afficherRectangle($perimetre, $aireRectangle);
/*Echo the results*/
echo $afficherRectangle.$estCarre;
?>