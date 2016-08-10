<?php

/**
* Class Name: Elias Framework
* @return obj
* @var method, controller, params
* @package elias-framework
*/

class Elias {
    static public function run() {
        self::init();
        self::dispatch();
    }

    static public function init() {
        session_start();
    }
}