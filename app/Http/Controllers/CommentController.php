<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Article;

class CommentController extends Controller
{
    public function store(Request $request)
    {
    	Comment::create($request->all());
        return "done";
  //   	$id = $request->article_id;
		// return redirect('/fullArticle/'.$id);
    }

    public function delete($id)
    {
    	Comment::destroy($id);
    	return redirect('deleteComments');
    }

    public function ajaxShow(Request $request)
    {

        $article = new Article();
        $article = $article->where('id',(int)$request->id)->get();
        $article = $article->first();

        return $article->comment;

    }


}
