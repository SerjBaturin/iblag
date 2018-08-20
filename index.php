<?php

//файл дебага и ошибок
require 'App/lib/Dev.php';

use App\Core\Router;
use App\lib\DB;

spl_autoload_register(function ($class)
{
    $path = str_replace('\\', '/', $class . '.php');
    if (file_exists($path)) {
        require $path;
    }
});

session_start();

$router = new Router;

$router ->run();