<?php
		session_start();
		$userEmail;
		if($_SESSION['email']!=null)
		{
			$userEmail=$_SESSION['email'];	
		}
		else
		{
			header('location:login.html');
		}	
	 			
?>
<!DOCTYPE html>
<html>
<head>
	<title>home</title>
</head>
<body>
	<h1>Congrats, <?php echo $userEmail; ?>
	 you've made it home!</h1>

	 <a href="logout.php">Click Here to Log Out</a>

</body>
</html>