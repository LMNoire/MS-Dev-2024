<?PHP
/*Include classe of object Etudiant*/
include "Etudiant.class.php" ;
/*Instanciate three filiere in an array*/
$filieres = [
    $filiere1 = new Filiere("INF", "Informatique"),
    $filiere2 = new Filiere("TEC", "Techno de l'info et de communication"),
    $filiere3 = new Filiere("GEN", "Génie civil")
] ;
/*Instanciate five students in an array*/
$students = [
    new Etudiant ("Rashid", "Mohamed", new DateTime('1995/01/02'), $filiere1),
    new Etudiant ("Yves", "Chakib", new DateTime('1992/04/02'), $filiere1),
    new Etudiant ("Martin", "Manal", new DateTime('2011/03/02'), $filiere2),
    new Etudiant ("Jacques", "Meriem", new DateTime('2000/11/02'), $filiere3),
    new Etudiant ("Rami", "Mouad", new DateTime('2013/01/02'), $filiere3)
] ;
/*Foreach filieres in the array, echo $filiere*/
foreach ($filieres as $filiere) {
            echo $filiere."\n" ;
/*Foreach students in the array, compare student->getFiliere to $filiere*/
foreach ($students as $student) {
    if ($student->getFiliere() == $filiere) {
        echo $student."\n" ;
        }
    }
}




