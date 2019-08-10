<?php
session_start();
$userEmail;
if ($_SESSION['email'] != null) {
	$userEmail = $_SESSION['email'];
} else {
	$_SESSION['errorMessage'] = "Please log in to continue!";
	header('location:login.php');
}
require_once 'connection.php';
$object = new Connection();
$result = $object->executeQuery('select * from users', 'select');
?>
<!DOCTYPE html>
<html>
<head>
	<title>home</title>
</head>
<body>
	<h1>Congrats, <?php echo $userEmail; ?>
	 you've made it home!</h1>



<table>
	<tbody>
		<tr>
			<th>ID</th>
			<th>NAME</th>
			<th>COLLEGE</th>
			<th>EMAIL</th>
			<th>PHONE</th>
			<th>MARKS</th>
			<th>EDIT</th>
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
	echo "<td><a href='editUser.php?id=" . $result[$i]['id'] . "'>Edit</a></td>";
	echo "</tr>";
}
?>
	</tbody>
</table>

	 <a href="logout.php">Click Here to Log Out</a>

</body>
</html>