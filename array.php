<?php
//! TABLEAUX EN PHP
//* Deux types de tableaux en PHP : Indexés, Associatifs

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