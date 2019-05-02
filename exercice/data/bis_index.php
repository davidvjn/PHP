<?php

# LES VARIABLES
$number = 4;
$nombreEnfants = 2;
$token = "azertyuioppoiuytreza";

echo "My prefer number is : $number <br><br>";

# Faire du HTML dans du PHP (l'inverse n'étant pas possible)
echo "<button>Valdier</button><br><br>";

# LES CONDITIONS
if($number == 5) {
    echo "$number est mon chiffre préféré !<br><br>";
} else {
    echo "Ce n'est pas mon chiffre préféré !<br><br>";
}

if($nombreEnfants > 0) {
    echo "Vous avez des enfants !<br><br>";
} else {
    echo "Vous n'avez pas d'enfants !<br><br>";
}

if($token) {
    echo "Bienvenue, visiteur du futur !<br><br>";
}
# Retour sur la page d'accueil

// while ($number == 4) {
    // echo "1 2 3 4...4 3 2 1...";
// }