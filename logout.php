<?php
session_start();
$_SESSION['email'] = null;
header('location:login.html');