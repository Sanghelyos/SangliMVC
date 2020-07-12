<?php

class Utils{

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

    public static function Error(string $value){
        $_SESSION['error'] = $value;
    }
    public static function Error_print(){
        if(isset($_SESSION['error'])){
            echo $_SESSION['error'];
            unset($_SESSION['error']);
          } 
    }

    public static function Redirect(string $url){
        header('Location: '.$url);
}

    public static function Redirect_meta_frefresh(string $url){
        header('refresh:0;url='.$url);
    }

    public static function Session_redirect_profile(){
        if(isset($_SESSION['session'])){
            if($_SESSION['session']['type'] == 'profile'){
                \Utils::Redirect(/* chemin à définir */);
            }
        }
    }

    public static function Session_redirect_empty(){
        if(empty($_SESSION['session'])){
            \Utils::Redirect("index.php?ctrl=Home&mth=Home");
        }
    }

    public static function Decimal($number){
        $whole = (int) $number;
        return $decimal = $number - ($whole*10);
    }

}
?>