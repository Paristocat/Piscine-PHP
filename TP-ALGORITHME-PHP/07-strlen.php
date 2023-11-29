<!-- 
    # Écrire une fonction qui prend une chaîne de caractères en paramètre
    # et retourne "longue" si la longueur de la chaîne est supérieure à 10,
    # sinon "courte".
    # Ensuite, affichez le résultat suivi d'un saut de ligne.
-->

<?php

function determinerLongueur($chaine){
    if (strlen($chaine) > 10){
        return "longue";

    } else
    
    {
        return "courte";
    }
}

$chaine = "Allez Paris!";
$longueur = determinerLongueur($chaine);
echo $longueur . "\n";


?>
