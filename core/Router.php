<?php
/**
 * Created by IntelliJ IDEA.
 * User: Zoki
 * Date: 11/2/2017
 * Time: 8:24 PM
 */

namespace App\Core;

class Router
{
    public $routes = [
        'GET' => [],
        'POST' => []
    ];

    public static function load($file)
    {
        $router = new static;

        require $file;

        return $router;
    }

    public function get($uri, $controller)
    {
        $this->routes['GET'][$uri] = $controller;
    }

    public function post($uri, $controller)
    {
        $this->routes['POST'][$uri] = $controller;
    }

    public function direct($uri, $requestType)
    {
        if (array_key_exists($uri, $this->routes[$requestType]))
        {
            return $this->callAction(...explode('@', $this->routes[$requestType][$uri]));
        }

        throw new \Exception('No rute defined for URI: ' . $uri);
    }

    public function callAction($controller, $action)
    {
        $controller = "App\\Controllers\\{$controller}";
        $controller = new $controller;

        if (method_exists($controller, $action))
        {
            return $controller->$action();
        }

        throw new \Exception("{$controller} does not respond to {$action}");
    }

}