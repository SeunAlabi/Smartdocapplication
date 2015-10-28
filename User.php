<?php

class User{
	private $username;
	private $password;

	public function __construct(){
		$this->username = self::createUser();
		$this->password = self::createPassword();
	}
	
	//getters and setters
	public function getusername(){
		return $this->username;
	}
	public function getpassword(){
		return $this->password;
	}

	//set functions
	public function setusername($newusername){
		$this->username = $newusername;
	}
	public function setpassword($newpassword){
		$this->password = $newpassword;
	}
	
	
	// randomly generates a username
	public static function createUser(){
		$random= self::randomPassword(6);
		return("USER".$random);
	}

	//randomly generate password
	public static function createPassword(){
		$random= self::randomPassword(8);
		return($random);
	}

	public static function randomPassword($length) {
	mt_srand((double)microtime() * 1000000); 
        $possible = 'abcdefghijklmnopqrstuvwxyz' . 'ABCDEFGHIJKLMNOPQRSTUVWXYZ'.'0123456789'; 
        $randompass =""; 
        while(strlen($randompass) < $length) { 
                $randompass .= substr($possible, mt_rand(0, strlen($possible) -1), 1); 
        }
		return($randompass);
	}
	
}
?>