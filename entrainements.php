<?php // OPEN PHP 
ini_set('display_errors','1');

// COMMENTAIRE  

// INSTRUCTIONS D'AFFICHAGE

// ECHO est une instruction qui nous permet d'effectuer un affichage. 
echo "Hello \n";// Nous pouvions également y mettre du HTML
echo " World";

// VARIABLE : TYPES / DECLARATION / AFFECTATION
echo "\n VARIABLE : TYPES / DECLARATION / AFFECTATION \n";
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
echo "\n CONCATENATION \n";

$mot1 = "bonjour";
$mot2 = " tout le monde";

echo $mot1 . $mot2 . "<br>" ; // Point de concaténation que l'on peux traduire par 'suivi de'

echo $mot1 . "Francis <br>"; // concaténation text et variable.

echo "$mot1 $mot2 <br>"; // même chose sans concaténation. 

echo $mot1, $mot2 , "<br>"; 

// CONCATENATION
echo "\n CONCATENATION LORS DE L'AFFECTATION \n";

$prenom1 = "Bruno";
$prenom1 = "Claire";

echo $prenom1 . "<br>"; // Affiche Claire

$prenom2 = "Bruno "; 
$prenom2 .= "Claire"; //  Affectation de la valeur 'Claire' sur la variable : $prenom2 ".=" cela ajoute SANS remplacer la valeur précente grâce à l'opérateur ".="

echo $prenom2 . "<br>";

// GUILLEMETS ET QUOTES 
echo "\n GUILLEMETS ET QUOTES \n";

$txt = "Hello";

echo "$txt tout le monde <br> \n"; // Affichage dans des guillements, la variable est évaluée.

echo '$txt tout le monde <br> \n'; // Affichage dans des quotes, la variable n'est pas évaluée.

// CONSTANTE ET CONSTANTE MAGIQUE 
echo "\n CONSTANTE ET CONSTANTE MAGIQUE \n";

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

// OPERATEURS ARITHMÉTIQUE
echo "\n OPERATEURS ARITHMÉTIQUE \n";

$number1 = 10;
$number2 = 2;

// ADDITION
echo $number1 + $number2 . "\n <br>"; // affiche 12 

// camelCase
$resultAddition =  $number1 + $number2;

echo $resultAddition  . "\n <br>"; // affiche 12 

// SOUSTRACTION

$resultSoustraction = $number1 - $number2;
echo $resultSoustraction . "\n <br>";

// MULTIPLICATION

$resultMultiplication = $number1 * $number2;
echo $resultMultiplication . "\n <br>";

// DIVISION
$resultDivision = $number1 / $number2;
echo $resultDivision . "\n";

// Operation par affectation 
// echo $number1 += $number2 . "<br>"; // Equivaut à $number1 = $number1 + $number2; (12) 
// echo $number1 -= $number2 . "<br>"; // Equivaut à $number1 = $number1 - $number2; (8)
// echo $number1 *= $number2 . "<br>"; // Equivaut à $number1 = $number1 * $number2; (20)
// echo $number1 /= $number2 . "<br>"; // Equivaut à $number1 = $number1 / $number2; (5)

// STRUCTURES CONDITIONNELLES
echo "\n STRUCTURES CONDITIONNELLES \n";

/* 
  Isset = test si la variable définie.
  Empty = test si la variable est vide
*/

$var1 = 0;
$var2 = ""; 

if(empty($var2)) // return soit true ou false 
{
  echo "var2 est vide! \n";
}
else{
  echo "var2 n'est pas vide \n";
}

if(isset($var1))
{
  echo "var1 existe et est definie \n";
}
else{
  echo "var1 n'est pas définie \n";
}

$number3 = 3; 
$number4 = 2; 
$number5 = 5; 

if($number3 > $number4) // return TRUE
{
  echo "number3 est bien supérieur a number4 \n";
}

if($number3 < $number5 && $number3 > $number4 ) // return TRUE
{
  echo "ok pour les deux \n";
}
else{
  echo "FALSE \n";
}

// OPTION + SHIFT + L (MAC) " | "
// ALGR + 6 (WIN) FOR " | " 

// SI NUMBER3 contient 9 ou si NUMBER4 est inferieur a NUMBER5  
if($number3 == 9 || $number4 < $number5) // return TRUE
{
  echo "Ok pour au moins l'une des deux conditions \n";
}
else {
  echo "Tout est faux ! \n";
}

if($number3 == 10)
{
  echo "number3 est egal a 10 \n";
}
elseif($number3 == 8){
  echo "number3 est egal a 8 \n";
}
elseif($number3 !=  10){
  echo "number3 est different de 10 \n";
}
else{
  echo "Tout est faux \n";
}

//  Switch 
$couleur = "jaune";

