<?php
/*
$name = null;


if (isset($name)) {
    echo 'La variable $name existe';
} else {
    echo 'La variable $name n\'existe pas';
}

// is_null

// is_int --> nombre

// is_string --> chaîne de caractères

*/

$ingredients = ['Salade', 'Tomates', 'Oignon'];
$sauce = 'blanche';
$ingredients[0] = "Batavia";
array_push($ingredients, $sauce);
var_dump($ingredients);
    echo '<br>';
unset($ingredients[1]);
var_dump($ingredients);
    echo '<br>';
foreach ($ingredients as $element) {
    echo $element;
    echo '<br>';
}
echo "Il y a " .count($ingredients). " ingrédients"; //die;
echo '<br>';

$kebab = [
    'Salade' => 2,
    'Tomate' => 1,
    'Oignons' => 1,
    'Sauce blanche' => 1,
    'Mayo' => 4,
    'Ketchup' => 3,
];

$total = 0;
foreach ($kebab as $composants => $prix) {
$total += $kebab[$composants];        
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>TP</title>
</head>
<body>
    <table>
      <tr>
        <th>Ingrédients</th>
        <th>Quantités</th>
    </tr>
    <?php foreach ($kebab as $key => $value) {?>
    <tr>
        <?php echo '<td>'.$key.'</td>';
              echo '<td>'.$value.'</td>'; }?> 
    </tr>
    </table>
    <?php echo '<h1>'.'Le total de votre commande est de '.$total.'€'.'</h1>';?>
</body>
</html>