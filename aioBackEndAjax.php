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
	
	$_SESSION['user']=$user;
	header('location:aio.php');
}
elseif ($_GET['action']=='select') 
{

	$selectQuery = "select * from users";
	$users = $database->executeQuery($selectQuery,'select');
	 
	echo json_encode($users);
	
	
}
else
{	

	$id = (int) $_POST['id'];
	$name = $_POST['name'];
	$college = $_POST['college'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$phoneNumber = (int) $_POST['phoneNumber'];
	$marks = (int) $_POST['marks'];


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

	// if($_SESSION['user']!=null) //this means update block
	// {
	// $query = "update users set name = '$name', college = '$college', email = '$email', password = '$password', phone = $phoneNumber, marks = $marks 
	// where id = $id";
	// 	$output = $database->executeQuery($query, "update");
	// 	echo $output;
	// 	$_SESSION['user'] = null;
	// 	if ($output == true) {
	// 		header('location:aio.php');
	// 	} else {
	// 		var_dump("error in update");
	// 		die();
	// 	}
	// }
	// else //this means insert block
	// {

		
	// }


	
}

