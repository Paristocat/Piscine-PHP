<?php // OPEN PHP 
ini_set('display_errors','1');

// COMMENTAIRE  

// INSTRUCTIONS D'AFFICHAGE

// ECHO est une instruction qui nous permet d'effectuer un affichage. 
echo "Hello \n";
echo "<br>"; // Nous pouvions également y mettre du HTML
echo " World";

// VARIABLE : TYPES / DECLARATION / AFFECTATION
echo "<br>"; 
echo "\n VARIABLE : TYPES / DECLARATION / AFFECTATION \n";
echo "<br>"; 
// Une variable est un espace nommé permettant de conserver une valeur. 
// Déclaration d'une variable se fait avec le $.
// Affectaction de la valeur "Francis" dans la variable nommé "prenom". 
$prenom = "Francis";
echo $prenom . "<br>" ;
echo gettype($prenom) . "\n"; // string

$a = 42;
echo gettype($a) . "\n"; // integer  

$b = 1.5;
echo gettype($b)  . "\n"; // double

$c = "127";
echo gettype($c)  . "\n"; // string

// ALT + SHIFT + A (WIN)
// OPTION + SHIFT + A (MAC)
/* 
  Un booléen est type données qui peut prendre l'une des deux valeurs : vrai (true) ou faux (false) 
  Une lumière qui peut être soit allumée (true) soit eteinte (false).
  Vous pouvez utiliser des booléens pour representer des conditions ou des situations ou n'y a que deux options possibles. 
*/

$estVrai = TRUE;
echo gettype($estVrai)  . "<br>"; // boolean

$estFaux = FALSE;
echo gettype($estFaux)  . "<br>"; // boolean 

/* 
  Une variable peut contenir des chiffres, mais elle ne peut pas commencer par un chiffre.
  Elle doit commencer par une lettre (a à z) ou un souligné (_).
  gettype() est une fonction prédéfinie qui permet de récupérer le type d'une variable.
  Elle renvoie une chaine de caractères représentant le type de la variable passé en argument. 
*/

// CONCATENATION
echo "<br>"; 
echo "\n CONCATENATION \n";
echo "<br>"; 

$mot1 = "bonjour";
$mot2 = " tout le monde";

echo $mot1 . $mot2 . "<br>" ; // Point de concaténation que l'on peux traduire par 'suivi de'

echo $mot1 . "Francis <br>"; // concaténation text et variable.

echo "$mot1 $mot2 <br>"; // même chose sans concaténation. 

echo $mot1, $mot2 , "<br>" ; 

// CONCATENATION
echo "<br>"; 
echo "\n CONCATENATION LORS DE L'AFFECTATION \n";
echo "<br>"; 

$prenom1 = "Bruno";
$prenom1 = "Claire";

echo $prenom1 . "<br>"; // Affiche Claire

$prenom2 = "Bruno "; 
$prenom2 .= "Claire"; //  Affectation de la valeur 'Claire' sur la variable : $prenom2 ".=" cela ajoute SANS remplacer la valeur précente grâce à l'opérateur ".="

echo $prenom2 . "<br>";

// GUILLEMETS ET QUOTES 
echo "<br>"; 
echo "\n GUILLEMETS ET QUOTES \n";
echo "<br>"; 

$txt = "Hello";

echo "$txt tout le monde <br> \n"; // Affichage dans des guillements, la variable est évaluée.

echo '$txt tout le monde <br> \n'; // Affichage dans des quotes, la variable n'est pas évaluée.

// CONSTANTE ET CONSTANTE MAGIQUE 
echo "<br>"; 
echo "\n CONSTANTE ET CONSTANTE MAGIQUE \n";
echo "<br>"; 

/* 
  Une constante est un espace mémoire dont la valeur ne peut pas être modfiée une fois qu'elle a été définie.
  cela rend utile pour stocker dans valeurs qui ne doivent pas changer tout au long de l'éxécution du script, comme des informatins de configuration, des clés d'API, ou des paramètres importants.   
*/
 define("CAPITALE", "Paris"); // Par convention, une constante se déclare toujours en majuscule. 
  
 const CAPITALE_ = "Paris";  
 echo CAPITALE_ . "<br>";

 // constante magique
 echo __FILE__ . "<br>"; // Chemin complet vers le fichier 
 echo __LINE__ . "<br>"; // Affiche le numéro de la ligne

 // OPERATEURS ARITHMETIQUES
 echo "\n";
 echo "\n OPERATEURS ARITHMETIQUE \n";
 echo "<br>";

 $number1 = 10;
 $number2 = 2;

 echo $number1 + $number2 . "\n <br>"; // AFFICHE 12

 $resultAddition = $number1 + $number2; 

 echo $resultAddition . "\n <br>"; // affiche 12

 $number1 = 10;
 $number2 = 2;

 echo $number1 - $number2 . "\n <br>"; // AFFICHE 12

 $resultSoustraction = $number1 - $number2; 

 echo $resultSoustraction . "\n <br>"; // affiche 12



// CLOSE PHP ?>

