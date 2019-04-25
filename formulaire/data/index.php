<?php

session_start();)
//session_destroy();

//var_dump($_SESSION);
echo'<br>';

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire</title>
</head>
<body>
<!-- <header>
        <ul>
            <li><a href="/">Accueil</a></li>
            <li><a href="./page1.html">Page1</a></li>
            <li><a href="./page2.html">Page2</a></li>
            <li><a href="./deconnection.php">DECONNEXION</a></li>
        </ul>
    </header> -->
    <?php require_once './templates/header.html' ?>
    <?php if (isset($_SESSION['pseudo'])): ?>
        <h1>Bonjour <?= $_SESSION['pseudo'] ?></h1>
    <?php else: ?>
        <h1>Veuillez vous connecter</h1>
    <?php endif ?>

    <form action="./controllers/form.php" method="POST">
        <div>
            <label for="pseudo">Votre pseudo</label>
            <input type="text" name="pseudo">
        </div>
        <div>
            <label for="password">Votre mot de passe</label>
            <input type="password" name="password">
        </div>
        <div>
            <label for="luckyNumber">Votre nombre porte-bonheur</label>
            <input type="number" name="luckyNumber">
        </div>
        <input type="submit" value="Envoyer">
    </form>
</body>
</html>