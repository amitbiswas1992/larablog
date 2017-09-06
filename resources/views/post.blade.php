@extends('layouts.main')

@section('content')
  
<div>

<ul>
      <div class="col-sm-8 blog-main">
         @foreach($post_all as $post)
         <li>{{$post->body}}</li>
  
          @endforeach

</ul>

</div>
<br>

<a href = "/post/create" class="btn btn-outline-primary" role = "button">Create New Post</a><br><br>
@endsection
