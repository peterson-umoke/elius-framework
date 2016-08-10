<?php

/**
* Elias Framework
* @version 4.1.0
* @author Peterson Umoke <August,2016>
* @see The Newst Framework on the Block
* @link http://github.com/peter.umoke/elias-framework
* @license MIT licence, 2016
* @package elias-framework
*/

define("ROOT",DIRNAME(__DIR__));
define("DS",DIRECTORY_SEPARATOR);

require_once ROOT.DS.'system'.DS.'bootstrap'.DS.'bootstrap.php';

$elias = new elias;
$elias->run();

// echo "<pre>";
// print_r($_REQUEST);
// echo "</pre>";
