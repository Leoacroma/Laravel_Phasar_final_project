@extends('admindashboard.template')
@section('right-content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> USER-Managment</h2>
            </div>
        </div>
    </div>
    <table class="table table-bordered mb-5">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Password</th>
            <th width="280px">Role</th>
            <th>Avatar</th>
        </tr>
        @foreach ( $users as $users)
        <tr>
            {{-- <td>{{ ++$i }}</td> --}}
            <td>{{ $users -> name }}</td>
            <td>{{ $users -> email }}</td>
            <td>{{ $users -> password }}</td>
            <td>{{ $users -> role }}</td>
            <td><img src="/uploads/avatars/{{ $users ->avatar }}" alt="" width="100px"></td>
        </tr>
        @endforeach
    </table>
@endsection