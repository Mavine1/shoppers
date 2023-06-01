@extends('master')
@section("content")
<div class="container custom-login">
    <div class="row ">
        <div class="col-sm-4 col-sm-offset-4">
        <form action="/login" method="POST">
        @csrf
        <div class="form-group">
    <label for="exampleInputEmail1">User Name </label>
    <input type="email" name="email"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="User Name">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password"  name="Password" class="mb-2 form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <button type="submit" class="mb-4 btn btn-outline-primary">Login</button>
</form>
        </div>
    </div>
</div>
@endsection