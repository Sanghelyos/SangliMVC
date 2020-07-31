<?php

//  Définition du namespace
namespace Controllers;

//  Définition de la classe (ici controller et non model)
class HTTP extends Controller{

    protected $_modelName = \Models\HTTP::class;

    public function NotFound(){

        $current_date =strftime("%A %d %B %Y", strtotime(date("h:i:sa")));
        $current_time = date('G:i');
        $username = gethostname();

        \Renderer::Render('404', ['date' => $current_date,
                                    'heure' => $current_time,
                                    'nom' => $username], 1, 1);
    }
}