<?php
    try
    {
        $connexion = new PDO('mysql:host=localhost;dbname=journal', 'root', '');
        $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(Exception $e)
    {
            die('Erreur : '.$e->getMessage());
    }
?>