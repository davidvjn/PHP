<?php

$myArray = ['Billy', 'Paul', 'Paulette', 'Binette'];

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="style.css" rel="stylesheet">
    <title>Formulaire</title>
</head>
<body>
    <table>
        <tr>
            <th>Noms</th>
        </tr>
        <?php foreach ($myArray as $item): ?>
                <tr>
                    <td>
                        <?php echo $item ?>
                    </td>
                </tr>
            <?php endforeach ?>
<!--        <?php
            foreach ($myArray as $item) {
                echo '<tr>';
                echo '<td>' . $item . '</td>';
                echo '</tr>';
            }
        ?>
-->
<!--        <tr>
            <td>Billy</td>
        </tr>
        <tr>
            <td>Paul</td>
        </tr>
        <tr>
            <td>Paulette</td>
        </tr>
        <tr>
            <td>Binette</td>
        </tr>
-->
    </table>
</body>
</html>