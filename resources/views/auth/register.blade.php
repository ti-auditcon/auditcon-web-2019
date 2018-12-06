@extends('layouts.panel')

@section('content')
  <div class="cover"></div>
  <div class="ibox login-content">
    <div class="text-center">
      <span class="auth-head-icon"><i class="la la-user"></i></span>
    </div>
    <div class="logo container justify-content-center text-center">
      <img class="intranetLogo" src="{{asset('img/logo-blog.svg')}}" alt="Auditcon">
    </div>
    <form class="ibox-body" id="login-form" method="POST" action="{{ route('register') }}">
        @csrf

        <div class="form-group mb-4">
            <input id="name" class="form-control form-control-line form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" placeholder="Nombre" value="{{ old('name') }}" required autofocus>
        </div>
        <div class="form-group mb-4">
            <input id="email" class="form-control form-control-line form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" type="email" placeholder="Email" name="email" value="{{ old('email') }}" required>
        </div>
        <div class="form-group mb-4">
            <input id="password" class="form-control form-control-line form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" type="password" name="password" placeholder="Contraseña" required>
            @if ($errors->has('password'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
        </div>
        <div class="form-group mb-5">
            <input id="password-confirm" class="form-control form-control-line form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" type="password" name="password_confirmation" placeholder="Confirmar contraseña" required>
        </div>
        <div class="text-center mb-4">
            <button class="btn btn-primary btn-rounded btn-block" type="submit">Registrarse</button>
        </div>
    </form>
  </div>
  <!-- BEGIN PAGA BACKDROPS-->
  <div class="sidenav-backdrop backdrop"></div>
@endsection
