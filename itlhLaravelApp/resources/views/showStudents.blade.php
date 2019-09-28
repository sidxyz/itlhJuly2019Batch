<!DOCTYPE html>
<html>
	<head>
		<title>show students</title>
	</head>
	<body>
		@foreach($students as $data)
				<p>Student id = {{ $data->id }} </p>
				<p>Student name = {{ $data->name }}</p>
				<p>Student college = {{ $data->college }}</p>
				<p>Student email = {{ $data->email }}</p>
				<p>Student phone = {{ $data->phone }}</p>
				<p>Student password = {{ $data->password }}</p>
				<a href="/editStudent/{{ $data->id }}"> Edit</a> <br>
				<a href="/deleteStudent/{{ $data->id }}"> Delete</a>
			<hr>	
		@endforeach
	</body>
</html>