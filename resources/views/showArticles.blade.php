<!DOCTYPE html>
<html>
<head>
	<title>Articles</title>
</head>
<body>

	<table border>

		<thead>
				<tr>
					<th>ID</th>
					<th>Title</th>
					<th>Intro</th>
					<th>Author</th>
				</tr>
		</thead>

		<tbody>
			
			@foreach($articles as $article)

				<?php $miniDesc = substr($article->description,0,20)."...."; ?>

				<tr>

					<td> {{ $article->id }} </td>
					<td> <a href="/fullArticle/{{ $article->id }}">{{ $article->title }}</a>  </td>
					<td> <?php echo "$miniDesc"; ?><!-- {{ $article->description }} --> </td>
					<td> {{ $article->author }} </td>
					

					 
							<!-- <a href="/deleteCourse/{{ $article->name }}">Delete</a> -->
					
				</tr>
				

			@endforeach

		</tbody>

		
		
	</table>

	PS : Click on the title for the full Article.

	

</body>
</html>