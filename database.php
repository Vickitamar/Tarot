<?php

$host = "localhost";
$user = "root";
$pass = "";
$database = "login";
$message = "";

try {

	$connect = new PDO("mysql:host=$host; dbname=$database", $user, $pass);  
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
} catch(PDOException $error) {   
      $message = $error->getMessage();  
 }      
