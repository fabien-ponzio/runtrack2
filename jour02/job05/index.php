<?php
$num=1;
while ($num<=1000) {
    //echo $num. "<br/>";
    $num=$num+1;
//

$p=true; 
for($v = 2; $v<$num;$v++){
    if($num % $v ==0){
        $p=false;
    }}
if ($p){
        echo $num. "<br/>";
    }

}
