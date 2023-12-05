<?PHP
/*Include the class of the object*/
include "Employe.class.php";
/*Instanciate a new object of class Employe*/
$employe1 = new Employe("10941", "MARTIN", "Omar", "04/08/1990", "05/11/2012", 1000);
/*Call method to get the age of employee*/
echo "L'age de ".$employe1->getPrenom()." est de : ".$age = $employe1->age()." ans"."\n";
/*Call method to get the seniority of employee*/
echo "L'ancienneté de ".$employe1->getPrenom()." est de : ".$anciennete = $employe1->anciennete()." ans"."\n";
/*Call method to raise salary*/ 
echo "Le salaire de ".$employe1->getPrenom()." est de : ".$employe1->getSalaire()."\n";
echo "Grace à son ancienneté de ".$anciennete = $employe1->anciennete()." ans, son nouveau salaire est de : ".$employe1->augmentationDuSalaire($anciennete)."\n";
echo "--------------"."\n";
/*Call method to display employee*/
echo $displayEmploi = $employe1->AfficherEmployé();
?>