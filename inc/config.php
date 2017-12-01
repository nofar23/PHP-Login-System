<?php
    //if there is no constant defined called __CONFIG__, do not load this file
    if(!defined('__CONFIG__')){
        exit('you do not have a config file');
    }
    define('ALLOW_FOOTER', true);
    define('BASE' , 'UdemiPHP/proj/login-project/');
    //our config is below
 ?>