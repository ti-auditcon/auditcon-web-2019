<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no, shrink-to-fit=no">
  <title>Auditcon Blog</title>
  <link rel="stylesheet" href="{{asset('/css/bootstrap.min.css')}}">
  {{-- <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,700i" rel="stylesheet"> --}}
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,600,700" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('/icomoon/style.css')}}">
  <link rel="stylesheet" href="{{asset('/css/animate.css')}}">
  <link rel="stylesheet" href="{{asset('/css/app.css')}}">
  {{-- <link rel="stylesheet" href="{{asset('/css/marquee.css')}}"> --}}
  <link rel="apple-touch-icon-precomposed" sizes="57x57" href="{{asset('/apple-touch-icon-57x57.png')}}" />
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset('/apple-touch-icon-114x114.png')}}" />
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('/apple-touch-icon-72x72.png')}}" />
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset('/apple-touch-icon-144x144.png')}}" />
  <link rel="apple-touch-icon-precomposed" sizes="60x60" href="{{asset('/apple-touch-icon-60x60.png')}}" />
  <link rel="apple-touch-icon-precomposed" sizes="120x120" href="{{asset('/apple-touch-icon-120x120.png')}}" />
  <link rel="apple-touch-icon-precomposed" sizes="76x76" href="{{asset('/apple-touch-icon-76x76.png')}}" />
  <link rel="apple-touch-icon-precomposed" sizes="152x152" href="{{asset('/apple-touch-icon-152x152.png')}}" />
  <link rel="icon" type="image/png" href="{{asset('/favicon-196x196.png')}}" sizes="196x196" />
  <link rel="icon" type="image/png" href="{{asset('/favicon-96x96.png')}}" sizes="96x96" />
  <link rel="icon" type="image/png" href="{{asset('/favicon-32x32.png')}}" sizes="32x32" />
  <link rel="icon" type="image/png" href="{{asset('/favicon-16x16.png')}}" sizes="16x16" />
  <link rel="icon" type="image/png" href="{{asset('/favicon-128.png')}}" sizes="128x128" />
  <meta name="application-name" content="Auditcon"/>
  <meta name="msapplication-TileColor" content="#FFFFFF" />
  <meta name="msapplication-TileImage" content="{{asset('/mstile-144x144.png')}}" />
  <meta name="msapplication-square70x70logo" content="{{asset('/mstile-70x70.png')}}" />
  <meta name="msapplication-square150x150logo" content="{{asset('/mstile-150x150.png')}}" />
  <meta name="msapplication-wide310x150logo" content="{{asset('/mstile-310x150.png')}}" />
  <meta name="msapplication-square310x310logo" content="{{asset('/mstile-310x310.png')}}" />
  @yield('recaptcha')
</head>
<body class="blog">
  
  @include('layouts.blog-header')

  @yield('content')

  @include('layouts.blog-footer')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="{{asset('/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('/js/headroom.min.js')}}"></script>
<script src="{{asset('/js/jQuery.headroom.js')}}"></script>
<script src="{{asset('/js/app.js')}}"></script>
{{-- <script src="{{asset('/js/mindicador.js')}}"></script> --}}
<script src="{{asset('/js/jquery.simpleslider.min.js')}}"></script>
@yield('scripts')
</body>
</html>
