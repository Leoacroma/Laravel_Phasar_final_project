@extends('project.template')
@section('content')

<div class="container" style="margin-top: 40px">
    <div class="card">
        <div class="card-header">
            More option
        </div>
        <div class="card-body">
            <h5 class="card-title">Two Factor Authentication</h5>
            <form action=" user/two-factor-authentication" method="POST">
                @csrf
                @if (session('status') == 'two-factor-authentication-enabled')
                    <div class="alert alert-success" role="alert">
                        Two factor authentication has been enabled.
                    </div>
                @else
                    <div class="alert alert-warning" role="alert">
                        Two factor authentication has been Disable.
                    </div>
                @endif
                @if (auth()->user()->two_factor_secret)
                    @method('DELETE')

                    <div style="margin-bottom: 20px;">
                        {!! auth()->user()->twoFactorQrCodeSvg() !!}
                    </div>
                    <div>
                        <h3>Recovery code</h3>
                        <ul>@foreach ( json_decode(decrypt(auth()->user()->two_factor_recovery_codes)) as $code)
                            <li>{{ $code }}</li>
                             @endforeach
                        </ul>
                    </div>
                    <button class="btn btn-danger">Disable</button>
                @else
                    <button class="btn btn-primary">Enable</button>
                @endif
            </form>
        </div>
    </div>

</div>
@endsection