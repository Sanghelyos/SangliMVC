<?php

$config = \Config::Get_config();

        setlocale (LC_TIME, $config['LOCALES']);

        if($config['ERROR_DISPLAY'] == true){
            ini_set('display_startup_errors', true);
            error_reporting(E_ALL);
            ini_set('display_errors', true);
        }
        else{
            error_reporting(0);
        }