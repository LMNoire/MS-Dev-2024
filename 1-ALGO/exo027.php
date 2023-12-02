<?php
/*Exercice 27 :
    Ecrire un algorithme qui permet de donner le résultat d'un étudiant à un
module sachant que ce module est sanctionné par une note d'oral de 
coefficient 1 et une note d'écrit de coefficient 2. La moyenne obtenue
doit être supérieure ou égale à 10 pour valider le module.

Name : Module validation algorithm
Var : int
Start 
    //Set variables
        $oral <- valeur choisie
        $writ <- valeur choisie
    //Calculating average
        $ave = (($oral + $writ * 2)/3)
    //Condition if
        ($ave >= 10)
    //Echo result
        Echo "You validate the module, congratulations !"
    //Condition elseif
        ($ave < 10)
    //Echo result
        Echo "You didn't validate the module, sorry !"
End 
*/

    //Set variables
        $oral = readline ("Please type your oral grade : ");
        $writ = readline ("Please type your written grade : ");
    //Calculating average
        $ave = (($oral + $writ * 2)/3);
    //Condition if
        if ($ave >= 10) {
            echo "You validate the module, congratulations !";
        }
    //Condition elseif
        else {
            echo "You didn't validate the module, sorry !";
        }
?>
