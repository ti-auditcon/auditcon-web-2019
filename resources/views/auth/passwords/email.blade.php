@extends('layouts.panel')

@section('content')
  <div class="cover"></div>
  <div class="ibox login-content forgot-pass">
    <div class="text-center">
        <span class="auth-head-icon"><i class="la la-key"></i></span>
    </div>
    <form class="ibox-body pt-0" id="forgot-form" action="{{ route('password.email') }}" method="POST">
        @csrf

        <h4 class="font-strong text-center mb-5 mt-4">Recuperar Contraseña</h4>
        <p class="mb-4">Ingresa tu correo para crear una nueva contraseña</p>
        <div class="form-group mb-4">
            <input class="form-control form-control-line form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" type="text" name="email" placeholder="Email" value="{{ old('email') }}" required>
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-primary btn-rounded btn-block btn-air">Recuperar</button>
        </div>
    </form>
  </div>
  <div class="sidenav-backdrop backdrop"></div>
@endsection
