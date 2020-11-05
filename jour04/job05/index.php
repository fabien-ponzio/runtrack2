<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label for="login">Login</label>
        <input type="text" name="username">
        <label for="mdp">Mot de Passe</label>
        <input type="password" name="password">
        <label for="button"></label>
        <input type="submit" id="button" name="button" value="valider">    
    </form>

    <?php
    if (isset($_POST['button'])) {
        # code...

    if ($_POST["username"]=="John" && $_POST["password"]=="Rambo") {
            echo ("C'est pas ma guerre");
        }
        else {
            echo ("Votre pire cauchemar");
        }
    }
    ?>
</body>
</html>