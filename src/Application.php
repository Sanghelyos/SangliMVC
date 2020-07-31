<?php

class Application{

    public static function Route(string $route, string $ctrlmth){

        $page = Tools::GET('page', NULL);

        if($page == $route){

            $controller_name = ucfirst(strtok($ctrlmth, '@'));
            $method = ucfirst(substr(strrchr($ctrlmth, '@'), 1));

            if(file_exists("src/Controllers/$controller_name.php") && method_exists("\Controllers\\$controller_name", $method)){
                $controller_name = "\Controllers\\" . $controller_name;
                $controller = new $controller_name;
                $controller->$method();
                exit;
            }
            else{
                Tools::Error("Le contrôleur <span style=\"color:green;\">$controller_name</span> ou la méthode <span style=\"color:red;\">$method</span> n'existe pas.");
                Tools::Redirect("index.php?page=Unknown");
            }
        } 
    }

    public static function check_page_empty(string $url){

        $page = Tools::GET('page', NULL);
        if($page == NULL){
                Tools::Redirect($url);
        }
    }

}