<!DOCTYPE html>
<html>
	<head>
		<title>User Registration</title>
	</head>
	<body>
		<h1>Fill Details to Register a user</h1>
		<form action="registerBackEnd.php" method="POST">

			<label>Id:</label>
			<input type="text" name="id"><br/>

			<label>Name:</label>
			<input type="text" name="name"><br/>

			<label>College:</label>
			<input type="text" name="college"><br/>

			<label>Email:</label>
			<input type="email" name="email"><br/>

			<label>Password:</label>
			<input type="password" name="password"><br/>

			<label>Phone Number:</label>
			<input type="number" name="phoneNumber"><br/>

			<label>Marks:</label>
			<input type="number" name="marks"><br/>

			<button type="submit">Register</button>

		</form>
	</body>
</html>