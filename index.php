<?php
    var_dump($_GET);

    $page = isset($_GET["page"])? $_GET["page"] : "home";

    switch ($page) {
        case "home":
            echo "Vous avez demandé la page d'accueil !";
            break;
        case "entree":
            echo "Vous avez demandé la page entrées !";
            break;
        case "plat":
            echo "Vous avez demandé la page plats !";
            break;
        case "dessert":
            echo "Vous avez demandé la page desserts !";
            break;
        default : echo "Vous avez demandé la page d'accueil !";
    }
?>

<!DOCTYPE html>
<html lang="fr">

    <head>
        <title>Mon livre de recettes</title>
        <meta charset="utf-8">
         <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    
    <body>
        <header>
            <?php require "html/menu.php" ?>
        </header>
        
        <article>
            <h2 class="text-center">Suggestion du jour</h2>
            <ul class="row items">
                <li class="img-bullet col-4 text-center"><img src="img/entree3.jpg" alt="Photo de l'entrée 3"><br><a href ="recettes/entrees/entree3.html">Entrée 3</a></li>
                <li class="img-bullet col-4 text-center"><img src="img/plat1.jpg" alt="Photo du plat 1"><br><a href ="recettes/plats/plat1.html">Plat 1</a></li>
                <li class="img-bullet col-4 text-center"><img src="img/dessert1.jpg" alt="Photo du dessert 1"><br><a href ="recettes/desserts/dessert1.html">Dessert 1</a></li>
            </ul>
        </article>
    </body>

</html>