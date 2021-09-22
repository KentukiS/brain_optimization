<?php
// require "system/core/Router.php";
use system\core\Router;
use system\config\Db;

spl_autoload_register(function ($class) {
    $path = str_replace('\\','/',$class.'.php');
    if(file_exists($path)) {
    	require $path;
    }
});

$router = new Router;
$router->run();