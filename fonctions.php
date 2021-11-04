<?php
//! Fonctions en PHP

//? Les fonctions servent à définir du code afin de pouvoir le réutiliser ultérieurement.

//* Déclaration de la fonction avec function <nomDelaFonction>(args1,args2)
function maFonction()
{
    echo "Bonjour"; //* Side effect de la fonction : un affichage
    return; //* Retour de la fonction
}

function bonjour()
{
    return "Bonjour <br>";
}

function bonjourPrenom($prenom)
{
    return "Bonjour $prenom <br>";
}

//* FONCTION PURE : N'utilise que ce qu'elle a demandé (les arguments) et ne produit aucun effet autre que le retour de fonctionnalité;
function somme($nombre1, $nombre2)
{
    return $nombre1 + $nombre2;
}

echo bonjour();
echo bonjourPrenom("Hani");
echo bonjourPrenom("Paul");
echo bonjourPrenom("Nourdine");

//TODO : Exercice pour dire bonjour à tout le monde à partir d'un array...