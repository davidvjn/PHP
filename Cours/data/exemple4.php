<?php

//var_dump($_SERVER); die; --> variable qui existe déjà, préprogrammée

$firstname = 'Dave';
$lastname = 'Doe'

function sayMyName($firstname, $lastname) {
    echo "Tu t'appelles $firstname $lastname!";
}

function add($num1, $num2) {
    $total = $num1 + $num2;
    return  $total;
}

echo add(2;3);

sayMyName($firstname, $lastname);