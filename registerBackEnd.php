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
$query = "insert into users values($id,'$name','$college','$email','$password',$phoneNumber,$marks)";
$output = $database->executeQuery($query, "insert");
echo $output;
if ($output == true) {
	header('location:login.php');
} else {
	header('location:register.php');
}