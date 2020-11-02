<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- je définis mes classes -->

    <?php
    $bool = true;
    $entier = 17;
    $chaine = 'swoosh';
    $virgule =26.03;


    echo ("<table>
    <tr>
    <th>Type</th>
    <th>Nom</th>
    <th>Valeur</th>
    </tr>

    <tr>
    <td>booleen</td>
    <td>bool</td>
    <td>$bool</td>
    </tr>

    <tr>
    <td>nombre entier</td>
    <td>entier</td>
    <td>$entier</td>
    </tr>

    <tr>
    <td>Chaine de caractères</td>
    <td>swoosh</td>
    <td>$chaine</td>
    </tr>

    <tr>
    <td>flottant</td>
    <td>virgule</td>
    <td>$virgule</td>
    </tr>

    </table>
    ")
    ?>
</body>
</html>