<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Article;

class ArticleController extends Controller
{
   	public function show()
   	{
   		return view('addArticleForm');
   	}

   	public function store(Request $request)
   	{
   		//dd($request);
   		Article::create($request->all());
   		return redirect('allArticles');
   	}

   	public function all()
   	{
   		$allArticles = Article::all(); 
   		return view('allArticles')->with('allArticles',$allArticles);
   	
   	}

   	public function seeMoreArticle($id)
   	{
   		$singleArticle = Article::where('id',(int)$id)->get()->first();
   		return view('singleArticle')->with('article',$singleArticle);
   		//dd($singleArticle);
   	}
}
