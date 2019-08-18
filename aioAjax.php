<!DOCTYPE html>
<html>
	<head>
		<title>AIO</title>
		<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
	</head>
	<body>
		<h1>Fill Details to Register a user</h1>
		<form>

			<!-- <input type="hidden" name=""> -->

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

			<button type="button" id="action" onclick="registerWithoutRefresh()">Register</button>

		</form>

		<hr>

		<h1>Registered users are below :</h1>

		<table>
			<thead>
				<tr>
					<th>ID</th>
					<th>NAME</th>
					<th>COLLEGE</th>
					<th>EMAIL</th>
					<th>PHONE</th>
					<th>MARKS</th>
					<th>ACTION</th>
				</tr>

			</thead>
			<tbody id="usersDisplayArea">

			</tbody>
		</table>
	</body>

	<script type="text/javascript">
		function fetchStudents()
		{	
			$.ajax({
				url:'aioBackEndAjax.php?action=select',
				method:'GET',
				success:fetchSuccessCallBack,
				error:fetchErrorCallBack
			});
		}

		function fetchSuccessCallBack(data) 
		{
			//console.log("success of fetch students");
			var users = JSON.parse(data); //converted string to json object

			var displayHtml = '';

			for(var i=0; i<users.length; i++)
			{

				displayHtml+='<tr>'
				displayHtml+='<td>'+users[i].id+'</td>'
				displayHtml+='<td>'+users[i].name+'</td>'
				displayHtml+='<td>'+users[i].college+'</td>'
				displayHtml+='<td>'+users[i].email+'</td>'
				displayHtml+='<td>'+users[i].phone+'</td>'
				displayHtml+='<td>'+users[i].marks+'</td>'
				displayHtml+='<td> <button onclick=editWithoutRefresh('+users[i].id+')>Edit</button>||<button onclick=deleteWithoutRefresh('+users[i].id+')>Delete</button></td>'
				displayHtml+='</tr>'
			}

			$('#usersDisplayArea').html(displayHtml);	
		}

		function fetchErrorCallBack() 
		{
			console.log("error of fetch students");
		}

		function deleteWithoutRefresh(userId)
		{

			$.ajax({
				url:'aioBackEndAjax.php?action=delete&id='+userId,
				method:'GET',
				success:deleteSuccessCallBack,
				error:deleteErrorCallBack	
			});

		}

		function deleteSuccessCallBack(data)
		{
			if(data=="delete successful")
			{
				console.log("ho gaya");
				fetchStudents();
			}
			else
			{
				alert("some issue in delete");
			}	
		}
		
		function deleteErrorCallBack()
		{
			console.log("nope");
		}

		function registerWithoutRefresh()
		{

			 var data = 
			 {
				id:document.querySelector('#userId').value,
				name:document.querySelector('#name').value,
				email:document.querySelector('#email').value,
				college:document.querySelector('#college').value,
				password:document.querySelector('#password').value,
				marks:document.querySelector('#marks').value,
				phoneNumber:document.querySelector('#phoneNumber').value
			 }

			if(document.querySelector('#action').innerText=="Update")
			{
				//run update ajax

				$.ajax({
					url:'aioBackEndAjax.php?action=update',
					data:data,
					method:'GET',
					success:updateSuccessCallBack,
					error:updateErrorCallBack	
				});

			}
			else
			{
				//run insert ajax

				$.ajax({
					url:'aioBackEndAjax.php?action=register',
					data:data,
					method:'GET',
					success:registerSuccessCallBack,
					error:registerErrorCallBack	
				});

			}	


			
		}

		function registerSuccessCallBack(data)
		{
			if(data == 'insert successful')
			{
				console.log("ho gaya");
				clearFormFields();
				fetchStudents();
			}
			
		}
		
		function registerErrorCallBack()
		{
			console.log("nope");
		}

		function updateSuccessCallBack(data)
		{
			if(data == 'update successful')
			{
				console.log("ho gaya");
				document.querySelector('#action').innerText = 'Register';
				clearFormFields();
				fetchStudents();
			}
			
		}
		
		function updateErrorCallBack()
		{
			console.log("nope");
		}

		function editWithoutRefresh(userId)
		{

			$.ajax({
				url:'aioBackEndAjax.php?action=edit&id='+userId,
				method:'GET',
				success:editSuccessCallBack,
				error:editErrorCallBack	
			});
		}

		function editSuccessCallBack(data)
		{	
			var user = JSON.parse(data);
			document.querySelector('#userId').value = user.id;
			document.querySelector('#name').value = user.name;
			document.querySelector('#college').value = user.college;
			document.querySelector('#email').value = user.email;
			document.querySelector('#phoneNumber').value = user.phone;
			document.querySelector('#marks').value = user.marks;
			document.querySelector('#password').value = user.password;
			document.querySelector('#action').innerText = 'Update';
		}

		function editErrorCallBack()
		{

		}

		function clearFormFields()
		{

			document.querySelector('#userId').value = '';
			document.querySelector('#name').value = '';
			document.querySelector('#college').value = '';
			document.querySelector('#email').value = '';
			document.querySelector('#phoneNumber').value = '';
			document.querySelector('#marks').value = '';
			document.querySelector('#password').value = '';
		}

		fetchStudents();
	</script>
</html>