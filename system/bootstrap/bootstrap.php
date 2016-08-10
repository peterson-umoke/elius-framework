<?php

/**
* Bootstrap File
* Description: The main bootstrap file that imports other files
* @return mixed <__DIR__,__FILE__)
* @package elias-framework
*/

# ----------------------------------------------------------------------
# | import config.php file
# ----------------------------------------------------------------------
require_once ROOT.DS.'system'.DS.'config'.DS.'config.php';

# ----------------------------------------------------------------------
# | import the functions.php file
# ----------------------------------------------------------------------
require_once ROOT.DS.'system'.DS.'bootstrap'.DS.'functions.php';

# ----------------------------------------------------------------------
# | import the setup.php file
# ----------------------------------------------------------------------
require_once ROOT.DS.'system'.DS.'config'.DS.'setup.php';

# ----------------------------------------------------------------------
# | import the autoload.php
# ----------------------------------------------------------------------
require_once ROOT.DS.'system'.DS.'bootstrap'.DS.'autoload.php';