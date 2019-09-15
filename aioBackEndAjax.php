<?php

require_once 'connection.php';
$database = new Connection();

if($_GET['action']=='delete')
{

	$studentID = (int)$_GET['id'];

	$output =  $database->executeQuery("delete from users where id = $studentID","delete");

	if ($output == true) {
		echo "delete successful";
	} else {
		echo("error in delete");
	}
}
elseif ($_GET['action']=='edit') 
{
	$userId = $_GET['id'];

	$selectQuery = "select * from users where id = $userId";
	$users = $database->executeQuery($selectQuery,'select');

	$user = $users[0];

	echo json_encode($user);

}
elseif ($_GET['action']=='select') 
{

	$selectQuery = "select * from users";
	$users = $database->executeQuery($selectQuery,'select');
	 
	echo json_encode($users);
	
	
}
elseif ($_GET['action']=='register') 
{

	
	$id = (int) $_GET['id'];
	$name = $_GET['name'];
	$college = $_GET['college'];
	$email = $_GET['email'];
	$password = $_GET['password'];
	$phoneNumber = (int) $_GET['phoneNumber'];
	$marks = (int) $_GET['marks'];


	$query = "insert into users values($id,'$name','$college','$email','$password',$phoneNumber,$marks)";
		$output = $database->executeQuery($query, "insert");
		//echo $output;
		if ($output == true) 
		{
			echo "insert successful";
		} 
		else 
		{
			echo "error in register";
		}	

	
	
}
elseif ($_GET['action']=='update') 
{

	
	$id = (int) $_GET['id'];
	$name = $_GET['name'];
	$college = $_GET['college'];
	$email = $_GET['email'];
	$password = $_GET['password'];
	$phoneNumber = (int) $_GET['phoneNumber'];
	$marks = (int) $_GET['marks'];


	$query = "update users set name = '$name', college = '$college', email = '$email', password = '$password', phone = $phoneNumber, marks = $marks 
	where id = $id";
		$output = $database->executeQuery($query, "update");
		//echo $output;
		if ($output == true) 
		{
			echo "update successful";
		} 
		else 
		{
			echo "error in update";
		}	
	
}