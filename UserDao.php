<?php
require_once"User.php";
//require_once "connection.php";

class UserDao{
	
	private $connection;
	
	//constructor
	public function __construct($con){
		$this->connection =$con;
	}
	
	//takes an object of class User
	public function registerUser($username, $password, $email){
		//$username = $user->getusername();
		//$password= $user->getpassword();
		
	// inserts the username and password into the databse
		$query= "insert into login values(null, '$username', '$password','$email', 0)" ;		
		$result=$this->connection->query($query) or die (mysqli_error($this->connection));
	}
	
	public function setPassword($userobject, $newpassword, $user){
		$userobject->setpassword($newpassword);
		
		$password= $userobject->getpassword();
		//UPDATE `file`.`login` SET `password` = '111537' WHERE `login`.`id` = 2;
		$query= "UPDATE login SET password= '$password' WHERE username= '$user' ";
		$result = $this->connection->query($query) or die (mysqli_error($this->connection));
		header("location:index.php");
	}
	
	
	public function loginUser($userobj, $user, $pass){
		$userobj->setusername($user);
		$userobj->setpassword($pass);
		
		$username= $userobj->getusername();
		$password= $userobj->getpassword();

		
		 $query="select * from login";
		 $result=$this->connection->query($query) or die (mysqli_error($this->connection));
	 
	// Fetches and Compares Username and password to see if it matches reord in the database
		while($row=$result->fetch_assoc()) {
			if (($username===$row["username"]) && ($password===$row["password"]) )
			{
				//If the usernames and passwords match it creates a session called username
					$_SESSION["username"] = $row["username"];
					$_SESSION["role"] = $row["role"];
					 header("location:index.php");
							 return;
			}
			}
			
			// Displays that an incorrect Username and password has been entered
				$error = "Username or Password incorrect";
				$_SESSION["signinCheck"] = $error;
				header("location:signin.php");
					return;
	}
}
?>