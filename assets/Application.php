<?php

class Application{

    public static function Execute(){

        $controller_name = ucfirst(\Utils::GET('ctrl', NULL));
        $method = ucfirst(\Utils::GET('mth', NULL));

        if($controller_name == NULL || $method == NULL){
            $controller_name = "Home";
            $method = "Home";
        }

        if(file_exists("assets/Controllers/$controller_name.php") && method_exists("\Controllers\\$controller_name", $method)){
            $controller_name = "\Controllers\\" . $controller_name;
            $controller = new $controller_name;
            $controller->$method();
        }
        else{
            \Utils::Redirect("index.php?ctrl=HTTP&mth=NotFound");
            exit();
        }
        
    }

}