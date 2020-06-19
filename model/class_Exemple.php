<?php

/*
|--------------------------------------------------------------------------
| Exemple de classe
|--------------------------------------------------------------------------
|
| Cette fonction est à utiliser s'il est nécessaire d'interragir avec la base de données.
| Vous pouvez utiliser cette fonction dans n'importe où à condition de l'inclure au préalable.
| Il est possible d'utiliser directement les données retournées par la fonction dans vos
| requêtes, dans vos fonctions contenant une requête...
|
| Ceci dit, si vos requêtes sont exécutées à partir d'une méthode d'une classe,
| il est préférable de faire en sorte que cette classe soit une extension de la classe "Model",
| située dans "model/model.php", ou la classe parente si la classe en question est déjà une extension.
|
*/

namespace Models;
require_once ('model.php');

class Exemple extends Model
{ 

    private $_UneVariable;

        // Initialisation des vriables de la classe
        public function __construct(){

            $this->_UneVariable = 'Une valeur, chaine de caractère, etc';

        }
        // Méthode d'exemple getter d'une variable de classe
        public function Get_UneVariable(){
            
            return $this->_UneVariable;
            
        }

        // Méthode d'exemple getter d'une variable de classe
        public function Set_UneVariable($set){
            
            $this->_UneVariable = $set;
            
        }

        // Cette méthode est un exemple de requête utilisant la variable "$_bdd" de la classe "Model"
        public function GetAllNews(){
            
            $req = $this->_bdd->prepare(" SELECT * FROM News 
                                        ORDER BY date_post DESC ");
            $req->execute();
            return $req->fetchAll();
            $req->closeCursor();
        }

}


?>