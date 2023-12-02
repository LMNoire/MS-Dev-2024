<?php
/*Exercice 18 :
    Ecrire un algorithme qui demande l'âge d'un enfant à l'utilisateur
Ensuite, il l'informe de sa catégorie :
    Poussin de 6 à 7 ans
    Pupille de 8 à 9 ans
    Minime de 10 à 11 ans
    Cadet après 12 ans
Peut-on concevoir plusieurs algorithmes équivalents menant à ce résultat ?

Name : Category assignment algorithm
Var : int
Start
    //Set variables
        âge <- renseigner âge enfant
    //Condition if
        Si âge entre 6 et 7
    //Echo results
        Echo Poussin
    //Condition elseif
        Si âge entre 8 et 9
    //Echo results
        Echo Pupille
    //Condition elseif
        Si âge entre 10 et 11
    //Echo results
        Echo Minime
    //Condition elseif
        Si âge 12 et plus
    //Echo results
        Echo Cadet
End
*/

    //Set variables
        $age = readline ("Age de l'enfant : ");
    //Condition if
        if ($age == 6 or $age == 7 ){
    //Echo results
        echo "Poussin";
    //Condition elseif
        } else if ($age == 8 or $age == 9){
    //Echo results
        echo "Pupille";        
    //Condition elseif
        } else if ($age == 10 or $age == 11){
    //Echo results
        echo "Minime";
    //Condition elseif                                     
        } else if ($age >= 12){
    //Echo results
        echo "Cadet";
        }
?>