<?php

namespace Models;

class HTTP
{ 

    protected $_bdd;



        public function __construct(){

            $this->_bdd = \Database::PDOConnexion();

        }

        public function Nom_methode(){

            //Contenu méthode
        }


        /*/////////////////////////////
        * Accesseurs et mutateurs
        *//////////////////////////////

        public function __set_value_lenght($property, $value, $lenght, $errormsg, $errorpagepath)
        {
            if (property_exists($this, $property))
            {
                if(strlen($value) <= $lenght){
                    $this->$property = $value;
                }
                else{
                    $_SESSION['error'] = $errormsg;
                    \Tools::Redirect($errorpagepath);
                    exit();
                }
            }
            else
            {
                $_SESSION['error'] = "L'attribut " . $property . " n'existe pas";
                \Tools::Redirect($errorpagepath);
                exit();
            }
        }

        public function __set_value_size($property, $value, $size, $errormsg, $errorpagepath)
        {
            if (property_exists($this, $property))
            {
                if($value <= $size){
                    $this->$property = $value;
                }
                else{
                    $_SESSION['error'] = $errormsg;
                    \Tools::Redirect($errorpagepath);
                    exit();
                }
            }
            else
            {
                $_SESSION['error'] = "L'attribut " . $property . " n'existe pas";
                \Tools::Redirect($errorpagepath);
                exit();
            }
        }

        public function __set($property, $value)
        {
                $this->$property = $value;
        }

        public function __get($property)
        {
                return $this -> $property;
        }

}