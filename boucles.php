<?php

//! Boucles For & While & Do-While

//* WHILE LOOP
$nombreDeLignes = 0;
while ($nombreDeLignes <= 150) {

    echo "J'écouterai dorénavant mon prof en cours de PHP <br>";
    // $nombreDeLignes = $nombreDeLignes + 1;
    // $nombreDeLignes += 1;
    $nombreDeLignes++;
}
//* FOR LOOP
for ($i = 1; $i <= 150; $i++) {
    echo "Ligne n°$i <br>";
}

//* DO-WHILE LOOP
// $j = 0;
// do {
//     echo $j;
// } while ($j > 0);

//? EXERCICE PARTICIPATIF

//TODO : Créer une boucle qui va prendre un nombre, et afficher le carré de tous les nombres entre celui-ci et 0;
//? Exemple : J'ai comme nombre 5 : alors il doit afficher 5 au carré, 4 au carré, 3 au carré, 2 au carré, 1 au carré.
//* Pour mettre un nombre au carré il faut soit utiliser pow(3, 2), soit utiliser 3**2 où on effectue 3 au carré.

echo "Solution boucle While <br>";
//? SOLUTION : WHILE
$nombre = 5;
while ($nombre > 0) {
    echo $nombre . ' au carré c\'est ' . pow($nombre, 2) . '<br>';
    $nombre--;
    // $nombre-=1;
    // $nombre=$nombre - 1;
}

echo "Solution boucle For <br>";
//? SOLUTION : FOR
for ($i = 10; $i > 0; $i--) {
    echo $i . ' au carré c\'est ' . pow($i, 2) . '<br>';
}

echo "Solution boucle Do-While <br>";
//? SOLUTION : DO-WHILE
$nombredo = 0;
do {
    if ($nombredo != 0) {

        echo $nombredo . ' au carré c\'est ' . pow($nombredo, 2) . '<br>';
        $nombredo--;
    }
} while ($nombredo > 0);