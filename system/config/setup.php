<?php

/**
* Setup the website from the configuration file
* Description: The main system configuration file that imports other files
* @package elias-framework
*/

# ----------------------------------------------------------------------
# | Set the error handling property based on the environment variable
# ----------------------------------------------------------------------

if(DEVELOPMENT_ENVIRONMENT == true) {
    error_reporting(-1);
    ini_set('display_errors', 1);
} else {
    $path = TEMP_PATH.DS.'dev_logs'.DS."error_logs.txt";
    // error_reporting(E_ALL);
    // ini_set('display_errors', 0);

    ini_set('display_errors', 0);
    if (version_compare(PHP_VERSION, '5.3', '>='))
    {
        error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED & ~E_STRICT & ~E_USER_NOTICE & ~E_USER_DEPRECATED);
    }
    else
    {
        error_reporting(E_ALL & ~E_NOTICE & ~E_STRICT & ~E_USER_NOTICE);
    }
    ini_set('log_errors','On');
    ini_set('error_log',$path);

    // echo "<title> HTTP ERROR 500 page failed </title>";
}