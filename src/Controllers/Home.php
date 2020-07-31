<?php

//  Définition du namespace
namespace Controllers;

//  Définition de la classe (ici controller et non model)
class Home extends Controller{

    protected $_modelName = \Models\Home::class;

    public function Home(){

        $current_date =strftime("%A %d %B %Y", strtotime(date("h:i:sa")));
        $current_time = date('G:i');
        $username = gethostname();

        \Renderer::Render('home', ['date' => $current_date,
                                    'heure' => $current_time,
                                    'nom' => $username], 1, 1);
    }
}