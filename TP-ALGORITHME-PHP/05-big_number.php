<!-- 
    # Écrire une fonction qui prend deux nombres en paramètre
    # et retourne le plus grand des deux.
    # Ensuite, affichez le résultat suivi d'un saut de ligne.
-->

<?php

function retournePlusGrand($nombre1, $nombre2){
    if ($nombre1 > $nombre2){
        return $nombre1;
    } else {
        return $nombre2;
    }
}

$nombre1 = 10;
$nombre2 = 7;
$plusGrand = retournePlusGrand($nombre1, $nombre2);
echo $plusGrand . "\n";

?>
