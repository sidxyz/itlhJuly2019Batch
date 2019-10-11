<!DOCTYPE html>
<html>
<head>
	<title>Articles</title>
	<link rel="stylesheet"  href="/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
	<meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>


<!-- 
		<p>	ID : {{ $article->id }} </p>
		<p> Title :  {{ $article->title }} </p>
		<p> Description :  {{ $article->description }} </p>
		<p> Author :  {{ $article->author }} </p> -->
		

		 <!-- <a href="/fullArticle/{{ $article->id }}">View Full Article</a> -->
				<!-- <a href="/deleteCourse/{{ $article->name }}">Delete</a> -->

		<div class="container-fluid">
			<div class="blog-post">
				<h2 class="blog-post title"> {{$article->title}} </h2>
				<p class="blog-post-meta"> {{$article->created_at}} by <a href="#"> {{$article->author}} </a> </p>
				<div>
					{{$article->description}}
				</div>
				<div>
					
						<input type="hidden" name="article_id" value="{{$article->id}}">
						<input class="col-md-9" type="text" name="text" id="comment">
						<button onclick="addComment()">Post Comment</button>
				

					<div id="commentDisplay">

						<!-- @foreach($article->comment as $comment)
						<div>
							{{$comment->text}}
						</div>
						<p class="blog-post-meta">{{$comment->created_at}}</p>
						@endforeach -->
					</div>
				</div>
			</div>

		</div>



		<hr>

	

</body>

<script type="text/javascript">

			

			fetch_comments();

			function fetch_comments()

			{
				var displayHtml = '';

				$.ajax({
				url : '/fullArticle/{{$article->id}}/comments',
				method : 'GET',
				data : {id : {{ $article->id }} },

				
				success:function(data)
				{
					for(var i=0; i<data.length; i++)
					{
						displayHtml+='<p>'+data[i].id+'</p>'
						displayHtml+='<p>'+data[i].text+'</p>'
						displayHtml+='<p>'+data[i].created_at+'</p><br>';

						

					}
					$('#commentDisplay').html(displayHtml);
					console.log(data);
				}

				})

			}
			
			
			

			//var comment = document.querySelector('#comment').value;

			function addComment()
			{

			  var comment =	document.querySelector('#comment').value;

				$.ajax({
					headers: {
						    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
						  },
					url : '/addComment',
					method : 'POST',
					data : {article_id : {{ $article->id}}, text : comment},
					success:function(data)
					{
						if (data == "done") 
						{
							fetch_comments();
						}
					},
					error:function()
					{
						console.log('not dpne');
					}
				})
			}




		</script>
</html>