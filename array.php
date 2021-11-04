<?php
//! TABLEAUX EN PHP
//* Deux types de tableaux en PHP : Indexés, Associatifs
//? Déclaration arrays
//* Array indexé avec la fonction array()
$fruits = array("pomme", "banane", "fraise", "ananas", "citron", "framboise");

//* Array associatif avec le raccourci = []
$recettes = [
    "Rhum Arrangé" => "Canne à Sucre, Epices, Arôme random",
    "Crepes" => "Farine, Oeufs, Lait, Sucre, Rhum Arrangé",
    "Boeuf Bourguignon" => "Boeuf, Bourguignon, Vin rouge",
];

echo '<pre>';
var_dump($fruits);
echo '</pre>';
echo '<br>';
echo '<pre>';
print_r($recettes);
echo '</pre>';

//! Manipulation arrays

//? Ajout d'éléments dans un array indexé
//* Il est recommandé de passer par la fonction array_push pour les array indexés, car les index sont chiffrés plutôt que nommés l'index est automatiquement inférée.

//* Ajout via raccourci (ajout à la fin)
$fruits[] = "noix de coco";

//* Ajout via fonction array_push() (ajout à la fin de l'array)
array_push($fruits, "clémentine");

//* Ce sont pratiquement les mêmes méthodes que celles dans JS, array_pop, array_shift/unshift.

//* Ajout/Modifier une valeur de l'array via son index. (cela va dépendre de si l'index est occupé)
$fruits[4] = "orange";

echo $fruits[5];

echo '<pre>';
var_dump($fruits);
echo '</pre>';
echo '<br>';

//? Ajout d'éléments dans un array associatif

//* Ajout d'éléments via un raccourci car sur un array associatif, la clé n'est pas inférée mais elle est déclarée explicitement.

$recettes["Blanquette de veau"] = "Blanquette, Veau, Riz, Carottes";

echo '<br>';
echo '<pre>';
print_r($recettes);
echo '</pre>';

//! Parcourir un tableau : boucles