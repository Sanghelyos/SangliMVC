<?php
    /*/////////////////////////////
    * Dépendances
    *//////////////////////////////
require_once('assets/Models/Autoload.php');
require_once('assets/Config.php');
require_once('assets/Index_settings.php');

    /*/////////////////////////////
    * Démarrage de session
    *//////////////////////////////
session_start();

    /*/////////////////////////////
    * Contrôleur de gestion des routes
    *//////////////////////////////
\Application::Execute();

?>