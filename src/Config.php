<?php

/*
|--------------------------------------------------------------------------
| Utilisation du fichier Config
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

  class Config{

    private static $_config = NULL;

      public static function Get_config(){

        self::$_config = parse_ini_file('config.ini');

        return self::$_config;
      }
    }