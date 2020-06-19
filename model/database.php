<?php

/*
|--------------------------------------------------------------------------
| Connexion à la base de données
|--------------------------------------------------------------------------
|
| Cette fonction est à utiliser s'il est nécessaire d'interragir avec la base de données.
| Vous pouvez utiliser cette fonction dans n'importe où à condition de l'inclure au préalable.
| Il est possible d'utiliser directement les données retournées par la fonction dans vos
| requêtes, dans vos fonctions contenant une requête...
|
| Ceci dit, si vos requêtes sont exécutées à partir d'une méthode d'une classe,
| il est préférable de faire en sorte que cette classe soit une extension de la classe "Model",
| située dans "model/model.php", ou la classe parente si la classe en question est déjà une extension.
|
*/

      function PDOConnexion() {
        $user = "root"; //  à remplacer par le nom d'utilisateur de votre base de données

        $pass = ""; //  à remplacer par le mot de passe lié au compte utilisé. Laisse vide si pas de mot de passe

        $dbname = "SangliMVC"; //  Nom de la base de données à utiliser

        $host = "127.0.0.1";  //  adresse de la base de données

        // connexion à la base de données
        $bdd = new PDO('mysql:host='.$host.';dbname='.$dbname.';charset=utf8', $user, $pass, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

        // Retour des données de connexion à la base de données, à utiliser pour créer des requêtes.
        return $bdd;
      }
?>