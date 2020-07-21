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

  class Database{

    private static $_instance = NULL;

      public static function PDOConnexion(): PDO {

        if (self::$_instance === NULL)
        {
        /*/////////////////////////////
        * Ce define sert à indiquer le chemin et le nom du dossier contenant le site à partir de la racine du serveur
        *//////////////////////////////
        $bdd_config = parse_ini_file($_SERVER['DOCUMENT_ROOT'] . '/'.DIR_NAME.'/bdd.ini');
        self::$_instance = new PDO('mysql:host='.$bdd_config['host'].';dbname='.$bdd_config['db'].';charset=utf8', $bdd_config['username'], $bdd_config['password'], array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        }


        return self::$_instance;
      }
    }
?>