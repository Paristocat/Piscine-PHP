
1

<?php // OPEN PHP 

2

ini_set('display_errors','1');

3

​

4

// COMMENTAIRE  

5

​

6

// INSTRUCTIONS D'AFFICHAGE

7

​

8

// ECHO est une instruction qui nous permet d'effectuer un affichage. 

9

echo "Hello \n";// Nous pouvions également y mettre du HTML

10

echo " World";

11

​

12

// VARIABLE : TYPES / DECLARATION / AFFECTATION

13

echo "\n VARIABLE : TYPES / DECLARATION / AFFECTATION \n";

14

// Une variable est un espace nommé permettant de conserver une valeur. 

15

// Déclaration d'une variable se fait avec le $.

16

// Affectaction de la valeur "Francis" dans la variable nommé "prenom". 

17

$prenom = "Francis";

18

echo $prenom . "<br>" ;

19

echo gettype($prenom) . "\n"; // string

20

​

21

$a = 42;

22

echo gettype($a) . "\n"; // integer  

23

​

24

$b = 1.5;

25

echo gettype($b)  . "\n"; // double

26

​

27

$c = "127";

28

echo gettype($c)  . "\n"; // string

29

​

30

// ALT + SHIFT + A (WIN)

31

// OPTION + SHIFT + A (MAC)

32

/* 

33

  Un booléen est type données qui peut prendre l'une des deux valeurs : vrai (true) ou faux (false) 

34

  Une lumière qui peut être soit allumée (true) soit eteinte (false).

35

  Vous pouvez utiliser des booléens pour representer des conditions ou des situations ou n'y a que deux options possibles. 

36

*/

37

​

38

$estVrai = TRUE;

39

echo gettype($estVrai)  . "<br>"; // boolean

40

​

41

$estFaux = FALSE;

42

echo gettype($estFaux)  . "<br>"; // boolean 

©2020 Sharemycode - a propos
codelist
notes

Historique des sharecodes consultés. Oh so cool Fred! 🙂
📣 2 actualités

    Joyeuses fêtes
    What's new inV2.0

23/11/2023

    sharemycode.fr/811 

sharemycode.fr/wck sharemycode.fr/36d sharemycode.fr/d9q


# Créez une fonction identité qui prend deux arguments 
# (nom, âge). Cette fonction doit retourner une chaîne de # la forme 'Bonjour [nom], vous avez [âge] ans 

# Créez une fonction siAdult qui prend un âge en paramètre.
# La fonction doit vérifier si la personne est majeure.
# Si c'est le cas, elle doit retourner "Vous êtes majeur", sinon "Vous êtes mineur".
(Une version ternaire est attendu) 

# Écrire une fonction qui prend une variable en paramètre
# et retourne le type de la variable (integer, STRING, booléen, ARRAY, NULL, DOUBLE.).

francis.freedev@gmail.com

https://discord.gg/ja2Vm62x