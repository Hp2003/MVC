<?php

namespace App;

class Router
{
    protected static $routes = [];

    protected static function addRoute($route, $controller, $action, $method)
    {

        Router::$routes[$method][$route] = ['controller' => $controller, 'action' => $action];
    }

    public static function get($route, $controller, $action)
    {
        Router::addRoute($route, $controller, $action, "GET");
    }

    public static function post($route, $controller, $action)
    {
        Router::addRoute($route, $controller, $action, "POST");
    }

    public static function dispatch()
    {
        $uri = strtok($_SERVER['REQUEST_URI'], '?');
        $method =  $_SERVER['REQUEST_METHOD'];

        if (array_key_exists($uri, Router::$routes[$method])) {
            $controller = Router::$routes[$method][$uri]['controller'];
            $action = Router::$routes[$method][$uri]['action'];

            $controller = new $controller();
            $controller->$action();
        } else {
            throw new \Exception("No route found for URI: $uri");
        }
    }
}