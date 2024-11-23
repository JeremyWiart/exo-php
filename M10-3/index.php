<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulaire PHP</title>
    <!--<script src="https://cdn.tailwindcss.com"></script> -->
    <!--link  rel="stylesheet" href="index_css.css" /-->
    <link  rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.1/dist/tailwind.min.css" />
</head>

<body class="bg-gray-100">
    

    <main class="flex items-center justify-center p-32">
    <div class="bg-white shadow-md rounded-lg w-full max-w-lg">
    <section id="form-section" class="p-6">
    <form action="#" method="POST">
<h1>Formulaire Informations</h1>
<label for="nom">Nom:</label>
<input id="nom" name="nom" type="text"></br>
<label for="genre">Genre:</label>
<input id="genre" name="genre" type="text"></br>
<label for="mail">Email:</label>
<input id="mail" name="mail" type="email"></br>
<label for="sujet">Sujet:</label>
<input id="sujet" name="sujet" type="text"></br>
<label for="msg">Message:</label>
<textarea id="msg" name="msg"></textarea></br>
  <input name="edit" type="submit" value="Enregistré">

</form>
    </section>
    </div>
    </main>
</body>

</html>
