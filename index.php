<?php

ini_set('display_errors', 'on');
error_reporting(E_ALL);

include 'config.php';
require 'sys/helper.php';

//Inicio sesión
Session::init();
$id = Session::get('id');

// Check controller/action
//$loginPath = '/login';
//$loginAjaxPath = '/login/login';
//$registerPath = '/register';
//$url = $_SERVER['REQUEST_URI'];
//$isLoginPage = ($url == $loginPath);
//$isRegisterPage = ($url == $registerPath);
//$isLoggedIn = (isset($_SESSION['user']) == TRUE);
//
//$isRegisterOrLoginPage = ($isLoginPage || $isRegisterPage || $loginAjaxPath);
//
//if (!$isRegisterOrLoginPage || (!$isRegisterOrLoginPage && !$isLoggedIn)) { // No user
//    header('Location: ' . $loginPath);
//} else {
//
//Lectura configuración
$conf = Registry::getInstance();

Core::init();

//}