<?php
include "core/loader.php";
spl_autoload_register('Loader::ClassLoader');
class Router {
    function __construct() {
        $controller_name = 'default';
        $action_name = 'index';
        $route = explode('/', $_SERVER['REQUEST_URI']);
        if (!empty($route[1])) {
            $controller_name = $route[1];
        }
        if (!empty($route[2])) {
            $action_name = $route[2];
        }
        $controller_name = $controller_name . '_controller';
        $controller = new $controller_name;
        if (method_exists($controller, $action_name)) {
            $controller->$action_name();
        }
    }
}