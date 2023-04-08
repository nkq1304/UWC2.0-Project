<?php

if ($_SERVER['SERVER_NAME'] == 'localhost') {
    define('DB_NAME', 'uwc2.0');
    define('DB_HOST', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASS', '');
    
    define('ROOT', 'http://localhost/UWC2.0 Project Code/public');
    define('APPROOT', dirname(dirname(__FILE__)));
    //define('VIEWSURL', 'http://localhost/UWC2.0 Project Code/app/views');
    //definr('')
}