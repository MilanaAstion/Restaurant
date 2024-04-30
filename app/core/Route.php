<?php
class Route
{
    public static function start()
    {
        $controller_name = 'Main';
        $action_name = 'index';
        $url = explode('?', $_SERVER['REQUEST_URI'])[0];
        $routes = explode('/',$url);
        if( !empty($routes[1]))
        {
            $controller_name = $routes[1];
        }
        $controller_name = $controller_name . '_controller';
        if( !empty($routes[2]))
        {
            $action_name = $routes[2];
        }
        $action_name = 'action_' . $action_name;
        $controller_path = "app/controllers/". $controller_name . '.php';
        if(file_exists($controller_path))
        {
            include $controller_path;
        }
        else
        {
            echo "controller not exit";
        }
        $controller = new $controller_name;
        if(method_exists($controller, $action_name))
        {
            $controller->$action_name();
        }
        else
        {
            echo "action not exit";
        }
    }
}