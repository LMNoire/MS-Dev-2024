<?php

    /*Exercice 25

    Consigne :
        Ecrire un algorithme saisissant deux variables entières qui
        calcule et affiche leur moyenne.

    Averaging of two whole numbers algorithm
        Var : Whole number
            Start ;
                Ask a first whole number ;
                Ask a second whole number ;
                Add the two whole numbers and divide by two ;
                Show the result ;
            End ;  

    */
    
    //Start
    //Ask two whole numbers
        $var1 = readline ("Type a first whole number : ") ;
        $var2 = readline ("Type a second whole number : ") ;
    //Averaging
        $ave = (($var1 + $var2) / 2) ;
    //Show results
        echo "\n";
        echo "Average of $var1 and $var2 : $ave" ;
    //End

?>



