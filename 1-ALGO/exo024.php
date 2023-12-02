<?php
/*Exercice 24 :
    Les habitants de Paris paient l'impôt selon les règles suivantes :
- Les hommes de plus de 20 ans paient l'impôt
- Les femmes paient l'impôt si elles ont entre 18 et 35 ans
- Les autres ne paient pas d'impôt
Le programme demandera donc l'âge et le sexe du parisien, et se
prononcera donc ensuite sur le fait que l'habitant est imposable.
    
Name : Tax algorithm
Var gender : letters
Var age : int
Start
    //Set variables
        $gender <- valeur choisie
        $age <- valeur choisie
    //Condition if 
        Si homme et $age >= 20 || Si femme et $age >= 18 et <= 35
    //Echo results
        Echo imposable
    //Else
        Echo non imposable 
End
*/

    //Set variables
        $gender = readline ("Renseignez votre sexe (H/F) : ") ;
        $age = readline ("Renseignez votre age : ") ;
    //Condition if 
        if ($gender == "H" && $age >= 20 || $gender == "F" && ($age >= 18 && $age <= 35)) {
    //Echo results
        echo "Imposable" ;
        }
    //Else
        else {
        echo "Non imposable" ;
        }
?>


