<!DOCTYPE html>
<html>
	<head>
		<title>All Articles</title>
		    <!-- Bootstrap core CSS -->
	<link href="/css/bootstrap.min.css" rel="stylesheet">
	</head>
	<body>
		
		<div class="container-fluid">
			<h2>All Articles so far...</h2>
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>#</th>
						<th>Title</th>
						<th>Description</th>
						<th>Author</th>
						<th>Action</th>	
					</tr>
				</thead>
				<tbody>
					@foreach($allArticles as $article)
						<tr>
							<td>{{$article->id}}</td>
							<td>{{$article->title}}</td>
							<td>{{substr($article->description,0,105) }} ...</td>
							<td>{{$article->author}}</td>
							<td>
								<a href="/article/{{$article->id}}">see more</a>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</body>
</html>