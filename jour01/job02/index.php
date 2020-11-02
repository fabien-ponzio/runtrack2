<?php
// je classe mes variables
$str = "LaPlateforme_";
$str2="Hello";
$str3 = "!";
 echo $str2." ".$str." ".$str3;//appel des variables dans l'ordre

 function malice($v1, $v2, $v3){
 echo ($v1. $v2. $v3);}
 malice($str2, $str, $str3);/* Création et appel d'une fonction */
 ?>