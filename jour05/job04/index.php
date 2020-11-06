<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    function calcule ($a, $operation, $b){
        switch ($operation) {
            case '+':
                $result=$a+$b;
            break;
            case '-':
                $result=$a-$b;
            break;
            case '/':
                $result=$a/$b;
            break;
            case '*':
                $result=$a*$b;
            break;
            default:
                $result ="L'opérateur de calcul ne figure pas dans les calculs possible";
            break;
        }

            

        return $result;
    }
   echo calcule(15,"/",3);

    ?>
</body>
</html>