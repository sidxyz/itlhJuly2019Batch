<?php
require_once 'connection.php';

$database = new Connection();

$userId = $_GET['id'];

$selectQuery = "select * from users where id = $userId";
$users = $database->executeQuery($selectQuery,'select');

$user = $users[0];

//var_dump($user);

?>
<!DOCTYPE html>
<html>
	<head>
		<title>User Update</title>
	</head>
	<body>
		<h1>Edit Details to Update a user</h1>
		<form action="editUserBackend.php" method="POST">

			<label>Id:</label>
			<input type="text" name="id" value="<?php echo $user['id'] ?>"><br/>

			<label>Name:</label>
			<input type="text" name="name" value="<?php echo $user['name'] ?>"><br/>

			<label>College:</label>
			<input type="text" name="college" value="<?php echo $user['college'] ?>"><br/>

			<label>Email:</label>
			<input type="email" name="email" value="<?php echo $user['email'] ?>"><br/>

			<label>Password:</label>
			<input type="password" name="password" value="<?php echo $user['password'] ?>"><br/>

			<label>Phone Number:</label>
			<input type="number" name="phoneNumber" value="<?php echo $user['phone'] ?>"><br/>

			<label>Marks:</label>
			<input type="number" name="marks" value="<?php echo $user['marks'] ?>"><br/>

			<button type="submit">Update</button>

		</form>
	</body>
</html>