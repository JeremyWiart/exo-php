<?php

if(isset($_COOKIE['Animal']) || isset($_COOCKIE['Couleur'])){
    $animal = $_COOKIE['Animal'];
    $couleur = $_COOKIE['Couleur'];
    
    echo "Votre animal préferé est : ".$animal." et votre couleur préferé est : ".$couleur;
}

?>