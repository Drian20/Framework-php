<?php
	
	class Home extends Controller{
		protected $model;
		protected $view;
		
		function __construct($params){
			parent::__construct($params);
			$this->model=new mHome();
			$this->view= new vHome();
		}

		function home(){
			//Coder::codear($this->conf);
		}

		function login(){
			if(isset($_POST['us'])){
				$us = filter_input(INPUT_POST,'us',FILTER_SANITIZE_STRING);
				$password = filter_input(INPUT_POST,'password',FILTER_SANITIZE_STRING);
				$user = $this->model->login($us,$password);
				if($user == TRUE){
					//cap a la pàgina principal
					header('Location:'.APP_W.'user');
				}else{
					//no hi és l'usuari, cal registrar
					header('Location:'.APP_W.'register');
				}
			}
		}
}