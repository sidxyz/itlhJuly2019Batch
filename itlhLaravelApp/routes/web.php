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

Route::get('/','PagesController@index');

Route::get('/about','PagesController@about');

Route::get('/portfolio','PagesController@portfolio');

Route::get('/contact','PagesController@contact');

Route::get('/login', 'PagesController@login');

Route::get('/showDummyData', 'PagesController@showDummyData');

Route::get('/showRegistrationForm', 'PagesController@showRegistrationForm');

Route::post('/registrationData', 'PagesController@registrationData');

Route::get('/addStudent','StudentController@show');

Route::post('/addStudent','StudentController@store');

Route::get('/showStudents','StudentController@all');

Route::get('/deleteStudent/{id}','StudentController@delete');




// Route::get('/', function () {
//     return view('index');
// });


// Route::get('/', function () {
//     return view('index');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
