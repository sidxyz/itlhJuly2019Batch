<?php

if($_POST['userName']=='admin@gmail.com' && 
   $_POST['password']=='secret')
   {
   		session_start();
   		$_SESSION['email'] = $_POST['userName'];
   		header('location:home.php');
   }
   else
   {	
   		header('location:login.html');
   }
