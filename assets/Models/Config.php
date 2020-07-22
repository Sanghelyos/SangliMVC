<?php

$config = parse_ini_file($_SERVER['DOCUMENT_ROOT'] . '/'.DIR_NAME.'/config.ini');

if($config['ERROR_DISPLAY'] == true){
    ini_set('display_startup_errors', true);
    error_reporting(E_ALL);
    ini_set('display_errors', true);
}
else{
    error_reporting(0);
}