@extends('project.template')
@section('content')
  <div class="container">
    <form action="/login" method="POST">
      @csrf
      <h2>Login</h2>
      <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
          @error('email')
              <p style="color: red">{{$message}}</p>
          @enderror
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
          @error('password')
              <p style="color: red">{{$message}}</p>
          @enderror
      </div>
      <div class="row mb-3">
        <div class="col-9">
          <a href="/Fpassword">Forget password</a>
        </div>
        <div class="col-3">
          <a href="/register">Don't have account yet?</a>
        </div>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
    
@endsection
