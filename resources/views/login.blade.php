@extends('layouts/master')
@section('title','Login Page')
@section('content')
<div class="container custom-login">
   <div class="row">
    <div class="col-md-4 offset-md-3">
        <form action="{{route('user.login')}}" method="post">
           @csrf
            <div class="mb-3">
              <label for="email" class="form-label">Email address</label>
              <input type="email" class="form-control" id="email" name="email">
            </div>
               <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password" class="form-control" name="password" id="password">
            </div>
           <button type="submit" class="btn btn-primary">Login</button>
          </form>

    </div>
   </div>

</div>
@endsection
