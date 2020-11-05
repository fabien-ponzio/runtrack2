<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job02</title>
</head>
<body>
    <form action="index.php" method="post"> 
        <label for="fname">Prénom</label>
        <input type="text" id="prenom" name="prenom">
        <label for="lname">Nom</label>
        <input type="text" id="nom" name="nom">
        <label for="button"></label>
        <input type="submit" id="button" name="button" value="valider">    
</form>

<table> 
            <th>Arguments</th>
            <th>Valeurs</th>

        <?php
        foreach ($_POST as $key => $value) { 
            echo "
            <tr>
                <td>$key</td>
                <td>$value</td>
            </tr>";
        }
        ?>
        </table>
</body>
</html>