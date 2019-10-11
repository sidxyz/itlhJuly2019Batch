<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticleController extends Controller
{

	public function add()
	{
		return view('addArticle');
	}

	public function store(Request $formdata)
	{
        if($formdata->file('image'))
        {
            // try{

                $image = $formdata->file('image');
                $filename = time().$image->getClientOriginalName();
                $path = (object)$filename;
                $image->move(public_path().'/images/', $path);
                $formdata->imageUrl = $filename;

            // }catch(Exception $e)
            // {
            //     dd($e);
            // }
            

        }
        else
        {
            $formdata->imageUrl = '';
        }
		Article::create($formdata->all());
		return redirect('showArticles');
	}

    public function display()
    {
    	$article = new Article();
    	$allArticles = $article->all();

    	return view('showArticles')->with(['articles'=>$allArticles]);
    }

    public function fullDisplay($id)
    {
    	$article = new Article();
    	$article = $article->where('id',(int)$id)->get();
    	$article = $article->first();

    	return view('fullArticle')->with(['article'=>$article]);
    }

    public function adminDisplay()
    {
        $article = new Article();
        $allArticles = $article->all();

        return view('deleteComments')->with(['articles'=>$allArticles]);
    }
}
