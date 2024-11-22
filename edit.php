<?php

echo "<form action=\"#\" method=\"POST\">
<h1>Modification Cookie</h1>
<label for=\"animal\">Modifier votre animal preféré:</label>
<input id=\"animal\" name=\"animal\" type=\"text\"></br>
<label for=\"couleur\">Modifier votre couleur preféré:</label>
<input id=\"couleur\" name=\"couleur\" type=\"text\"></br>
  <input name=\"edit\" type=\"submit\" value=\"Enregistré\">
</form>";

if(isset($_POST['edit'])){

   $animal = $_POST['animal'];
   $couleur = $_POST['couleur'];
   if(!empty($animal)){

    setcookie('Animal',''.$animal.'',['expires' => time() + 365*24*3600,'secure' => true,'httponly' => false,]);
   }
   if(!empty($couleur)){
    setcookie('Couleur',''.$couleur.'',['expires' => time() + 365*24*3600,'secure' => true,'httponly' => false,]);
   }
}

?>