switch($couleur)
{
  case 'bleu':
    echo "couleur contient bleu  \n";
  break;
  case 'rouge':
    echo "couleur contient rouge \n";
  break;
  case 'vert': 
    echo "couleur contient vert \n";
  break;
  default:
    echo "Tout est faux ! \n";
  break;
}

if($couleur === "bleu")
{
  echo "couleur contient bleu \n";
}
elseif($couleur === "rouge")
{
  echo "couleur contient rouge \n";
}
elseif($couleur === "vert")
{
  echo "couleur contient vert \n";
}
else{
  echo "Tout est faux ! \n";
}

/* 
  (Comparaison)
  = (Affectation)
  == (comparaison des valeurs)
  === (comparaison des valeurs et du type)
*/

$var3 = 1; // TYPE : INTEGER
$var4 = "1"; // TYPE : STRING

if($var3 == $var4) // return TRUE
{
  echo "Il s'agit de la même chose \n"; 
}

if($var3 === $var4) // return FALSE
{
  echo "Il s'agit de la même chose \n"; 
}
else{
  echo "Il ne s'agit pas de la même chose \n "; 
}

if($number3 > $number4)
{
  echo "number3 est bien supérieur! \n";
}
else{
  echo "number4 est superieur! \n";
}

if($number3 > $number4)
{
  echo "number3 est bien supérieur! \n";
}
else{
  echo "number4 est superieur! \n";
}
// Forme de condition contractée (ternaire)
// ? = ALORS
// : = SINON
echo $number3 > $number4 ? "(TERNAIRE) number3 est bien supérieur! \n" : "(TERNAIRE) number4 est superieur! \n";


// FONCTIONS PREDEFINIES
echo "\n ****** FONCTIONS PREDEFINIES ****** \n";

/* 
  @date
  Permet de renvoyer la date.
*/
echo "Date : " . date("d/m/y") . "\n" ;

/* 
  @strpos
  Indique la postion du caractere "@" dans la chaine.
  Nous pourrons l'utiliser pour savoir si une adresse a un format conforme.
  Il existe aussi des expressions regulieres (regex). 
*/
$email = "votreEmail@site.fr";
echo "Strpos : " . strpos($email, "@") . "\n";

/* 
  @substr
  Substr(), Une fonction predefinie permettant de retourner une partie de la chaine.
  1. Nous devons lui fournir la chaine que l'on souhaite couper.
  2. Nous devons lui préciser la position du début.
  3. Nous devons lui préciser la position de fin.
  Contexte : souvent utilisé pour afficher des actualités avec une "accroche".  
*/

$texte = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores et sapiente deleniti at autem adipisci assumenda facilis laborum rerum itaque saepe dolore, quam unde, quod blanditiis aliquid voluptatibus cupiditate asperiores!";

echo substr($texte, 0, 20) . "... Lire la suite \n"; 

/* 
  @iconv_strlen
  Fonction predefinie permettant de retourner la taille d'une chaine.
  Contexte : Nous pourrons l'utiliser pour savoir si le pseudo et le mdp lors d'une inscription ont des tailles conforme.
*/

$phrase = "Mettez une phrase ici !";
echo iconv_strlen($phrase) . "\n"; 


// FONCTION 
echo "\n ****** FONCTION ****** \n";

function hello()
{
  echo "Hello world 👋🏾 \n";
}
hello();

/* 
 @function
 Une function avec des arguments signifie que des paramètres sont fournis à la fonction, ce qui lui permet de compléter ou de modifier son comportement initialement prevu.
 $user represente une variable de reception.
*/

function bonjour($user)
{
  echo "Bonjour $user 👋🏾 \n";
}
// bonjour("toto");

// return stop le scrip !
// return export une information de son espace local 
function bonjour2($user)
{
  return "Bonjour $user 👋🏾 \n";
}
echo bonjour2("toto");

function addition($nb1, $nb2)
{
  $result = $nb1 + $nb2;
  return $result;
}
echo addition(6, 7) . "\n";
$resultAddition2 = addition(6, 7);
echo "Result Addition $resultAddition2 \n"; 

function checkAge($age)
{
  if(empty($age))
  {
    return "Pas d'age ! \n";
  }
  else
  {
    return "Votre age est de $age ans \n";
  }
}
echo checkAge(15);

# Créez une fonction identité qui prend deux arguments 
# (nom, âge). Cette fonction doit retourner une chaîne de # la forme 'Bonjour [nom], vous avez [âge] ans 

function identy($nom, $age){
 return  "Bonjour $nom, vous avez $age ans. \n"; 
}
echo identy("Munabe", 34);

