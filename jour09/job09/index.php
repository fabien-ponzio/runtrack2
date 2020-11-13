<?php
$db = mysqli_connect ('localhost', 'root','', 'jour08');
$query = mysqli_query($db, "SELECT * FROM `salles` ORDER BY capacite DESC");
$id = mysqli_fetch_all($query);
//var_dump ($id);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table>
    <thead>
    <tr>
        <th>superficie_totale</th>
    </tr>
    </thead>
    <tbody>
            <?php foreach ($id as $key ) { // creation d'une boucle foreach qui va inspecter tous les $key qui se trouvent dans $id
                echo "<tr>"; // à chaque fois que la boucle va tomber sur un $key il va afficher une ligne
                foreach ($key as $value) { // creation d'une boucle qui va inspecter les éléments $value dans $key
                   echo "<td>$value</td>"; // à chaque fois que la boucle va tomber sur $value il va l'affiche dans un <td>
                }
                echo "</tr>"; // on ferme le tableau
            } ?>         
    </tbody>
    </table>
</body>
</html>