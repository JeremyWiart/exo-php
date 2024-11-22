<?php

$nom = "Wiart";
$prenom = "Jeremy";
$age = 33;
$_SESSION['nom']=$nom;
$_SESSION['prenom']=$prenom;
$_SESSION['age']=$age;

echo $_SESSION['nom']."</br>";
echo $_SESSION['prenom']."</br>";
echo $_SESSION['age'];
?>