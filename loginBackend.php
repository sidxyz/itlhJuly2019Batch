<?php
session_start();
if($_POST['userName']=='admin@gmail.com' && 
   $_POST['password']=='secret')
   {
   		$_SESSION['email'] = $_POST['userName'];
         // var_dump($_POST['rememberMe']);
         // die();
         $_SESSION['rememberMe'] = $_POST['rememberMe'];
   		header('location:home.php');
   }
   else
   {	
         $_SESSION['errorMessage']="Incorrect username or password";
   		header('location:login.php');
   }
