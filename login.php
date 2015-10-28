<?php 
session_start();
require_once "connection.php";
require_once "User.php";
require_once "UserDao.php";


/* posts the Username and Password post variables*/
$username= $_POST["username"];
$password = $_POST["password"];

	$user_object = new User();
	$con = new Connection();
	$connection = $con->getConnection();
	$userDao_object = new UserDao($connection);
	$userDao_object->loginUser($user_object, $username, $password);
	
	
?>