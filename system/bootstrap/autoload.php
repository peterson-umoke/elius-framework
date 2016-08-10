<?php

/**
* Autoload File
* Description: The main autoload file that imports other files and creates the classes
* @package elias-framework
*/

// call the function
register_autoload();

/**
* @return NULL
*/
function register_autoload() {
    spl_autoload_register('load_classes');
}

/**
* @var $classname
* @return mixed $classname and __CLASS__
*/

function load_classes($classname) {
    $classname = strtolower($classname);
   
   if(substr($classname,-10) == 'controller') {
       $controller_name = substr($classname,0,-10);
       $controller_name = "controller.".$controller_name.".php";

       if(is_readable(CONTROLLERS_PATH.DS.$controller_name)) {
           require_once CONTROLLERS_PATH.DS.$controller_name;
       }
   }

   elseif(substr($classname,-5) == 'model') {
       $model_name = substr($classname,0,-5);
       $model_name = "model.".$model_name.".php";

       if(is_readable(MODELS_PATH.DS.$model_name)) {
           require_once MODELS_PATH.DS.$model_name;
       }
   }

    elseif(is_readable(VENDORS_PATH.DS.$classname.'.php')) {
        require_once VENDORS_PATH.DS.$classname.'.php';
    }

    elseif(is_readable(CORE_PATH.DS.$classname.'.php')) {
        require_once CORE_PATH.DS.$classname.'.php';
    }

}
