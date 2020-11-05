<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job02</title>
</head>
<body>
    <form action="index.php" method="GET"> <!-- creation d'un formulaire en GET lié à index.php !-->
        <label for="fname">Prénom</label>
        <input type="text" id="prenom" name="prenom">
        <label for="lname">Nom</label>
        <input type="text" id="nom" name="nom">
        <label for="button"></label>
        <input type="submit" id="button" name="button" value="valider">    
</form> <!--fin du formulaire!-->
        <table> <!-- création du tableau qui va contenir les colonnes et les valeurs associées!-->
            <th>Arguments</th>
            <th>Valeurs</th>

        <?php
        foreach ($_GET as $key => $value) { //boucle foreach qui va inspecter chaque élément du tableau - les variables $key et $value ont été déclarés//
            echo "
            <tr>
                <td>$key</td>
                <td>$value</td>
            </tr>";
            //echo va imprimer les valeurs correspondantes à $key et $value
        }
        ?>
        </table>
</body>
</html>