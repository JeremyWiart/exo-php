<?php

echo "<form action=\"#\" method=\"POST\">
<label for=\"animal\">Votre animal preféré:</label>
<input id=\"animal\" name=\"animal\" type=\"text\"></br>
<label for=\"couleur\">Votre couleur preféré:</label>
<input id=\"couleur\" name=\"couleur\" type=\"text\"></br>
  <input name=\"save\" type=\"submit\" value=\"Enregistré\">
</form>";

if(isset($_POST['save'])){

   $animal = $_POST['animal'];
   $couleur = $_POST['couleur'];
    setcookie('Animal',''.$animal.'',['expires' => time() + 365*24*3600,'secure' => true,'httponly' => false,]);
    setcookie('Couleur',''.$couleur.'',['expires' => time() + 365*24*3600,'secure' => true,'httponly' => false,]);
}

?>