<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modification Article</title>
    <!--<script src="https://cdn.tailwindcss.com"></script> -->
    <!--link  rel="stylesheet" href="index_css.css" /-->
    <link  rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.1/dist/tailwind.min.css" />
</head>

<body class="bg-gray-900">
    
    <?php
        include('header.php');
    ?>
    <nav class="border border-black bg-gray-600 text-center p-2"><a href="index.php" class="border-2 border-red-600 rounded-lg p-1 m-1">Article</a> <a href="edit.php" class="border-2 border-red-600 rounded-lg p-1">Editer article</a></nav>
    <main class="flex items-center justify-center p-32">
        <div class="bg-white shadow-md rounded-lg w-full max-w-lg">
            <section id="form-section" class="p-6">
            
            <?php

                include('connexion.php');
                $req = $connexion ->query("SELECT id,titre,contenue,dates,auteur FROM article");
                while($reqFetch =$req->fetch()){

                    echo "<a href=\"edit.php?id=".$reqFetch[0]."\"><article class=\"flex justify-center border bg-gray-900 rounded-lg p-2 m-1\"><table class=\"w-5/6 \">

                    <tr><td class=\"bg-gray-600 border\">Titre : $reqFetch[1]</td></tr>
                    <tr><td class=\"bg-gray-600 border\">Contenue : $reqFetch[2]</td></tr>
                    <tr><td class=\"bg-gray-600 border\">Dates : $reqFetch[3]</td></tr>
                    <tr><td class=\"bg-gray-600 border\">Auteur : $reqFetch[4]</td></tr>
                    </table></article></a>";


                }

?>
                
                   
            </section>
        </div>
    </main>
    <?php
        include('footer.php');
    ?>
</body>

</html>