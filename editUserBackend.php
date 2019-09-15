<?php

require_once 'connection.php';

$id = (int) $_POST['id'];
$name = $_POST['name'];
$college = $_POST['college'];
$email = $_POST['email'];
$password = $_POST['password'];
$phoneNumber = (int) $_POST['phoneNumber'];
$marks = (int) $_POST['marks'];

$database = new Connection();
$query = "update users set name = '$name', college = '$college', email = '$email', password = '$password', phone = $phoneNumber, marks = $marks 
	where id = $id";
$output = $database->executeQuery($query, "update");
echo $output;
if ($output == true) {
	header('location:home.php');
} else {
	//header('location:register.php');
	var_dump("error in update");
	die();
}