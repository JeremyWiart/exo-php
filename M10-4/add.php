<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ajout article</title>
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
            <form action="#" method="POST" class="text-center font-bold bg-gray-600 p-4 rounded-lg">
                    <h1 class="border-2 border-red-700 text-center mb-4">Formulaire Ajout Article</h1>
                    <label for="titre">Titre Article : </label></br>
                    <input id="titre" name="titre" type="text" class="border-2 border-red-600 m-1 rounded-lg"></br>
                    <label for="msg">Message Article : </label></br>
                    <textarea id="msg" name="msg" class="border-2 border-red-600 m-1 rounded-lg w-3/4"></textarea></br>
                    <label for="date">Date Article : </label></br>
                    <input id="date" name="date" type="date" class="border-2 border-red-600 m-1 rounded-lg"></br>
                    <label for="auteur">Auteur Article:</label></br>
                    <input id="auteur" name="auteur" type="text" class="border-2 border-red-600 m-1 rounded-lg"></br>
                    
                    
                    <input name="save" type="submit" value="Enregistré" class="w-1/4">
                <?php 
                include('connexion.php');
                
                    if(isset($_POST['save'])){
                         $titre = $_POST['titre'];
                         $msg = $_POST['msg'];
                         $date = $_POST['date'];
                         $auteur = $_POST['auteur'];
                         if(!empty($_POST['titre']) && !empty($_POST['msg']) && !empty($_POST['date']) && !empty($_POST['auteur'])){
                            $req = $connexion->prepare("INSERT INTO article VALUES ('0',:titre,:msg,:dates,:auteur)");
                            $req->bindValue(':titre',$titre,PDO::PARAM_STR);
                            $req->bindValue(':msg',$msg,PDO::PARAM_STR);
                            $req->bindValue(':dates',$date,PDO::PARAM_STR);
                            $req->bindValue(':auteur',$auteur,PDO::PARAM_STR);
                            if($req->execute()){
                                echo "ajout terminer !";
                            }else{
                                echo "un problème est survenue !";
                            }
                        }else{
                            echo "Veuillez remplire tous les champs !";
                        }    
                        
                    }

                
                ?>
                    </form>
            </section>
        </div>
    </main>
    <?php
        include('footer.php');
    ?>
</body>

</html>