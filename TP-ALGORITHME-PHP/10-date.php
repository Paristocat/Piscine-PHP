<!-- 
    # Créez une fonction qui affiche un message qui return la date du jours
    # (d/m/y) Puis affichez le résultat suivi d'un saut de ligne. 
-->


<?php

function afficherDate(){
    $date = date("d/m/Y");
    echo "La date du jour est: " . $date . "\n";
}

afficherDate();

?>
