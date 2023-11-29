<!-- 
    # Écrire une fonction qui prend une chaîne de caractères en paramètre
    # et retourne "vide" si la chaîne est vide sinon "non vide"
    # Ensuite, affichez le résultat suivi d'un saut de ligne.
-->


<?php

function determinerVide($chaine){
    if (empty($chaine)){
        return "vide";
    } 
    else {
        return "non vide";
    }
}

$chaine = "Salut";
$resultat = determinerVide($chaine);
echo $resultat . "\n";
?>
