<?php

class Register extends Controller {

    protected $model;
    protected $view;

    function __construct($params) {
        parent::__construct($params);
        $this->model = new mRegister();
        $this->view = new vRegister();
    }

    function home() {
        
    }

    function register() {
        if (!empty($_POST['username'])) {
            $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
            $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
            $lastname = filter_input(INPUT_POST, 'lastname', FILTER_SANITIZE_STRING);
            $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
            $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
            $country = filter_input(INPUT_POST, 'country', FILTER_SANITIZE_STRING);
            $user = $this->model->register($username, $name, $lastname, $password, $email, $country);
            if ($user == TRUE) {
                Session::set('user', $username);
                $this->json_out(array('redirect' => APP_W . 'user'));
            } else {
                $this->json_out(array('redirect' => APP_W . 'register'));
            }
        }
    }

    function back(){
        $this->json_out(array('redirect' => APP_W . 'login'));
    }
}
