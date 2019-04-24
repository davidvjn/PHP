<?php

$fichier = [
  ['name' => 'Johnny', 'age' => 33, 'ville' => 'Antibes', 'situation' => 'libre'],
  ['name' => 'James', 'age' => 29, 'ville' => 'Paris', 'situation' => 'en couple'],
  ['name' => 'Christian', 'age' => 43, 'ville' => 'Marseille', 'situation' => 'libre'],
  ['name' => 'Toadette', 'age' => 31, 'ville' => 'Berlin', 'situation' => 'mariée'],
  ['name' => 'Peach', 'age' => 19, 'ville' => 'London', 'situation' => 'libre'],
  ['name' => 'Brenda', 'age' => 39, 'ville' => 'Lyon', 'situation' => 'libre'],
];

//var_dump($fichier); die;

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="./style.css" rel="stylesheet">
    <title>TP</title>
</head>
<body>
    <table>
      <tr>
        <th>Name</th>
        <th>Age</th>
        <th>Ville</th>
        <th>Situation</th>
      </tr>
      <?php foreach ($fichier as $value): ?>
      <tr>
        <td><?php echo $valxue['name'] ?></td>
        <td><?php echo $value['age'] ?></td>
        <td><?php echo $value['ville'] ?></td>
        <td><?php echo $value['situation'] ?></td>
      </tr>
      <?php endforeach; ?> 
    </table>
<script src="./script.js"></script>
</body>
</html>