<?php

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