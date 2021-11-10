<?php

echo "Salut !";

//? L'inclusion de fichier sert à remplacer du code par une instruction include(ou require).
//? L'inclusion retranscrit le code tel qu'il est présent dans les fichiers de fragmets _frag.php
//? S'il y a des inclusions en cascade, elles seront réalisées en cascade elles aussi.
//? La différence entre require et include dépend de si l'erreur d'un fichier introuvable est fatale (require) ou pas(include)
//? Avec _once suivant le require ou l'include vous limitez l'import à une seule.

include '_titre.php';
include '_navbar.php';
?>

<h1>CONTENU</h1>