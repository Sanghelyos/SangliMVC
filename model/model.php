<?php


/*
|--------------------------------------------------------------------------
| Model pour la base de données
|--------------------------------------------------------------------------
|
| Toutes les classes qui nécessitent un accès à la base de données devraient
| être des extensions de celle-ci pour pourvoir faire des requêtes facilement
| en utilisant "$this->_bdd".
| Ceci n'est pas obligatoire dans la mesure où vous pouvez toujours vous connecter
| à la base de données vie un argument dans vos méthodes et en incluant le fichier
| "database.php" situé dans le dossier "model".
|
| Les classes qui ne nécessitent aucune interraction directe avec la base de donnée
| dans leurs méthodes ou les fonctions n'ont pas besoin d'être des extensions de cette classe.
|
*/

namespace Models;
require_once ('database.php');

class Model{

    protected $_bdd;


    public function __construct(){

        $this->_bdd = PDOConnexion();

    }
    /*
    |--------------------------------------------------------------------------
    | Ces méthodes sont supposées permettre des requêtes BDD dynamiques.
    | Vous pouvez les ignorer voir les effacer.
    |--------------------------------------------------------------------------
    */

    // public function GetAll($colones ,$table){
        
    //     $sql = $this->_bdd->prepare(" SELECT $colones FROM $table");
    //     $sql->execute();
    //     return $sql->fetchAll();
    //     $sql->closeCursor();
    //     }
        
    // public function GetByID($colones ,$table, $idcol, $id){
        
    //     $sql = $this->_bdd->prepare(" SELECT $colones FROM $table WHERE $idcol = $id");
    //     $sql->execute();
    //     return $sql->fetchAll();
    //     $sql->closeCursor();
    //     }
}

?>