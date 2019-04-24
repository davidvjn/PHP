<?php

$names = ['Billy', 'Paul', 'Paulette', 'Binette'];

$names = [
    [ 'name' => 'Billy', 'age' => 54, 'passion' => 'tarot' ],
    [ 'name' => 'Paul', 'age' => 44, 'passion' => 'poker' ],
    [ 'name' => 'Paulette', 'age' => 23, 'passion' => 'rami' ],
    [ 'name' => 'Binette', 'age' => 26, 'passion' => 'rien' ],
];

//var_dump($names); die;

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="style.css" rel="stylesheet">
    <title>PHP</title>
</head>
<body>
    <table>
        <tr>
            <th>Noms</th>
            <th>Age</th>
            <th>Passion</th>
        </tr>
        <?php foreach ($names as $name): ?>
            <tr>
                <td><?php echo $name['name'] ?></td>
                <td><?php echo $name['age'] ?></td>
                <td><?php echo $name['passion'] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>