/*
  En résumé, ce code utilise des variables globales et locales, ainsi que des fonctions pour manipuler ces variables. 
  Les valeurs affichées à la fin sont 22, 42, et 90 respectivement.
*/

// Déclare une variable $numbre22 et lui assigne la valeur 22
$numbre22 = 22;

// Définit une fonction appelée "test"
function test(){
  // Déclare une variable locale $numbre22 dans la fonction et lui assigne la valeur 42
  $numbre22 = 42;
  // Retourne la valeur de la variable locale $numbre22
  return $numbre22;
}

// Affiche la valeur de la variable globale $numbre22 (22)
echo $numbre22 . "\n";

// Appelle la fonction "test" et affiche la valeur retournée par la fonction (42)
echo test() . "\n";


// Déclare une variable $numbre42 et lui assigne la valeur 90
$numbre42 = 90;

// Définit une fonction appelée "test2" qui prend un argument $arg
function test2($arg){
  // Déclare une variable locale $numbre22 dans la fonction et lui assigne la valeur de l'totoument $arg
  $numbre22 = $arg;
  // Retourne la valeur de la variable locale $numbre22
  return $numbre22;
}
// Appelle la fonction "test2" avec l'argument $numbre42 et affiche la valeur retournée par la fonction (90)
echo test2($numbre42) . "\n";


function test3($a, $b){  
  return "$a et $b \n";
}

echo test3($prenom, $numbre42);

// BOUCLE 
echo "\n ****** STRUCTURE ITERATIVE : BOUCLE ****** \n";
$i = 0; // valeur de départ

while($i <= 5){ //  Tant que $i est inferieur a 5
  echo "Hello ($i) \n";
  $i++; // ceci est forme contractée de : $i = $i + 1
}

// valeur de départ ; condition d'entrée ; sens (incrémentation ou décémentation)
for($i = 0; $i <= 5; $i++){
  echo "Hello ($i) 👋🏾 \n";
}

// BOUCLE FOREACH & TABLEAUX DE DONNEES
echo "\n ****** BOUCLE FOREACH & TABLEAUX DE DONNEES ****** \n";

/* 
  @Array
    Un tableau est déclarée un peu comme une variable améliorée,
    car on ne conserve pas qu'une valeur mais un ensemble de valeur. 
*/
$list = array("virginie", "bouba", "francis", "jocelyn");

echo $list[0] . "\n"; 
echo $list[1] . "\n"; 
echo $list[2] . "\n"; 
echo $list[3] . "\n"; 

/* 
  @VAR_DUMP()
   var_dump() affiche le contenu du tableau plus certaines informations comme le type et la taille. 
   Exemple : var_dump($list);

  @PRINT_R()
    print_r() affiche le contenu du tableau avec l'index.
    Exemple : print_r($list);
*/

/* 
  @tab[]
  Autre moyen d'affecter une valeur dans un tableau.
  Nous mettons pas le mot 'array()' mais les crochets.
  Pratique pour ajouter des informations en cours de route 
  (apres que le tableau ait été déclaré partiellement avec quelques valeurs ou pas)
*/

$tab[] = "France";
$tab[] = "Italie"; 
$tab[] = "Angleterre";

$tab2 = ["France", "Italie", "Angleterre"];
$tab2[] = "Portugal";

echo $tab[0] . "\n"; 
echo $tab[1] . "\n"; 
echo $tab[2] . "\n"; 

// Parcourir le $tab avec un foreach pour afficher succéssivement les elements du tableau ($tab); 
foreach($tab as $values){ // Le mot AS fait partie du langage et est obligatoire. 
  echo "Dans le foreach => $values \n";
}

/* 
  Qunad il y a deux variables, la 1ere parcours la colonne des indices (index) 
  et la seconde parcours la colonne des valeurs
*/ 
foreach($tab as $index => $values){
  echo "$index => $values \n";
}

// Créer un tableau avec des indices et valeurs.

$user = ["nom" => "Munabeno", "prenom" => "Francis", "age" => 34]; 

foreach($user as $index => $values){
  echo "$index => $values \n"; 
}

// INCLUSION DE FICHIERS
echo "\n ****** INCLUSION DE FICHIERS ****** \n";

/* 
  @include & @require
   - Include fait une erreur et continue l'éxécution du code.
   - Require fait une erreur et stop l'execution du code.
  
  @require_once || @include_once
    - Le once vérifie si le fichier à déjà été inclus, si c'est le cas, il ne le(s) ré-inclus pas.

  Le ".inc" est indicatif précisant aux developpeurs que le fichier est destiné a l'inclusion et qu'il ne s'agit d'une page a par entiere.
*/
include('./test.php');
include_once('./test.php');

require('./02-TEST/footer.inc.php'); 
require_once('./02-TEST/footer.inc.php'); 

// CLOSE PHP ?>

