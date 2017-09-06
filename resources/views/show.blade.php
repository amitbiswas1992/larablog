@extends('layouts.main')


@section('content')


<div class="row">
    <div class="col">
   
     <h1>{{$post->title}}</h1>
     <p class="blog-post-meta"> {{ $post->created_at->toFormattedDateString() }} </p>
<ul class="list-group"> 
    <li class="list-group-item">
     {{$post->body}}
  </li>
</ul> <br>

     <div class="comments">
     <ul class="list-group"> {{-- list group start --}}
     @foreach($post->comments as $comment)
     <article>
     <li class="list-group-item">
    <strong> {{$comment->body}}</strong>
     <p>{{$comment->created_at->diffForHumans()}}</p>
     </li>
     </article>
     @endforeach
     </ul> {{-- list group end   --}}
     </div><br><br>
      
      {{-- Creating comment form   --}}
     
 <div class="card">
  <div class="card-body">
    <form method="POST" action="/post/{{$post->id}}/comments" >
   {{csrf_field()}}

  <div class="form-group">
    <textarea name="body" placeholder="Your comment here" class="form-control" required></textarea>
</div>
  <div class="form-group">
    
  <div class="form-group">
   <button type="submit" class="btn btn-outline-primary" id="title" >Add Comment</button>
   
  </div>
  </div>
  </form>
@include('layouts.errors')
  </div>
</div>
    </div>
      
      {{-- Creating comment form   --}}
    


    <div class="col-md-auto"></div>
    @include('layouts.sidebar')
     </div>
     <div class="row">
     <div class="col">
          <a href = "/post/create" class="btn btn-outline-primary" role = "button">Create New Post</a><br><br>
    </div>
    
     </div>
  </div>
  
@endsection