<?php

// commentaire

/* commentaire
sur
plusieurs
lignes
*/

$string = 'exemple';
$number = 35;
$bolean = true;
$array = ['David', 'Florent', 35, 'Jérémy'];

$name = 'Dave';
$age = '35';

//echo $string;

echo "Mon nom est $name, j'ai $age ans";
echo '<br>';
echo 'Mon nom est ' . $name . ' et j\'ai ' . $age . ' ans';
echo '<br>';

echo $array[0];
echo '<br>';

$age2 = 50;

/*
if ( $age < 18 ) {
    echo "Je suis mineur";
} else {
    echo "Je suis majeur";
}
*/

if ( $age2 < 18 ) {
    echo "Je suis mineur";
} else if ( $age2 >= 18 && $age2 < 30) {
    echo "Je suis jeune mais majeur";
} else if ( $age > 30 ) {
    echo "Je suis majeur";
} else {
    /*return*/ echo "Check it out";
}

//fonctionne pour les tableaux
foreach ($array as $element) {
    echo $element;
    echo '<br>';
}

