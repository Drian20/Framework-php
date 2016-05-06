<?php

/**
 * 
 * @author Adri
 * 
 * */
class Core {

    static private $controller;
    static private $action;
    static private $params;

    static function init() {

        Request::retrieve();
        $controller = Request::getCont();

        self::$controller = $controller;


        $action = Request::getAct();
        self::$action = $action;

        $params = (array) Request::getParams();
        self::$params = $params;

        self::router();
    }

    static function router() {

        extract(self::$params);
        $route = (self::$controller != "") ? self::$controller : 'home';
        $action = (self::$action != "") ? self::$action : 'home';


        $fileroute = strtolower($route) . '.php';
        if (is_readable(APP . 'controllers' . DS . $fileroute)) {
            self::$controller = new $route(self::$params);
            $conf = Registry::getInstance();
            $conf->route = $route;
            $conf->action = $action;

            if (is_callable(array(self::$controller, $action))) {
                call_user_func(array(self::$controller, $action));
            } else {
                echo $action . ": Unexistent method!";
            }
        } else {
            self::$controller = new Error;
        }
    }

}
