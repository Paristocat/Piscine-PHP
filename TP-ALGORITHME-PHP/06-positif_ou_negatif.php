<!-- 
    # Écrire une fonction qui prend un nombre en paramètre
    # et return "positif" si le nombre est positif, ou bien "négatif" si le nombre
    # est negatif ou "nul" si le nombre est null.
    # Ensuite, affichez le résultat suivi d'un saut de ligne.
-->

<?php

function PlusouMoins($nombre){
    if ($nombre > 0){
        return "positif";
    } 
    elseif ($nombre < 0){
        return "négatif";
    } 
    else{
        return "nul";
    }
}

$nombre = 7;
$resultat = PlusouMoins($nombre);
echo $resultat . "\n";
?>
