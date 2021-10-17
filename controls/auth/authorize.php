<?php
namespace control;

use mysqli;

class Authorize{
	//register user
	public static function register(){
		$user   = mysqli_real_escape_string(conn(), $_POST['username']);
		$email  = mysqli_real_escape_string(conn(), $_POST['email']);
		$pass	= mysqli_real_escape_string(conn(), $_POST['pass']);

		$sql = "insert into user (username, email, password) values ('$user', '$email', '$pass')";

		if(mysqli_query(conn(), $sql)){
			setcookie('notice', 'df_reg_200', time() + (86400 * 30), "/"); 
		}else{
			setcookie('notice', 'df_reg_201', time() + (86400 * 30), "/");
		}

		header('Location: /notice/register');
	}

	//log the user
	public static function login(){

	}

	//reset user credentials
	public static function reset(){

	}

	//verify user session
	public static function verify(){

	}
}