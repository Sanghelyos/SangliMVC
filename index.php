<?php
    /*/////////////////////////////
    * Affichage des erreurs
    *//////////////////////////////
// ini_set('display_startup_errors', true);
// error_reporting(E_ALL);
// ini_set('display_errors', true);
define('DIR_NAME','SangliMVC');

    /*/////////////////////////////
    * Dépendances
    *//////////////////////////////
require_once('assets/Models/Config.php');
require_once('assets/Models/Autoload.php');

    /*/////////////////////////////
    * Démarrage de session
    *//////////////////////////////
session_start();

    /*/////////////////////////////
    * Contrôleur de gestion des routes
    *//////////////////////////////
\Application::Execute();

?>