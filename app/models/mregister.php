<?php

	class mRegister extends Model{

		function __construct(){
			parent::__construct();
			
		}

		function register($username,$email,$password){
			try{
			    $sql="SELECT * FROM users WHERE email=:email";
			    $this->query($sql);
			    $this->bind(':email',$email);
			    $this->execute();
		    if($this->rowCount()==0){
		        $query="CALL insert_user(:username, :password, :email)";
			    $this->query($query);
			    $this->bind(':username',$username);
			    $this->bind(':email',$email);
			    $this->bind(':password',$password);
			    $this->execute();
			    Session::set('isregistered',TRUE);
			    Session::set('email',$email);
			    return TRUE;
			}else{
			    Session::set('isregistered',FALSE);
			    return FALSE;}
			}catch(PDOException $e){
			    echo "Error:".$e->getMessage();
			}
		}
	}
?>