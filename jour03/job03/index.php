<?php
function mystrlen($str)
{
$count = 0;
for($i=0; $i<1000000; $i++)
{
if(@$str[$i] != "")$count++;
else break;
}
return $count;
}
$str="i'm sorry Dave i'm afraid i can't do that.";
$voyelle=array("a","e","i","o","u","y");
//$i = id d'un caractère d'$str $v = id d'une voyelle
for ($i=0; $i < mystrlen($str) ; $i++) { 
    for ($v=0; $v < 6 ; $v++) { 
       if($str[$i]==$voyelle[$v])
       echo $str[$i];
    }
}


?>