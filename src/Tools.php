<?php

class Tools{

    public static function Error(string $value){
        $_SESSION['error'] = $value;
    }
    public static function Error_print(){
        if(isset($_SESSION['error'])){
            echo $_SESSION['error'];
            unset($_SESSION['error']);
          } 
    }

    public static function Info(string $value){
        $_SESSION['infomsg'] = $value;
    }
    public static function Info_print(){
        if(isset($_SESSION['infomsg'])){
            echo $_SESSION['infomsg'];
            unset($_SESSION['infomsg']);
          } 
    }
    
    public static function Redirect(string $url){
        header('Location: '.$url);
        exit;
    }

    public static function Redirect_meta_frefresh(string $url){
        header('refresh:0;url='.$url);
        exit;
    }

    public static function POST($property, $else){
        return !empty($_POST[$property]) ? $_POST[$property] : $else;
    }

    public static function GET($property, $else){
        return !empty($_GET[$property]) ? $_GET[$property] : $else;
    }

    public static function REQUEST($property, $else){
        return !empty($_REQUEST[$property]) ? $_REQUEST[$property] : $else;
    }

    public static function SET_SESSION($property, $value){
        $_SESSION[$property] = $value;
    }

    public static function GET_SESSION($property){
        return $_SESSION[$property];
    }
}