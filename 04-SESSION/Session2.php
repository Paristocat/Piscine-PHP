<?php

/* 
  Lorsque j'effectue un session_start(), la session n'est pas recrée car elle existe déjà (grâce au session_start() lancé par le fichier session1.php)
*/
session_start();

print_r($_SESSION);


?>


Session_start();

/* 
  Ce fichier n'a rien à voir avec l'autre (session1.php), il n'y a pas d'inclusion, il pourrait être dans un autre dossier, s'appeler n'importe comment, les informations contenu seraient quand même accessible! c'est la puissance et l'interêt des sessions !
*/

foreach($_SESSION as $index => $values){
    echo"$index => $values <br>";
}


?>