<?php

require_once 'connection.php';

$studentID = (int)$_GET['id'];

$database = new Connection();

$output =  $database->executeQuery("delete from users where id = $studentID","delete");

if ($output == true) {
	header('location:home.php');
} else {
	//header('location:register.php');
	var_dump("error in delete");
	die();
}
