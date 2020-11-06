<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

  <?php
  $j=false; // établissement de notre variable
    function bonjour($jour){ //création de la fonction bonjour qui contient le paramètre $jour 
        if ($jour == TRUE) { // conditionnelle "si le paramètre jour == TRUE alors echo 'Bonjour'"
            echo "Bonjour";
        }
        else {              // dans le cas contraire alors echo'Bonsoir'
            echo "Bonsoir";
        }
    }
    bonjour($j); // appel de la fonction qui va afficher $j.
  ?>


</body>
</html>