<?php

//  Définition du namespace
namespace Controllers;

//  Définition des dépendances

// require_once ('model/class_event.php');
// require_once ('model/class_news.php');
// require_once ('model/tools.php');

//  Définition de la classe (ici controller et non model)
class Home{

    public function Home(){

        // Récupération de la date et de l'heure actuelles pour l'exemple
        // Ces variables seront utilisées dans le code HTML des parties mises en tampon ci-dessous
        $current_date = date('d/m/Y');
        $current_time = date('h:i:s');

        //  Ouverture de la mise en tampon du contenu
        ob_start();

        //  Inclusion d'une partie de code HTML qui sera inclue dans le template.
        //  Les variables déclarées au dessus sont utilisées dans cette partie de code HTML
        require_once ('vue/parts/home_date_part.html.php');

        //  Fermeture de la mise en tampon et données stockées dans la variable ci-dessous
        $home_date_part = ob_get_clean();

        //  Ca c'est le template. Il peut être purement en html, on contenir du code PHP
        //  qui lui permet d'inclure des données ou des parties de code HTML
        require_once ('vue/templates/home.html.php');
    }
}

?>