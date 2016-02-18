<?php

	class mHome extends Model{

		function __construct(){
			parent::__construct();
			
		}

		function login($username,$password){
			try{
			    $sql="SELECT * FROM users WHERE username=? AND password=?";
			    $this->query($sql);
			    $this->bind(1,$username);
			    $this->bind(2,$password);
			    $this->execute();
		    if($this->rowCount()==1){
		        Session::set('islogged',TRUE);
			    Session::set('us',$username);
			    return TRUE;
			}else{
			    Session::set('islogged',FALSE);
			    return FALSE;}
			}catch(PDOException $e){
			    echo "Error:".$e->getMessage();
			}
		}
	}