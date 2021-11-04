<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intro PHP</title>
</head>
<body>
    <h1>Introduction au PHP</h1>

    <?php
        $prenom = "Axel";
        $age = 27;

        echo "Hello $prenom, You are $age years old.";
        // echo $prenom.' '.$age;
        # Commentaire ici
        /*
            echo "Hello";
            Commentaire multi-ligne
        */ 

        //? Deux méthodes d'affichage : echo et fermetures de balises PHP

        //* Variables superglobales : Des variables propres à PHP qui contiennent des informations relatives à l'exécution du script coté serveur

        /**
         * * $_SERVER : Infos relatives au serveur
         * * $_GET, $_POST, $_REQUEST : Ce sont des infos relatives aux requêtes que reçoit le serveur
         * * $_SESSION & $_COOKIES : Ce sont des infos relatives données utilisateurs stockées sur le serveur (ou en local)
         * * $_ENV : Ce sont des infos relatives à l'environnement du serveur
         * * $_FILES : Ce sont des infos relatives à des fichiers envoyées depuis/sur le serveur
         */

        //  echo $_SERVER["HTTP_USER_AGENT"];
        ?>
</body>
</html>