<?php
   
   class Register extends Controller{
      protected $model;
      protected $view;
      
      function __construct($params){
         parent::__construct($params);
         $this->model=new mRegister();
         $this->view= new vRegister();
      }

	function register(){

   		if(!empty($_POST['username'])){
         $username=filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
         $email=filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
         $password=filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
         $usuario=$this->model->register($username, $email, $password);
         if ($usuario == TRUE) {
         	header('Location:'.APP_W.'home');
         } else {
         	header('Location:'.APP_W.'error');
         }
 		}
 	}
}
?>