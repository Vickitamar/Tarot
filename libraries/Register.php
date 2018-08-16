<?php

class Register {

	private $errorArray;
	private $connect;

	public function __construct($connect) {
		$this->connect = $connect;
		$this->errorArray = array();
	}

	public function getError($error) { //if there is no error message return an empty string.
		if(!in_array($error, $this->errorArray)) {
			$error = "";
		}
		return "<span class='errorMessage'>$error</span>";
	}



	 public function validateUsername($username) {
		if(strlen($username) > 25 || strlen($username) < 3) {
			array_push($this->errorArray, Constants::$userNameCharacters);
			return true;
		}
	}

	public function validatePasswords($pw, $pw2) {
		if($pw != $pw2) {
			array_push($this->errorArray, Constants::$passwordsDoNotMatch);
			return true;	
		}
		if(preg_match('/[^A-Za-z0-9]/', $pw)) {
			array_push($this->errorArray, Constants::$passwordNotAlphaNumeric);
			return true;	
		}

		if(strlen($pw) > 30 || strlen($pw) < 5) {
			array_push($this->errorArray, Constants::$passwordCharacters);
			return true;
		}
	}		
	
}