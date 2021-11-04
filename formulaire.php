<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaires en PHP</title>
</head>

<body>
    <h1>Formulaire en PHP</h1>
    <form action="">
        <div>
            <label for="name">Name</label>
            <input type="text" id="name" name="name">
        </div>
        <div>
            <label for="city">City</label>
            <input type="text" id="city" name="city">
        </div>
        <input type="submit" value="Envoyer">
    </form>

    <?php

        //? On peut récupérer les infos envoyées par formulaire dans la superglobale $_GET
        #echo $_GET['name'].'<br>';
        #echo $_GET['city'].'<br>';


        //? On assigne les valeurs renvoyées à des variables afin de les afficher plus facilement

        //? isset signifie "est définie", et permet de vérifier si une variable est définie.
        /*
        if(isset($_GET['name']) and isset($_GET['city'])){
            $name = $_GET['name'];
            $city = $_GET['city'];
        }
        */

        //* Vérification des inputs avec un isset : Ce n'est pas complet puisque si mes champs sont vides, j'aurais quand même l'affichage
        /*
        if(isset($_GET['name']) && isset($_GET['city'])){
            $name = $_GET['name'];
            $city = $_GET['city'];

            echo "<h2> Vous vous appelez $name et vous habitez à $city </h2>";
    
            
            //? On peut afficher le type d'une variable à l'aide de la fonction PHP gettype(). On peut aussi le changer avec la fonction PHP settype().
            echo "Votre nom est stocké dans une variable \$name dont le type est ".gettype($name).'<br>';
            echo "Votre ville est stocké dans une variable \$city dont le type est ".gettype($city).'<br>';
        }
        */

        //* Bonne méthode : utiliser un !empty pour vérifier que mes champs sont bien remplis
        if(!empty($_GET['name']) && !empty($_GET['city'])){
            $name = $_GET['name'];
            $city = $_GET['city'];

            echo "<h2> Vous vous appelez $name et vous habitez à $city </h2>";
    
            
            //? On peut afficher le type d'une variable à l'aide de la fonction PHP gettype(). On peut aussi le changer avec la fonction PHP settype().
            echo "Votre nom est stocké dans une variable \$name dont le type est ".gettype($name).'<br>';
            echo "Votre ville est stocké dans une variable \$city dont le type est ".gettype($city).'<br>';
        }
        
        //* Scénario tiers : Je souhaite un comportement par défaut en plus
        /*
            $name = $_GET['name'] ?? "Axel";
            $city = $_GET['city'] ?? "Bordeaux";

            echo "<h2> Vous vous appelez $name et vous habitez à $city </h2>";
    
            
            //? On peut afficher le type d'une variable à l'aide de la fonction PHP gettype(). On peut aussi le changer avec la fonction PHP settype().
            echo "Votre nom est stocké dans une variable \$name dont le type est ".gettype($name).'<br>';
            echo "Votre ville est stocké dans une variable \$city dont le type est ".gettype($city).'<br>';
        */

        //! Salut !
    ?>
</body>

</html>