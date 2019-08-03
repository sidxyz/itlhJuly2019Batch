<?php
require_once 'connection.php';
$anything = new Connection();

$output = $anything->executeQuery("select id as identifyer,name as full_name,college as institute,email as user_name,password as secret,phone,marks from users", "select");

var_dump($output);