<!DOCTYPE html>
<html>
	<head>
		<title>Student Registration</title>
	</head>
	<body>
		<h1>Student CRUD</h1>
		<form method="POST" action="/registrationData">
		    @csrf
			<input type="text" name="name" placeholder="enter name"><br>
			<input type="email" name="email" placeholder="enter email"><br>
			<input type="password" name="password" placeholder="enter password"><br>
		    <button type="submit">Register</button>
		</form>
	</body>
</html>