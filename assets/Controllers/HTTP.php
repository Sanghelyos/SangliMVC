<?php

//  Définition du namespace
namespace Controllers;

//  Définition de la classe (ici controller et non model)
class HTTP extends Controller{

    protected $_modelName = \Models\HTTP::class;

    public function NotFound(){

        \Renderer::Render('404', [NULL], 0);
    }
}