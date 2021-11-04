<?php

//! Les conditions en PHP
$name = "Christophe";
$age = 17;

$autorisation = null;

//? Différence/Egalité entre if/else et switch

//* Une condition if/else peut être agrémentée de elseif quand on a besoin de conditions spécifiques supplémentaires. Toutefois quand on a des conditions exactes (donc pas d'inégalités de type <,>,<=,>=,!=,!==) alors on peut utiliser un switch pour implémenter le même comportement.
if ($age > 18) {
    $autorisation = true;
    echo "salut mon vieux";
} elseif ($age == 18) {
    $autorisation = true;
    echo "salut, tu l'as échappée belle";
} elseif ($name == "Christophe" && $age == 44) {
    echo "salut mon cochon";
} else {
    $autorisation = false;
    echo "nope, dégage";
}

switch ($age) {
    case $age > 18:
        $autorisation = true;
        echo "salut mon vieux";
        break;
    case 18:
        $autorisation = true;
        echo "salut, tu l'as échappée belle";
        break;

    case 44 && $name == "Christophe":
        $autorisation = true;
        echo "salut mon cochon";
        break;

    default:
        $autorisation = false;
        echo "nope, dégage";
        break;
}

//? Les deux instructions if et switch sont équivalentes.

if ($autorisation) {
    echo "Bienvenue sur maki&christelle.com";
} else {
    echo "T'as pas le droit petit ";
}

//! Les types de variables en PHP
//* String : chaines de caractères
//* Int : Nombres entiers
//* Float/Double : Nombres décimaux
//* Boolean : True/False
//* null/unknown type : des types indéfinis
//* undefined : la variables existe mais n'est pas définie
//* array : tableaux de données
//* object : Objets de données
//* class : Classes de données

echo 10 == 10; //true
echo 10 == '10'; //true
echo 10 === '10'; // false

//! Fonctions de test de type
//? Pour récupérer le type : on peut utiliser gettype()
//* String : chaines de caractères
echo is_string(10); //false
//* Int : Nombres entiers
echo is_int(10); //true
//* Float/Double : Nombres décimaux
echo is_float(10); //false
echo is_double(10); //false
//* Boolean : True/False
echo is_bool(10); //false
//* null/unknown type : des types indéfinis
echo is_null(10); //false
echo is_nan(10); //false
//* undefined : la variables existe mais n'est pas définie
echo isset($var); //false
//* array : tableaux de données
echo is_array($var); //false
//* object : Objets de données
echo is_object($var); //false
//* class : Classes de données
//? il n'y a pas de fonction de test