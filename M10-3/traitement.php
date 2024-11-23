<?php
  
  if(isset($_POST['save'])){
    $nom=$_POST['nom'];
    $genre=$_POST['genre'];
    $mail=$_POST['mail'];
    $sujet=$_POST['sujet'];
    $message=$_POST['msg'];
    if(!empty($nom) && !empty($genre) && !empty($mail) && !empty($sujet) && !empty($message)){
        setcookie('nom',''.$nom.'',['expires' => time() + 365*24*3600,'secure' => true,'httponly' => false,]);
        setcookie('genre',''.$genre.'',['expires' => time() + 365*24*3600,'secure' => true,'httponly' => false,]);
        setcookie('email',''.$mail.'',['expires' => time() + 365*24*3600,'secure' => true,'httponly' => false,]);
        setcookie('sujet',''.$sujet.'',['expires' => time() + 365*24*3600,'secure' => true,'httponly' => false,]);
        setcookie('message',''.$message.'',['expires' => time() + 365*24*3600,'secure' => true,'httponly' => false,]);
        echo "<h2>enregistrement effectuer</h2>";
        //header( "refresh:3;url=http://localhost/exo-php/M10-3/" );
        

    }else{
        echo "Veuillez remplire tous les champs !";
    }


  }

?>