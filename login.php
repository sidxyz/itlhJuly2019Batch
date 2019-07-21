<!DOCTYPE html>
<html>
	<head>
		<title>
			Auth
		</title>
	</head>
	<body>
		<p>
			<?php
				session_start();

				// var_dump($_SESSION);
				// die();
				
				if($_SESSION['errorMessage'])
				{
					echo $_SESSION['errorMessage']; 
					$_SESSION['errorMessage'] = null;
				}
					
				if($_SESSION['rememberMe']=='on')
				{
					header('location:home.php');
				}

			?>	
		</p>
		<form method="POST" action="loginBackend.php">
			<h1>Log In</h1>

			<label>User Name:</label>
			<input type="text" name="userName"><br/>

			<label>Password:</label>
			<input type="password" name="password"><br/>

			<label>Remember me:</label>
			<input type="checkbox" name="rememberMe"><br/>

			<button type="submit">Login</button>

		</form>
	</body>
</html>