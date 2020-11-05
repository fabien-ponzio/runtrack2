<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
 <form method="post" action="index.php">
 <label for="fname">Prénom</label>
 <input type="text" name="prenom" id="prenom" />
 <label for="lname">Nom</label>
 <input type="text" name="nom" id="nom" />
 <input type="submit" />
 </form>

</body>

<?php
$i= 0;
foreach($_POST as $argument){ 
  $i++;
echo("<p> element:" . $argument . "</p>"); 
}
 echo("nombre d'élément" . $i);
?>
</html>