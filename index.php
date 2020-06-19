<?php

// Démarrage de session
session_start();


//  Vérification de l'url pour sélection de page
$page = !empty($_REQUEST['page']) ? $_REQUEST['page'] : 'home';

//  switch pour définir les actions selon l'url
switch($page){

    //  Dans le cas où l'argument de l'url "page" est égal à "home"
    case 'home':{

        //  Définition des dépendances (controllers requis)
        require_once ('controller/home_controller.php');

        //  Appels de controller et méthodes
        $controller = new \Controllers\Home();
        $controller->Home(); 
        break;
    }

    case 'doc':{

        require_once ('controller/doc_controller.php');
        $controller = new \Controllers\Doc();
        $controller->Doc(); 
        break;
    }

    //  Si l'argument "page" ne contient pas les définitions précédentes.
    //  Page non trouvée.
    default:{

    require_once ('controller/404_controller.php');

        $controller = new \Controllers\QCQ();
        $controller->Qcq();
    }

}

?>