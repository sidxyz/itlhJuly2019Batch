<!DOCTYPE html>
<html>
<head>
	<title>Delete Comments</title>
</head>
<body>

	<table border>
		<thead>
			<tr>
				<th>Comment ID</th>
				<th>Comment</th>
				<th>Article ID</th>
				<th>Article Title</th>
				<th>Action</th>
			</tr>
		</thead>

		<tbody>
		@foreach($articles as $article)
			@foreach($article->comment as $comment)
				<tr>
					<td>{{$comment->id}}</td>
					<td>{{$comment->text}}</td>
					<td>{{$article->id}}</td>
					<td>{{$article->title}}</td>
					<td><a href="/deleteComment/{{$comment->id}}">Delete</a></td>
				</tr>
			@endforeach
		@endforeach	
		</tbody>
	</table>

</body>
</html>