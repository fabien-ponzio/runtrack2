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

$str="Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.";
for ($i=0; $i < mystrlen($str); $i=$i+2) { 
    echo $str[$i].'<br/>';
}


?>