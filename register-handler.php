<?php
include("libraries/Register.php");
$register = new Register($connect);
include("libraries/Constants.php");

function sanitizeFormUsername($inputText) {
	$inputText = strip_tags($inputText);
	$inputText = str_replace(" ", "", $inputText);
	$inputText = ucfirst(strtolower($inputText));
	return $inputText;
}

function sanitizeFormPassword($inputText) {
	$inputText = strip_tags($inputText);
	return $inputText;
}

if(isset($_POST['registerButton'])) {
	$username = sanitizeFormUsername($_POST['username']);
	$password = sanitizeFormPassword($_POST['password']);
	$password2 = sanitizeFormPassword($_POST['password2']);

	$wasSuccessful = $register->validateUsername($username);
	$wasSuccessful2 = $register->validatePasswords($password, $password2);


	if(!$wasSuccessful && !$wasSuccessful2) {

		$data = [
			'username' => $username,
			'password' => $password,
		];

		$query = "INSERT INTO users (username, password) VALUES (:username, :password)";
		$statement = $connect->prepare($query);
		$statement->execute($data);
	} else {
		return false;
	}
}

?>












