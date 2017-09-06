@extends('layouts.main')


@section('content')

<form method="POST" action="/post">
{{ csrf_field() }}

  <div class="form-group">
    <label for="exampleInputEmail1">Title</label>
    <input type="text" class="form-control" id="title" name="title" required>
   
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Body</label>
  <textarea type ="text" name="body" id="body" class="form-control" required></textarea>
  </div>
 
  <button type="submit" class="btn btn-outline-primary">Publish</button>
</form>

@include('layouts.errors')
<br><br>


@endsection

