<?php

class Utils{

    public static function Session_redirect_profile(string $url, string $profile){
        if(isset($_SESSION['session'])){
            if($_SESSION['session']['type'] == $profile){
                Tools::Redirect($url);
            }
        }
    }

    public static function Session_redirect_empty(string $url){
        if(empty($_SESSION['session'])){
            Tools::Redirect($url);
        }
    }

    public static function Decimal($number){
        $whole = (int) $number;
        return $decimal = $number - ($whole*10);
    }

    public static function Mail(string $to, string $from, string $objet, string $message){

        $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
        $headers .= 'From: '. $from . "\r\n";

        mail($to, $objet, $message, $headers);

    }

    public static function Check_null_array($var, $target){
        foreach($var as $check){
            if($check == NULL){
                Tools::Error("Une erreur est survenue !");
                Tools::Redirect($target);
            }
        }
    }
}