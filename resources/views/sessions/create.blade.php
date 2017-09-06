@extends('layouts.main')

@section('content')

<div class="col-sm-12">
<h2>Register</h2>

<form method="POST" action="/register">
{{csrf_field()}}
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" id="name" name="name"  placeholder="name" required>
    
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" id="email" name ="email" placeholder="email" required>
  </div>

  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="password" name ="password" placeholder="password" required>
  </div>

  <button type="submit" class="btn btn-outline-primary">Register</button>
</form>

</div><br><br>


@endsection 