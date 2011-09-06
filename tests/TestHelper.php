<?php

define('BASE_PATH', realpath(dirname(__FILE__). '/../'));
define('APPLICATION_PATH', BASE_PATH . '/src');
define('TEST_PATH', BASE_PATH . '/tests');
define('APPLICATION_ENV', 'testing');

set_include_path('.' . PATH_SEPARATOR . BASE_PATH . '/src' . PATH_SEPARATOR . get_include_path());

date_default_timezone_set('Europe/Berlin');

error_reporting(E_ALL|E_STRICT);

function autoload($class){
  $class = APPLICATION_PATH . '/' . str_replace('\\', '/', $class) . '.php';
  require_once($class);
}

spl_autoload_register("autoload");
