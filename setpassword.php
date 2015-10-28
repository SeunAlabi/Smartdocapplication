<?php 
session_start(); 
require_once "connection.php";
require_once "User.php";
require_once "UserDao.php";



if(isset($_POST["submit"])){
	$password = $_POST["password"];
	$password2 = $_POST["password2"];
	
	if($password ===$password2){
		if(isset($_SESSION["username"])){
		$user = $_SESSION["username"];
		$user_object = new User();

		$con= new Connection();
		$connection = $con->getConnection();
		
		$UserDao_object = new UserDao($connection);
		$UserDao_object->setPassword($user_object, $password, $user);
		}
		else{
			header("location:signin.php");
			}
	}
	else{		
		$_SESSION["passError"] = "Passwords do not match!!!";
		header("location:new.php");
	}
}
?>
