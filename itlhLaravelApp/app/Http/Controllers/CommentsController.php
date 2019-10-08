<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;

class CommentsController extends Controller
{
    public function store(Request $request)
    {
    	//dd($request);
    	Comment::create($request->all());
    	$article_id = $request->article_id;
    	return redirect('/article/'.$article_id);
    }
}
