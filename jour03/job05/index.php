<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <table>
    <tr>
    <th>Consonnes</th>
    <th>Voyelles</th>
    </tr>
    
<?php 
$str = "On n est pas le meilleur quand on le croit mais quand on le sait";
// initialisation du compteur
$dic = array('consonnes' => 0, 'voyelles' => 0 ); 
// initialisation des valeurs
$nbvoyelles = 0;
$nbconsonnes = 0;
$voyelles = array( "a","e","i","o","u","y");
$consonnes = array("b","c","d","f","g","h","j","k","l","m","n","p","q","r","s","t","v","w","x","z");
 
for ($decomptestr=0; isset($str[$decomptestr]); $decomptestr++) { 
    if (in_array($str[$decomptestr], $voyelles)) {
        $nbvoyelles++;
        $dic['voyelles']=$nbvoyelles;
    }
else if (in_array($str[$decomptestr], $consonnes)){
 $nbconsonnes++;
 $dic['consonnes']=$nbconsonnes;
}
}
?>
<tr>
    <td> <?php echo $dic['consonnes'] ?> </td>
    <td> <?php echo $dic['voyelles'] ?> </td>
</tr>
</table>
</body>
</html>

