<?php
session_start();
require_once 'connection.php';

$database = new Connection();

$email = $_POST['userName'];
$password = $_POST['password'];

$query = "select count(*) as count from users where email = '$email' && password = '$password'";
$result = $database->executeQuery($query, 'select');
$result = $result[0];
$output = $result['count'];
$output = (int) $output;
if ($output > 0) {
	$_SESSION['email'] = $_POST['userName'];
	$_SESSION['rememberMe'] = $_POST['rememberMe'];
	header('location:home.php');
} else {
	$_SESSION['errorMessage'] = "Incorrect username or password";
	header('location:login.php');
}

//var_dump($result);

// if ($_POST['userName'] == 'admin@gmail.com' &&
// 	$_POST['password'] == 'secret') {
// 	$_SESSION['email'] = $_POST['userName'];
// 	// var_dump($_POST['rememberMe']);
// 	// die();
// 	$_SESSION['rememberMe'] = $_POST['rememberMe'];
// 	header('location:home.php');
// } else {
// 	$_SESSION['errorMessage'] = "Incorrect username or password";
// 	header('location:login.php');
// }
