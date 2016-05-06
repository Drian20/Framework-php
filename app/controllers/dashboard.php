<?php

class Dashboard extends Controller {

    protected $model;
    protected $view;

    function __construct($params) {
        parent::__construct($params);
        $this->model = new mDashboard();
        $this->view = new vDashboard();
    }

    function home() {
        
    }

    function showUsers(){
        $res=$this->model->showUsers();
        $this->json_out($res);
    }

    function insert_user() {
        if (isset($_POST['username']) && isset($_POST['name']) && isset($_POST['lastname']) && isset($_POST['password']) && isset($_POST['email']) && isset($_POST['country']) && isset($_POST['rol'])) {
            // Save inputs to variables
            $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
            $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
            $lastname = filter_input(INPUT_POST, 'lastname', FILTER_SANITIZE_STRING);
            $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
            $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
            $country = filter_input(INPUT_POST, 'country', FILTER_SANITIZE_STRING);
            $rol = filter_input(INPUT_POST, 'rol', FILTER_SANITIZE_STRING);
            // Call to insert model function
            $user = $this->model->insert_user($username, $name, $lastname, $password, $email, $country, $rol);
            $this->json_out($user);
        }
    }

    function update_user() {
        if (isset($_POST['id']) && (isset($_POST['name']) || isset($_POST['lastname']) || isset($_POST['email']) || isset($_POST['password']) || isset($_POST['country']) || isset($_POST['rol']))) {
            // Save inputs to variables
            $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_STRING);
            $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
            $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
            $lastname = filter_input(INPUT_POST, 'lastname', FILTER_SANITIZE_STRING);
            $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
            $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
            $country = filter_input(INPUT_POST, 'country', FILTER_SANITIZE_STRING);
            $rol = filter_input(INPUT_POST, 'rol', FILTER_SANITIZE_STRING);
            // Call to update model function
            $user = $this->model->update_user($id, $username, $name, $lastname, $password, $email, $country, $rol);
            $this->json_out($user);
        }
    }

    function delete_user() {
        if (isset($_POST['username'])) {
            // Save input
            $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
            // Call to delete model function
            $user = $this->model->delete_user($username);
            $this->json_out($user);
        }
    }

    function logout() {
        // Destroy user session
        Session::destroy();
        // Redirect to login page
        $this->json_out(array('redirect' => APP_W . 'login'));
    }

}
