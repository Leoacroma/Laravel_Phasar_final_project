@extends('project.template')
@section('content')
    <div class="container">
        <form action="/register" method="POST">
            @csrf
            <h2>Become a Seller</h2>
            <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input type="text" name="name" class="form-control " id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="name" >
                @error('name')
                    <p style="color: red">{{$message}}</p>
                @enderror
            </div>
            <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" name="email" class="form-control " id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                @error('email')
                    <p style="color: red">{{$message}}</p>
                @enderror
            </div>
            <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" name="password" class="form-control " id="exampleInputPassword1" placeholder="Password" >
                @error('password')
                    <p style="color: red">{{$message}}</p>
                @enderror
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Confirm Password</label>
                <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password">
                </div>
            <div class="form-group">
                <a href="/login">Already have Account?</a>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
