<?php

var_dump($_POST);

$verif = isset($_POST["chk"])? "a" : "n'a pas";

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Commentaires utilisateur</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <header>
        <?php require "html/menu.php" ?>
    </header>

    <section class="fig-menu bg-light">
        <p>[<strong><?= $_POST['level'] ?></strong>] <?= $_POST['nom'] ?> (<?= $_POST['email'] ?>) vous a laissé le commentaire suivant :</p>
        <p><?= $_POST['comment'] ?></p>
        <p>Note : <?= $_POST['note'] ?> / 5</p>
        <p>(L'utilisateur <?= $verif ?> accepté les conditions générales)</p>
    </section>
    
</body>
</html>