<?php

session_start();

$_SESSION['pseudo'] = $_POST['pseudo'];
$_SESSION['password'] = $_POST['password'];
$_SESSION['luckyNumber'] = $_POST['luckyNumber'];

//var_dump($_SESSION);

header('Location: /'); // point d'entrée du site = ('Location: /index.html')


//mercredi 24 avril

//var_dump($_POST);
/*
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
*/