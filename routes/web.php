<?php

use App\Post;
use App\Portfolio;
use App\User;
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

Route::get('/', 'PostsController@index')->name('home');

Route::get('/about',function(){
$user_details=DB::table('users')->get();

return view('about',compact('user_details'));

});

Route::get('/task/{task_table}','TaskController@getTask');



Route::get('/portfolio','PortfolioController@getPortfolio');

// Eloquent Relationship

Route::get('/post','PostsController@post');

Route::get('/post/create','PostsController@create');

Route::post('/post','PostsController@store');

Route::get('/jobs','Jobscontroller@job_list');

Route::get('/sabbir','PortfolioController@getSabbir');

//show blog post route 

Route::get('/post/{id}','PostsController@show');

Route::post('/post/{id}/comments','CommentsController@store');

Route::get('/register','RegistrationsController@create');

Route::post('/register','RegistrationsController@store');

Route::get('/login','SessionsController@create');

