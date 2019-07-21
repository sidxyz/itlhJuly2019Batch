<?php
session_start();
$_SESSION['email'] = null;
$_SESSION['rememberMe'] = null;
$_SESSION['errorMessage']="User logged out successfully!";
header('location:login.php');