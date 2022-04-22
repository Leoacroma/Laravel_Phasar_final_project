@extends('project.template')
@section('content')
    {{-- <div class="login-form">
        <h2>Two factor</h2>
        <hr  style="width: 100px; margin-left: 250px; background-color: rgb(0, 151, 252); height: 6px;">
        <form action="{{ route("two-factor.login") }}" method="POST">
            @csrf
            <div class="alert alert-warning" role="alert">
                Plese enter your authentication code.
            </div>
            <input type="code" placeholder="Password" name="code" style="width: 400px; margin-top: 50px; padding: 10px; font-size: 20px;">
            <br>
            <button type="submit" class="btn btn-primary" style=" font-size: 20px; width: 400px; margin-top: 20px;"> Enter</button>


            <div class="alert alert-warning" role="alert">
                Recovery code.
            </div>
            <input type="recovery_code" placeholder="Recovery_code" name="recovery_code" style="width: 400px; margin-top: 50px; padding: 10px; font-size: 20px;">
            <br>
            <button type="submit" class="btn btn-primary" style=" font-size: 20px; width: 400px; margin-top: 20px;"> Enter</button>
        </form>
    </div> --}}
    <div class="container">
        <form action="{{ route("two-factor.login") }}" method="POST">
            @csrf
            <div class="form-group">
              <label for="exampleInputEmail1">Two-Factor</label>
              <input type="code" class="form-control" name="code" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="please enter your code">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <div class="form-group">
                <label for="exampleInputPassword1">Recovery_code</label>
                <input type="recovery_code" class="form-control" name="recovery_code" id="exampleInputPassword1" placeholder="Recovery-code">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
@endsection
