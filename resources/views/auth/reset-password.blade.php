@extends('project.template')
@section('content')
{{-- <div class="login-form">
    <h2>Reset Password</h2>
    <hr  style="width: 100px; margin-left: 250px; background-color: rgb(0, 151, 252); height: 6px;">
    <form action="{{ route("password.update") }}" method="POST">
        @csrf
        <input type="hidden" value="{{ $request -> token }}" name="token">
        <input type="Email" placeholder="Email" name="email" value="{{ $request -> email }}" style="width: 400px; margin-top: 50px; padding: 10px; font-size: 20px;">
        @error('email')
            <p style="color: red">{{$message}}</p>
        @enderror
        <input type="password" name="password" id="" placeholder="New Password" style="width: 400px; margin-top: 20px; padding: 10px; font-size: 20px;">
        @error('password')
        <p style="color: red">{{$message}}</p>
        @enderror
        <input type="password" name="password_confirmation" id="" placeholder="password_confirmation " style="width: 400px; margin-top: 20px; padding: 10px; font-size: 20px;">
        <br>
        <button type="submit" class="btn btn-primary" style=" font-size: 20px; width: 400px; margin-top: 20px;"> Request sent</button>
    </form>
</div> --}}
    <div class="container">
        <form action="{{ route("password.update") }}" method="POST">
            @csrf
            <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
              <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
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
            <div class="form-group">
                <label for="exampleInputPassword1">Conform Password</label>
                <input type="password" name="password_confirmation" class="form-control" id="exampleInputPassword1" placeholder="Confirm Password">
              </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
@endsection
