@extends('master')
@section("content")
<div class="container custom-login">
    <div class="row vertical-center">
        <div class="col-sm-4 nav-log ">
        <form>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="mb-2 form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <button type="submit" class="mb-4 btn btn-outline-primary">Submit</button>
</form>
        </div>
    </div>
</div>
@endsection