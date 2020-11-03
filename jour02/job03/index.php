
    <?php 
    $num=0;
    for ($num=0;$num<=100;$num++){
        if($num>=0 &&$num<=20){
        echo "<i>".$num."</i><br>";
    }

    elseif($num==42){
        echo("La Plateforme_<br>");
    }

    elseif($num>=25&&$num<=50){
        echo"<u>".$num."</u><br>";
    }
    else{
        echo $num. "<br>";
    }
    }
    ?>
