<?PHP
/*Include Utilisateur.class*/
include "Utilisateur.class.php" ;
include "Profil.class.php" ;
/*Instanciate the object Personne*/
// $personne1 = new Personne (1, "AFHIM", "Moussa", "afhim.moussa@toubkal-it.com", "0611111111", 2000) ;
// echo $personne1->afficher() ;
echo "SOCIETE TOUBKAL-IT : \n----------\n" ;
// /*Instanciate the object Utilisateur1*/
// $utilisateur1 = new Utilisateur ("MAF", "afpa2022", "Manager", 1, "AFHIM", "Moussa", "afhim.moussa@toubkal-it.com", "0611111111", 2000, new Profil ("001", "MN")) ;
// /*Call method to display Utilisateur1*/
// echo $utilisateur1->afficher() ;
// /*Call method to calculate new salary*/
// echo "Salaire après augmentation : ".$utilisateur1->calculerSalaire()."€\n----------\n" ;
// /*Instanciate the object Utilisateur2*/
// $utilisateur2 = new Utilisateur ("JAL", "afpa2022", "Chef de projet", 2, "ALBERT", "Jean", "jean.albert@toubkal-it.com", "062222222", 2000, new Profil("002", "CP")) ;
// /*Call method to display Utilisateur2*/
// echo $utilisateur2->afficher() ;
// /*Call method to calculate new salary*/
// echo "Salaire après augmentation : ".$utilisateur2->calculerSalaire()."€\n----------\n" ;
// /*Instanciate the object Utilisateur3*/
// $utilisateur3 = new Utilisateur ("TAL", "afpa2022", "Directeur de projet", 3, "TABLE", "Laurent", "laurent.table@toubkal-it.com", "0633333333", 2000, new Profil ("003", "DP")) ;
// /*Call method to display Utilisateur3*/
// echo $utilisateur3->afficher() ;
// /*Call method to calculate new salary*/
// echo "Salaire après augmentation : ".$utilisateur3->calculerSalaire()."€\n----------\n" ;
// /*Instanciate the object Utilisateur4*/
// $utilisateur4 = new Utilisateur ("ROL", "afpa2022", "Directeur des ressources humaines", 4, "ROUEN", "Louis", "louis.rouen@toubkal-it.com", "0644444444", 2000, new Profil("004", "DRH")) ;
// /*Call method to display Utilisateur4*/
// echo $utilisateur4->afficher() ;
// /*Call method to calculate new salary*/
// echo "Salaire après augmentation : ".$utilisateur4->calculerSalaire()."€\n----------\n" ;
// /*Instanciate the object Utilisateur5*/
// $utilisateur5 = new Utilisateur ("TER", "afpa2022", "Directeur général", 5, "TERRIEN", "Romain", "romain.terrien@toubkal-it.com", "0655555555", 2000, new Profil("005", "DG")) ;
// /*Call method to display Utilisateur5*/
// echo $utilisateur5->afficher() ;
// /*Call method to calculate new salary*/
// echo "Salaire après augmentation : ".$utilisateur5->calculerSalaire()."€\n----------\n" ;
//Instantiate profil into an array//
$profils = [
    $profil1 = new Profil ("001", "MN"),
    $profil2 = new Profil("002", "CP"),
    $profil3 = new Profil ("003", "DP"),
    $profil4 = new Profil("004", "DRH"),
    $profil5 = new Profil("005", "DG")
] ;
//Instantiate utilisateur into an array//
$utilisateurs = [
    $utilisateur1 = new Utilisateur ("MAF", "afpa2022", "Manager", 1, "AFHIM", "Moussa", "afhim.moussa@toubkal-it.com", "0611111111", 2000, new Profil ("001", "MN")),
    $utilisateur2 = new Utilisateur ("JAL", "afpa2022", "Chef de projet", 2, "ALBERT", "Jean", "jean.albert@toubkal-it.com", "062222222", 2000, new Profil("002", "CP")),
    $utilisateur3 = new Utilisateur ("TAL", "afpa2022", "Directeur de projet", 3, "TABLE", "Laurent", "laurent.table@toubkal-it.com", "0633333333", 2000, new Profil ("003", "DP")),
    $utilisateur4 = new Utilisateur ("ROL", "afpa2022", "Directeur des ressources humaines", 4, "ROUEN", "Louis", "louis.rouen@toubkal-it.com", "0644444444", 2000, new Profil("004", "DRH")),
    $utilisateur5 = new Utilisateur ("TER", "afpa2022", "Directeur général", 5, "TERRIEN", "Romain", "romain.terrien@toubkal-it.com", "0655555555", 2000, new Profil("005", "DG"))
] ;
//Foreach to display utilisateurs by profils//
foreach ($profils as $profil) {
    echo $profil->afficher() ;
    foreach ($utilisateurs as $utilisateur) {
        if ($utilisateur->getProfil()->getLibelle() == $profil->getLibelle()) {
            echo $utilisateur->afficher() ;
            echo "Salaire après augmentation : ".$utilisateur->calculerSalaire()."\n" ;
        }
    }
}