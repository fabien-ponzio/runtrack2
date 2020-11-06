<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function occurences ($str, $char){
    $n=0;
    for ($i=0; isset($str[$i]) ; $i++) { 
        if(strtolower($str[$i])==strtolower($char){
            $n++;
        }
    }
    return $n;
}

echo occurences("Jeremy se trouve dans mon angle mort","a")

    ?>
</body>
</html>