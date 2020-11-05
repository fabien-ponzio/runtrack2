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

$str="Dans l'espace personne ne vous entends crier";
  echo mystrlen($str);
?>