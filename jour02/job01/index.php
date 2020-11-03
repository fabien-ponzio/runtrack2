<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php
        $num=0;                             
        while ($num<=1337) {

            if ($num==42) {
                echo "<u><b>".($num)."</b></u>";
                echo"<br />"; 
                $num = $num +1;
            }
            echo ($num)."<br/>";
            $num=$num+1;
        }   
    ?>

</body>
</html>

