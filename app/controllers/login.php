<?php

class Login extends Controller {

    protected $model;
    protected $view;

    function __construct($params) {
        parent::__construct($params);
        $this->model = new mLogin();
        $this->view = new vLogin();
    }

    function home() {
        
    }

    function login() {
        if (!empty($_POST['username']) && !empty($_POST['password'])) {
            $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
            $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
            $user = $this->model->login($username, $password);
            if ($user == TRUE) {
                Session::set('user', $username);
                setcookie('user', Session::get('user'), 0, APP_W);
                Session::set('rol', $user);
                if ($_SESSION['rol'] == 1) {
                    # user
                    $this->json_out(array('redirect' => APP_W . 'user'));
                } else {
                    # admin
                    $this->json_out(array('redirect' => APP_W . 'dashboard'));
                }
            } else {
                $this->json_out(array('redirect' => APP_W . 'register'));
            }
        } else {
            $this->json_out(array('redirect' => APP_W . 'register'));
        }
    }

}
