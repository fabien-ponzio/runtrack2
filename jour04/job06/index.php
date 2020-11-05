<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job06</title>
</head>
<body>
    <form action="index.php" method="get" >
    <label for="nombre">nombre</label>
    <input type="text" name="nombre">
    <input type="submit" id="button" name="button" value="valider">
    </form>

    <?php
    $num=(int)$_GET["nombre"];
    if ($num %2 == 0) {
        echo "Nombre est pair";
    }
    else {
        echo "Nombre est impair";
    }
    
    ?>
</body>
</html>