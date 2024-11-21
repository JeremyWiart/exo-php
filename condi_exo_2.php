<?php

$age = 33;
$genre = ["Homme","Femme"];

if($genre[0] == "Homme" && $age >= 18){

    echo "si vous êtes un homme, vous êtes majeur";
}elseif($age < 18){
    echo "si vous êtes un homme, vous êtes mineur";
}

if($genre[1] == "Femme" && $age >= 18){

    echo " si vous êtes une femme, vous êtes majeur";
}elseif($age < 18){
    echo " si vous êtes une femme, vous êtes mineur";
}
?>