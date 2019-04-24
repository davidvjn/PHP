<?php

var_dump($_POST);

$pseudo = $_POST['pseudo'];
$password = $_POST['password'];
$luckyNumber = $_POST['luckyNumber'];

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire</title>
</head>
<body>
    <p>Ton pseudo est <?= $pseudo?></p>
    <p>Ton mot de passe est <?= $password?></p>
    <p>Ton numéro chanceux est <?= $luckyNumber?></p>
</body>
</html>