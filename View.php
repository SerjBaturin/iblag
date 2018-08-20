<?php

namespace App\Core;

class View
{
    public $path;
    public $route;
    public $layout = 'default';

    public function __construct($route)
    {
        $this->route = $route;
        $this->path = $route['controller'] . '/' . $route['action'];
    }
    
    public function render($title, $vars = [])
    {
        extract($vars);
        
        if (file_exists('App/Views/' . $this->path . '.php')) {
            ob_start();
            require 'App/Views/' . $this->path . '.php';
            $content = ob_get_clean();
            require 'App/Views/layouts/' . $this->layout . '.php';
        } else {
            echo 'Вид не найден' . $this->path;
        }
        
    }
    
    public static function errorCode ($code)
    {
        http_response_code($code);
        require 'App/Views/errors/' . $code . '.php';
        exit;
    }
    
    public function redirect ($url)
    {
        header('location: ' . $url);
        exit;
    }
}