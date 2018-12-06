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
    <form class="ibox-body" id="login-form" method="POST" action="{{ route('login') }}" novalidate="novalidate">
        @csrf
        <div class="form-group mb-4">
            <input id="email" class="form-control form-control-line form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" type="email" name="email" placeholder="Email" value="{{ old('email') }}" required autofocus>
        </div>
        <div class="form-group mb-4">
            <input id="password" class="form-control form-control-line form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" type="password" name="password" placeholder="Contraseña" required>
        </div>
        <div class="mb-5 remember-zone">
            <span>
                <label class="ui-switch switch-icon mr-2 mb-0">
                    <input type="checkbox" checked="" name="remember" {{ old('remember') ? 'checked' : '' }}>
                    <span></span>
                    <p class="text-remember">Recordar datos</p>
                </label>
            </span>
        </div>
        <div class="text-center mb-4">
            <button class="btn btn-primary btn-rounded btn-block" type="submit">Entrar</button>
        </div>
        <div class="text-center">
          <a class="link-primary link-small" href="{{ route('password.request') }}">Recuperar contraseña</a>
        </div>
    </form>
  </div>
  <!-- BEGIN PAGA BACKDROPS-->
  <div class="sidenav-backdrop backdrop"></div>

@endsection
