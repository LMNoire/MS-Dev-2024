<?php
/*Exercice 12 :
    Ecrire un programme qui lit le prix HT d'un article, le nombre d'articles et le taux de TVA et qui fournit le prix total TTC correspondant. 
Faire en sorte que les libellés apparaisent clairement

Name : Algorithm for calculating a price including VAT
Var : int
Start
    //Set variables
        nA <- nombre d'article 
        hT <- prix hors taxe pour un article 
        tva <- taux de la tva 
    //Divide VAT value by 100
        tva <- (1 + tva / 100) 
    //Calculate the price including VAT
        ttc <- nA * hT * (1 + tva) 
    //Echo results
        Echo prix ttc 
End

Results
Start
    //Set variables
        nA <- 10 
        hT <- 10 
        tva <- 20 
    //Divide VAT value by 100
        tva <- (1 + 20 / 100 )
    //Calculate the price including VAT
        ttc <- 10 * 10 * (1 + 21) 
    //Echo results
        Echo prix ttc 
End
*/

    //Set variables
        $nA = readline ("Entrez NA : ");
        $hT = readline ("Entrer HT : ");
        $tva = readline ("Entrez TVA : ");
    //Divide VAT value by 100
        $tva /= 100; //Simplification $tva=$tva/100 == $tva/=100
    //Calculate the price including VAT
        $ttc = $nA * $hT * ($tva + 1);
    //Echo results
        echo "TTC = $ttc";
?>