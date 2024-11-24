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

<body class="bg-gray-900">
    <?php
        include('header.php');
    ?>

    <main class="flex items-center justify-center p-32">
        <div class="bg-white shadow-md rounded-lg w-full max-w-lg">
            <section id="form-section" class="p-6 text-center bg-gray-600">
                 <h1 class="bg-gray-400 font-bold border-4 border-black rounded-lg">Infos personnel</h1>
                <div class=" shadow-md rounded-lg w-full max-w-lg text-center">
                   
                    <?php
                        $i=0;
                        $cookies = ['nom','genre','email','sujet','message'];
                        foreach($_COOKIE as $cookie){
                            echo "<article class=\"border-2 border-red-600 rounded-lg bg-gray-400 m-2\">".$cookies[$i]." : ".$cookie." </article>";
                            $i++;
                        }

                        echo "<form action=\"#\" method=\"POST\">
                        <input name=\"index\" type=\"submit\" value=\"Index\" class=\"border-2 border-black w-1/4 rounded-lg\">
                        </form>";
              
                        if(isset($_POST['index'])){
                            header("location:http://localhost/exo-php/M10-3/index.php");
                        
                        }
                    ?>

                </div>

            </section>
        </div>
    </main>
    <?php
        include('footer.php');
    ?>
</body>

</html>