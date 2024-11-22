<?php

echo "User Agent : ".$_SERVER['HTTP_USER_AGENT']."\n\n</br>";

echo "adresse IP (Local) : ".$_SERVER['REMOTE_ADDR']."</br>";

echo "Nom du serveur : ".$_SERVER['SERVER_NAME'];

echo "<form action=\"#\" method=\"POST\">
  <input name=\"info\" type=\"submit\" value=\"Page info\">
</form>";

if(isset($_POST['info'])){
    header("location:http://localhost/exo-php/info.php");

}

echo "<form action=\"#\" method=\"POST\">
  <input name=\"animal\" type=\"submit\" value=\"Page animal\">
</form>";

if(isset($_POST['animal'])){
    header("location:http://localhost/exo-php/form_pref_anim.php");

}

echo "<form action=\"#\" method=\"POST\">
  <input name=\"pref\" type=\"submit\" value=\"Page préférences\">
</form>";

if(isset($_POST['pref'])){
    header("location:http://localhost/exo-php/preferences.php");

}

echo "<form action=\"#\" method=\"POST\">
  <input name=\"edit\" type=\"submit\" value=\"Modifier Cookie\">
</form>";

if(isset($_POST['edit'])){
    header("location:http://localhost/exo-php/edit.php");

}

?>