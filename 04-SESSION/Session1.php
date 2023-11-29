<?php

// $_SESSION

/* 
  Dossier temporaire se trouvant dans (c:/wamp/tmp/ ou c:/xamp/tmp/)
  Dossier temporaire se trouvant dans (c:/Applications/MAMP/tmp)
*/

/* 
  @session_start()
  Permet de créer un fichier de session ou de l'ouvrir s'il existe déjà.
*/


session_start();

/* 
  @SESSION
  $_SESSION est une superglobale. (Toutes les superglobales sont des tableaux)
*/

$_SESSION['prenom'] = "Xav";
$_SESSION['nom'] = "BG";
$_SESSION['age'] = "42";

$prenom = "Xav"



?>