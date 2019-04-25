<?php session_start(); ?>


<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="../style.css" rel="stylesheet">
<title>Exercice Fornite</title>
</head>
<body>
  <header>
    <?php require_once './templates/nav.php' ?>
    <?php if (isset($_SESSION['pseudo'])): ?>
      <h1>Bon retour parmi nous <?php echo $_SESSION['pseudo'] ?></h1>
    <?php else: ?>
      <h1>Merci de vous connecter</h1>  
    <?php endif ?>

    <form action="./controllers/connect_inst.php" method="POST">
      <label for="pseudo">Ton pseudo</label>
      <input type="text" name="pseudo" placeholder="pseudo" required>
      <label for="password">Ton mot de passe</label>
      <input type="password" name="password" placeholder="Ton mot de passe" required>
      
      <input type="submit" value="Connection">

    </form>
  </header>
<main>
  <span><img src="./view/Fortnite_saison8_bis.jpeg"></span>
    
</main>
<footer>
  <?php require_once './templates/footer.php' ?>
</footer>
</body>
</html>