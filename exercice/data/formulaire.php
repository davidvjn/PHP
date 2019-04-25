<?php

session_start();

?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Fortnite</title>
</head>
<body>
  <header>
    <?php require_once './templates/nav.php' ?>
  </header>
<main>
  <span><img src="./view/Fortnite_saison8_bis.jpeg"/></span>
  <form action="" method="POST">
            <label for="pseudo">Ecris ton pseudo :</label>
            <input type="text" name="pseudo" placeholder="ton pseudo" required>
            <br>
            <label for="sexe">Es-tu un garçon :</label>
            <input type="radio" name="sexe">
            <br>
            <label for="sexe">Es-tu une fille :</label>
            <input type="radio" name="sexe">
            <br>
            <label for="prénom">Ecris ton prénom :</label>
            <input type="text" name="prénom" placeholder="ton prénom" required>
            <br>
            <label for="nom">Ecris ton nom :</label>
            <input type="text" name="nom" placeholder="ton nom" required>
            <br>
            <label for="birthdate">Rentre ta date de naissance :</label>
            <input type="date" name="birthdate" placeholder="ta date de naissance" required>
            <br>
            <label for="adresse_mail">Ecris ton adresse mail :</label>
            <input type="text" name="adresse_mail" placeholder="ton adresse mail" required>
            <br>
            <label for="password">Entre ton mot de passe :</label>
            <input type="password" name="password" placeholder="ton mot de passe" required>

            <input type="submit" value="ok">
        </form>
</main>
<footer>
  <?php require_once './templates/footer.php' ?>
</footer>
</body>
</html>