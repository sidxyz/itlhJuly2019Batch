<?php

require_once('connection.php');

$database = new Connection();

$id = (int)$_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$college = $_POST['college'];
$phoneNumber = (int)$_POST['phoneNumber'];
$mark = (int)$_POST['marks'];

$query = "insert into student values ($id,'$name','$college','$email',$phoneNumber,$mark)";

echo "query made = $query";
$database->executeQuery($query,'insert');


$sqlOutput = $database->executeQuery('select * from student','select');
var_dump($sqlOutput);


// echo "name =".$_GET['name']."<br/>";
// echo "email =".$_GET['email']."<br/>";
// echo "phoneNumbers =".$_GET['phoneNumbers']."<br/>";
// echo "batch =".$_GET['batch']."<br/>";