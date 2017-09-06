<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    
public function post()
{
 

$post_all= Post::all();

return view ('post',compact('post_all'));

}

public function index()
{
  $posts=Post::orderBy('created_at','desc')->get();
  return view ('index',compact('posts'));

}


public function create()
{
  return view('/create');
}

public function show($id)
{
   $post= Post::find($id); 
     return view ('show', compact('post'));

}

public function store(){

// Create a new post using the request data


$this->validate(request(), [
'title'=>'required| min:8 ',
'body'=>'required | min:10'

]);

Post::create(request(['title','body']));

//Then redirect to the homepage
return redirect('/');
}

}
