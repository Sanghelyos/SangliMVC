<?php
    /*/////////////////////////////
    * Dépendances
    *//////////////////////////////
require_once('src/Models/Autoload.php');
require_once('src/Config.php');
require_once('src/Index_settings.php');
    /*/////////////////////////////
    * Démarrage de session
    *//////////////////////////////
session_start();
    /*/////////////////////////////
    * Contrôleur de gestion des routes
    *//////////////////////////////
Routes::Execute();

?>