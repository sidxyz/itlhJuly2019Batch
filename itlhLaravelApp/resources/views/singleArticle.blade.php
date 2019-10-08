<!DOCTYPE html>
<html>
	<head>
		<title>Article Detail</title>
		    <!-- Bootstrap core CSS -->
	<link href="/css/bootstrap.min.css" rel="stylesheet">
	</head>
	<body>
		<div class="container-fluid">
			<div class="blog-post">
				<h2 class="blog-post-title"> {{$article->title}} </h2>
				<p class="blog-post-meta">{{$article->created_at}} by <a href="#">{{$article->author}}</a></p>
				<div>
					{{$article->description}}
				</div>
				<div >
					<form method="POST" action="/addComment">
						@csrf	 	
						<input type="hidden" name="article_id" value="{{$article->id}}">
						<input class="col-md-12" type="text" name="text">
					<button>post comment </button>	
					</form>

					<div>
						@foreach($article->comment as $comment)
						<div>
							{{$comment->text}}
						</div>
						<p class="blog-post-meta">{{$comment->created_at}}</p>
						@endforeach
					</div>
				</div>
				
			</div>
			
		</div>
	</body>
</html>