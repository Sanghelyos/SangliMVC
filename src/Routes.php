
<?php

class Routes{


    public static function Execute(){
    /*
    |--------------------------------------------------------------------------
    | Définition des routes
    |--------------------------------------------------------------------------
    |
    | Ici vous pouvez définir vos routes sous le format
    | Application::Route('nomdelapage', 'Contrôleur@méthode');
    |
    */


    /*/////////////////////////////
    * Redirection si page est vide
    *//////////////////////////////
    Application::check_page_empty('index.php?page=Home');


    /*/////////////////////////////
    * Routes - Pages
    *//////////////////////////////

    Application::Route('Home', 'Home@Home');
    Application::Route('Unknown', 'HTTP@NotFound');


    /*/////////////////////////////
    * Routes - Traitements
    *//////////////////////////////




    /*/////////////////////////////
    * Redirection si page ne correspond à rien
    *//////////////////////////////
    Tools::Redirect('index.php?page=Unknown');
        }
    
}