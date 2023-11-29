<!--
    # Écrivez une fonction prenant deux paramètres, 'nb1' et 'nb2', 
    # représentant des nombres. Cette fonction devrait additionner ces deux nombres 
    # et retourner le résultat. 
    # Ensuite, affichez le résultat suivi d'un saut de ligne. 
-->

<?php

function addition($nb1, $nb2){
    return $nb1+$nb2;
    }
    
    $nb1 = 10; 
    $nb2 = 5;

    $resultat = addition($nb1, $nb2);
    echo "$resultat \n";


?>