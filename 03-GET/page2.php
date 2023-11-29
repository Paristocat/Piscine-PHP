<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>PAGE 2</h1>

  <?php 
  
    // if(empty($_GET['article']) && empty($_GET['couleur']) && empty($_GET['prix'])){
    //   echo "Aucun Param !";
    // }
    // else{
    //   echo "Param 0 : " . $_GET['article'] . "<br>";
    //   echo "Param 1 : " . $_GET['couleur'] . "<br>";
    //   echo "Param 2 : " . $_GET['prix'] . "<br>";
    // }

    if(!empty($_GET['article']) && !empty($_GET['couleur']) && !empty($_GET['prix'])){
      echo "Param 0 : " . $_GET['article'] . "<br>";
      echo "Param 1 : " . $_GET['couleur'] . "<br>";
      echo "Param 2 : " . $_GET['prix'] . "<br>";
    }
    else{
      echo "Aucun Param !";
    }

    if(empty($_GET['article']) || empty($_GET['couleur']) || empty($_GET['prix'])){
      echo "Aucun Param !";
    }
    else{
      echo "Param 0 : " . $_GET['article'] . "<br>";
      echo "Param 1 : " . $_GET['couleur'] . "<br>";
      echo "Param 2 : " . $_GET['prix'] . "<br>";
    }

  ?>

</body>

</html>