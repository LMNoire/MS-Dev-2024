<?PHP
/*Include Etudiant_professeur.class*/
include "Etudiant_professeur.class.php" ;
/*Include Employe.class*/
include "Employe.class.php" ;
/*Include Professeur.class*/
include "Professeur.class.php" ;
/*Instanciate the object Personne*/
// echo $personne1 = new Personne (1, "DOUK", "Rachid")."\n" ;
/*List of employes*/ 
echo "La liste des employés : \n" ;
/*Instanciate the object Employe*/
echo $employe1 = new Employe (10000, 3, "DOUK", "Rachid")."\n" ;
echo $employe2 = new Employe (10000, 4, "NGOYE", "Roland")."\n" ;
/*List of students*/ 
echo "La liste des etudiants : \n" ;
/*Instanciate the object Etudiant*/
echo $etudiant1 = new Etudiant ("65678754", 2, "OBAKA", "Med")."\n" ;
echo $etudiant2 = new Etudiant ("87543543", 5, "ALSENY", "Thomas")."\n" ;
/*List of professors*/ 
echo "La liste des professeurs : \n" ;
/*Instanciate the object Professor*/
echo $professeur1 = new Professeur ("JAVA/JEE", 5700, 6, "OBA", "Kevin")."\n" ;
echo $professeur2 = new Professeur ("PHP", 5000, 7,"MAGASSOUBA", "Cheick") ;
