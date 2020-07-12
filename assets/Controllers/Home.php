<?php

//  Définition du namespace
namespace Controllers;

//  Définition de la classe (ici controller et non model)
class Home extends Controller{

    protected $_modelName = \Models\Home::class;

    public function Home(){

        date_default_timezone_set('Europe/Paris');

        $current_date = date('d/m/Y');
        $current_time = date('G:i');
        $username = gethostname();

        \Renderer::Render('home', ['date' => $current_date,
                                    'heure' => $current_time,
                                    'nom' => $username], 1);
    }
}

?>