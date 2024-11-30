<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FIGHT</title>
    <!--<script src="https://cdn.tailwindcss.com"></script> -->
    <!--link  rel="stylesheet" href="index_css.css" /-->
    <link  rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.1/dist/tailwind.min.css" />
</head>

<body class="bg-gray-400">
   
    
    <main class="flex justify-center p-32">
        <div class="bg-white shadow-md rounded-lg w-full max-w-lg p-4 text-center">
            <h1 class="font-bold border-2 border-red-600 rounded-lg">Combat</h1>
            <section id="form-section" class="flex flex-col">
               <table>
                <tr><th>Joueur 1</th><th>Joueur 2</th></tr>
                
                
                <?php
                $tour=0;
                include('./autoLoader.php');
                
                    $monElfes = new Elfe('Yohann');
                    $monNain = new Nain('Jeremy');
                
                
                
               
            
               
                echo "
                 <form action=\"?tour=".$tour."\" method=\"POST\" class=\"text-center font-bold bg-gray-600 p-4 rounded-lg\">
                <tr><td>Classe : ".$monElfes->getRace()."</td><td>Classe  : ".$monNain->getRace()."</td></tr>
                <tr><td>Nom : ".$monElfes->getName()."</td><td>Nom  : ".$monNain->getName()."</td></tr>
                <tr><td>Point de vie : ".$monElfes->getPv()."</td><td>Point de vie  : ".$monNain->getPv()."</td></tr>
                <tr><td>Armure : ".$monElfes->getArmure()."</td><td>Armure  : ".$monNain->getArmure()."</td></tr>
                <tr><td>Force : ".$monElfes->attaquer()."</td><td>Force  : ".$monNain->attaquer()."</td></tr>
                <tr><td colspan=\"2\"><input name=\"fight\" type=\"submit\" value=\"Fight !\" class=\"w-5/6 border-2 border-red-600 rounded-lg\"></td></tr></form>
                ";
                
                    if(isset($_POST['fight'])){
                        
                        $firstStrike =$monNain->defendre()-$monElfes->attaquer();
                        $monNain->setArmure($firstStrike);
                        $tour++;
                        echo "
                        <tr><td colspan=\"2\" class=\"w-5/6 border-2 border-blue-600 rounded-lg\"> Tour ".$tour." </td></tr>
                        <tr><td>".$monNain->getRace()."</td><td>".$monElfes->getRace()."</td></tr>
                        <tr><td> Armure :".$monNain->getArmure()."</td><td>Armure :".$monElfes->getArmure()."</td></tr>
                        ";
                        $secondStrike = $monElfes->defendre() - $monNain->attaquer();
                        $monElfes->setArmure($secondStrike);
                        $tour++;
                        echo "
                        <tr><td colspan=\"2\" class=\"w-5/6 border-2 border-blue-600 rounded-lg\"> Tour 2 </td></tr>
                        <tr><td>".$monNain->getRace()."</td><td>".$monElfes->getRace()."</td></tr>
                        <tr><td> Armure :".$monNain->getArmure()."</td><td>Armure :".$monElfes->getArmure()."</td></tr>
                        ";
                    }
                ?>
                </table> 
            </section>
        </div>
  
</body>

</html>


