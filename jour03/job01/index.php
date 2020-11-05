<?php
//je déclare mon tableau et ses valeurs
$num=array(200,204,173,98,171,404,459);

foreach($num as $chiffre){
    if($chiffre % 2 == 0 )
    echo $chiffre.' est pair<br/>';
}

?>