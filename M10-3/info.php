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
    

    <main class="flex items-center justify-center p-32">
        <div class="bg-white shadow-md rounded-lg w-full max-w-lg">
            <section id="form-section" class="p-6">
                <div class="bg-gray-400 shadow-md rounded-lg w-full max-w-lg">
                    
                    <?php
                        $i=0;
                        $cookies = ['nom','genre','email','sujet','message'];
                        
                        foreach($_COOKIE as $cookie){

                            echo "<article>".$cookies[$i]." : ".$cookie." </article>";
                            $i++;
                        }
                    ?>

                </div>

            </section>
        </div>
    </main>
</body>

</html>