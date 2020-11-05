<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

 <body> <!-- Création d'un index en GET  !-->
 <form method="GET" action="index.php">
 <label for="fname">Prénom</label>
 <input type="text" name="prenom" id="prenom" />
 <label for="lname">Nom</label>
 <input type="text" name="nom" id="nom" />
 <input type="submit" />
 </form>
</body>

<?php
$i= 0;
foreach($_GET as $argument){ //on créée une boucle foreach et on incrémente de 1
  $i++;
echo("<p> element:" . $argument . "</p>"); //echo permet d'imprimer $argument déclaré dans $_get
}
 echo("nombre d'élément" . $i); //echo permet d'imprimer la valeur de $i
?>
</html>