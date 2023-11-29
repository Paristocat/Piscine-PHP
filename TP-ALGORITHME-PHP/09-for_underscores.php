<!-- 
    # Créez une fonction qui affiche un message, par exemple 'Hello'. 
    # Utilisez une boucle pour afficher le résultat de cette fonction 10 fois.
    # Ajoutez trois underscores avant et après le cinquième message.
-->


<?php


function afficherHello(){
    echo "Hello";
}

for ($i = 0; $i < 10; $i++){
    if ($i == 4){
        echo "___";
        afficherHello();
        echo "___";
    } 

    else{
        afficherHello();
    }
}

?>
