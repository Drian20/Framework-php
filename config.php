<?php

define('DS', DIRECTORY_SEPARATOR);
define('ROOT', realpath(dirname(__FILE__)) . DS);

//Acceder al sistema de ficheros
define('APP', ROOT . 'app' . DS);

function base($str) {
    if ($str == '//') {
        return '/';
    } else
        return $str;
}

$app_w = dirname($_SERVER['PHP_SELF']) . '/';
define('APP_W', base($app_w));

//Límite de filas en paginación
define('LIMIT_ROWS', 4);
