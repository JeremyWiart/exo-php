<?php

include('./autoLoader.php');

$monElfes = new Elfe('Yohann');
$monNain = new Nain('Jeremy');

$dameDuTonnerre=[$monElfes,$monNain];
$firstStrike = $monNain->defendre()-$monElfes->attaquer();
 
echo $firstStrike;
/*echo"Nom : ";
echo $monElfes->getName();
echo '<br><br>';
echo"Pv : ";
echo $monElfes->getPv();
echo '<br><br>';
echo"Endurance : ";
echo $monElfes->getArmure();
echo '<br><br>';
echo"Force : ";
echo $monElfes->getForce();
echo '<br><br>';
echo"En vie? : ";
echo $monElfes->getEnVie();
 
echo '<br><br><br><br>';
 
echo"Nom : ";
echo $monNain->getName();
echo '<br><br>';
echo"Pv : ";
echo $monNain->getPv();
echo '<br><br>';
echo"Endurance : ";
echo $monNain->getArmure();
echo '<br><br>';
echo"Force : ";
echo $monNain->getForce();
echo '<br><br>';
echo"En vie? : ";
echo $monNain->getEnVie();*/

?>