<?PHP
/*Include the class of the object*/
include "Livre.class.php";
/*Initiate variables for author, title and price*/
$auteur = "La Fontaine";
$titre = "Les fables de La Fontaine";
$prix = 30;
/*Readline version*/
// $titre = readline ("Titre :");
// $auteur = readline ("Nom de l'auteur :");
// $prix = readline ("Prix :");
/*Instanciate a new object of class Book*/
$book = new Livre ($titre, $auteur, $prix);
/*Call method afficher to echo info about the book*/
$afficherLivre = $book->afficher();
echo $afficherLivre;
?>