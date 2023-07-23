<?php
use App\Routes\Routing;

require_once("conf/config.php");

function my_autoloader($className) 
{
    require_once __DIR__ . '/' . str_replace('\\', '/', $className) . '.php';
}

spl_autoload_register('my_autoloader');

Routing::buildRoute();
