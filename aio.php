<?php
session_start();
require_once 'connection.php';
$object = new Connection();
$result = $object->executeQuery('select * from users', 'select');

$id;
$name;
$college;
$email;
$password;
$marks;
$phone;

$user = $_SESSION['user'];
if(sizeof($user)>0)
{
	$id = $user['id'];
	$name = $user['name'];
	$college = $user['college'];
	$email = $user['email'];
	$password = $user['password'];
	$marks = $user['marks'];
	$phone = $user['phone'];
}

?>
<!DOCTYPE html>
<html>
	<head>
		<title>AIO</title>
		<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
	</head>
	<body>
		<h1>Fill Details to Register a user</h1>
		<form method="POST" action="aioBackEnd.php">

			<label>Id:</label>
			<input type="text" name="id" id="userId" value="<?php echo $id ?>"><br/>

			<label>Name:</label>
			<input type="text" name="name" id="name" value="<?php echo $name ?>"><br/>

			<label>College:</label>
			<input type="text" name="college" id="college" value="<?php echo $college ?>"><br/>

			<label>Email:</label>
			<input type="email" name="email" id="email" value="<?php echo $email ?>"><br/>

			<label>Password:</label>
			<input type="password" name="password" id="password" value="<?php echo $password ?>"><br/>

			<label>Phone Number:</label>
			<input type="number" name="phoneNumber" id="phoneNumber" value="<?php echo $phone ?>"><br/>

			<label>Marks:</label>
			<input type="number" name="marks" id="marks"  value="<?php echo $marks ?>"><br/>

			<button type="submit">Register</button>

		</form>

		<hr>

		<h1>Registered users are below :</h1>

		<table>
			<tbody>
				<tr>
					<th>ID</th>
					<th>NAME</th>
					<th>COLLEGE</th>
					<th>EMAIL</th>
					<th>PHONE</th>
					<th>MARKS</th>
					<th>ACTION</th>
				</tr>
		<?php
		// var_dump($result);
		//die();
		for ($i = 0; $i < sizeof($result); $i++) {
			echo "<tr>";
			echo "<td>" . $result[$i]['id'] . "</td>";
			echo "<td>" . $result[$i]['name'] . "</td>";
			echo "<td>" . $result[$i]['college'] . "</td>";
			echo "<td>" . $result[$i]['email'] . "</td>";
			echo "<td>" . $result[$i]['phone'] . "</td>";
			echo "<td>" . $result[$i]['marks'] . "</td>";
			echo "<td><a href='aioBackEnd.php?id=" . $result[$i]['id'] . "&action=edit'>Edit</a> || <a href='aioBackEnd.php?id=" . $result[$i]['id'] . "&action=delete'>Delete</a></td>";
			echo "</tr>";
		}
		?>
			</tbody>
		</table>
	</body>
	<!-- <script type="text/javascript">
	function registerWithoutRefresh()
	{

		var data = {
			id:document.querySelector('#userId').value,
			name:document.querySelector('#name').value,
			email:document.querySelector('#email').value,
			college:document.querySelector('#college').value,
			password:document.querySelector('#password').value,
			marks:document.querySelector('#marks').value,
			phone:document.querySelector('#phone').value
		}

		$.ajax({
			url:'aioBackEnd.php',
			data:data,
			method:'POST',
			success:successCallBack,
			error:errorCallBack	
		});

		function successCallBack()
		{
			console.log("ho gaya");
		}
		
		function errorCallBack()
		{
			console.log("nope");
		}
	}

	function deleteWithoutRefresh(userId)
	{
		var data = {
			action:'delete',
			id:userId
		}

		$.ajax({
			url:'aioBackEnd.php',
			data:data,
			method:'POST',
			success:successCallBack,
			error:errorCallBack	
		});

		function successCallBack()
		{
			console.log("ho gaya");
		}
		
		function errorCallBack()
		{
			console.log("nope");
		}
	
	}
	</script> -->
</html>