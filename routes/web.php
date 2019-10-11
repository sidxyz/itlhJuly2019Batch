<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('showArticles','ArticleController@display');

Route::get('addArticle','ArticleController@add');

Route::post('addArticle','ArticleController@store');

Route::get('fullArticle/{id}','ArticleController@fullDisplay');

Route::post('addComment','CommentController@store');

Route::get('deleteComments','ArticleController@adminDisplay');

Route::get('deleteComment/{id}','CommentController@delete');

Route::get('fullArticle/{id}/comments','CommentController@ajaxShow');

