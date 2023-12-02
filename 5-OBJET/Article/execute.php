<?PHP
/*Include the class of the object*/
include "Article.class.php";
/*PART 1 TO 4 FROM EXERCISE*/
/*Initiate variables for reference, designation, free taxes price and taxes fees*/
// $reference = "0124551";
// $designation = "Chaussures de sport rouge";
// $prixHt = 50;
// $tva = 20;
// /*Readline version*/
// // $reference = readline ("Reference :");
// // $designation = readline ("Designation :");
// // $prixHt = readline ("Prix HT :");
// // $tva = readline ("TVA (without %):");
// /*Instanciate a new object of class Article*/
// $article = new Article ($reference, $designation, $prixHt, $tva);
// /*Call method to calculate the price of an article*/
// $prixArticle = $article->calculerPrix();
// echo "Le prix de l'article est de : ".$prixArticle."\n";
// /*Call method to get info about the article*/
// $infoArticle = $article->afficherArticle();
// echo "Reference, denomation, price and taxes (%) of the article :"."\n".$infoArticle;

/*PART 5*/
/*Create first object of class Article*/
echo ("Create first Article :")."\n";
$reference = readline ("Reference :");
$designation = readline ("Designation :");
$article1 = new Article ($reference, $designation);
$afficherArticle1 = $article1->calculerPrix();
/*Create second object of class Article*/
echo ("Create second Article :")."\n";
$reference = readline ("Reference :");
$designation = readline ("Designation :");
$article2 = new Article ($reference, $designation);
$afficherArticle2 = $article2->calculerPrix();
/*Create third object of class Article*/
echo ("Create third Article :")."\n";
$reference = readline ("Reference :");
$designation = readline ("Designation :");
$article3 = new Article ($reference, $designation);
$afficherArticle3 = $article3->calculerPrix();
/*Echo results*/
echo ("Prix de l'article 1 : ").$afficherArticle1."\n".
("Prix de l'article 2 : ").$afficherArticle2."\n".
("Prix de l'article 3 : ").$afficherArticle3."\n";