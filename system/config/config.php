<?php

/**
* System Configuration File
* Description: The main system configuration file that imports other files
* @package elias-framework
*/

# ----------------------------------------------------------------------
# | Variables naming
# ----------------------------------------------------------------------

// system variables
$base_url = "/elias-framework";
$site_ext = $base_url;
$url_sep = "/";

// database variables
$db_name = "webtricks";
$db_type="mysql";
$db_password = "";
$db_host = "localhost";
$db_username = "root";
$db_charset = "utf-8";
$db_driver = "pdo";

# ----------------------------------------------------------------------
# | Base configurations
# ----------------------------------------------------------------------

define("APP_PATH",ROOT.DS.'application');
define("PUBLIC_PATH",ROOT.DS.'public');
define("SYSTEM_PATH",ROOT.DS.'system');

// application
define("APP_CONFIG",APP_PATH.DS.'config');
define("CONTROLLERS_PATH",APP_PATH.DS.'controllers');
define("MODELS_PATH",APP_PATH.DS.'models');
define("VIEWS_PATH",APP_PATH.DS.'views');

// public
define("CSS_PATH",PUBLIC_PATH.DS.'css');
define("IMG_PATH",PUBLIC_PATH.DS.'img');
define("JS_PATH",PUBLIC_PATH.DS.'js');
define("UPLOADS_PATH",PUBLIC_PATH.DS.'uploads');

// system
define("BOOTSTRAP_PATH",SYSTEM_PATH.DS.'bootstrap');
define("SYSTEM_CONFIG",SYSTEM_PATH.DS.'config');
define("CORE_PATH",SYSTEM_PATH.DS.'core');
define("DATABASE_PATH",SYSTEM_PATH.DS.'database');
define("LIBRARY_PATH",SYSTEM_PATH.DS.'library');
define("RESOURCES_PATH",SYSTEM_PATH.DS.'resources');
define("TEMP_PATH",SYSTEM_PATH.DS.'temp');
define("VENDORS_PATH",SYSTEM_PATH.DS.'vendors');

# ----------------------------------------------------------------------
# | Relative paths and others
# ----------------------------------------------------------------------
define("SITE_URL",'http://'.$_SERVER['HTTP_HOST'].$site_ext);
define("CSS_DIR",SITE_URL.$url_sep."public".$url_sep."css");
define("JS_DIR",SITE_URL.$url_sep."public".$url_sep."js");
define("IMG_DIR",SITE_URL.$url_sep."public".$url_sep."img");
define("UPLOADS_DIR",SITE_URL.$url_sep."public".$url_sep."uploads");

# ----------------------------------------------------------------------
# | imports the user configuration file for definitions
# | overiden values are mainly in variables, and some constant
# ----------------------------------------------------------------------
if(is_readable(APP_CONFIG.DS.'config.php')):
    require_once APP_CONFIG.DS.'config.php';
endif;

# ----------------------------------------------------------------------
# | System constants
# ----------------------------------------------------------------------
if(!defined("DEVELOPMENT_ENVIRONMENT")) define("DEVELOPMENT_ENVIRONMENT",true); // if the environment is for development only
/** dat's all folks ============== */