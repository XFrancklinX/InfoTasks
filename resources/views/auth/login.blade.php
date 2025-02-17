@extends('layouts.default')

@section('content')
<div class="container">
    @if(session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    <form action="{{ route('login') }}" method="get">
        @csrf
        <div class="row justify-content-md-center">
            <div class="col-xl-4 col-lg-5 col-md-6 col-sm-12">
                <div class="login-screen">
                    <div class="login-box">
                        <div class="form-group mb-2 rounded">
                            <input type="text" class="form-control" id="user" name="user" placeholder="Usuario" />
                        </div>
                        <div class="form-group mb-2 rounded">
                            <input type="password" class="form-control" id="pass" name="pass" placeholder="Contraseña" />
                        </div>
                        <div class="actions">
                            <button type="submit" class="btn btn-info loginSys">Login</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
