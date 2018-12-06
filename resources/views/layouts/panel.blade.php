<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no, shrink-to-fit=no">
  <title>Auditcon Blog</title>
  <link rel="stylesheet" href="{{asset('/css/bootstrap.min.css')}}">
  <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,700i" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('/icomoon/style.css')}}">
  <link rel="stylesheet" href="{{asset('/css/animate.css')}}">
  <link rel="stylesheet" href="{{asset('/blog-asset/css/main.min.css')}}">
  <link href="{{asset('/blog-asset/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet" />
  {{-- <link href="{{asset('/blog-asset/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" /> --}}
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
  <link href="{{asset('/blog-asset/vendors/line-awesome/css/line-awesome.min.css')}}" rel="stylesheet" />
  <link href="{{asset('/blog-asset/vendors/themify-icons/css/themify-icons.css')}}" rel="stylesheet" />
  <link href="{{asset('/blog-asset/vendors/animate.css/animate.min.css')}}" rel="stylesheet" />
  <link href="{{asset('/blog-asset/vendors/toastr/toastr.min.css')}}" rel="stylesheet" />
  <link href="{{asset('/blog-asset/vendors/bootstrap-select/dist/css/bootstrap-select.min.css')}}" rel="stylesheet" />
  <!-- PLUGINS STYLES-->
  <link href="{{asset('/blog-asset/vendors/fullcalendar/dist/fullcalendar.min.css')}}" rel="stylesheet" />
  <link href="{{asset('/blog-asset/vendors/fullcalendar/dist/fullcalendar.print.min.css')}}" rel="stylesheet" media="print" />
  <link href="{{asset('/blog-asset/vendors/smalot-bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css')}}" rel="stylesheet" />
  <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet"/>
  <link rel="stylesheet" href="https://rawgit.com/enyo/dropzone/master/dist/dropzone.css" />
  <link href="{{asset('/css/sweetalert.css')}}" rel="stylesheet"/>
  <link href="{{asset('/css/datatables.min.css')}}" rel="stylesheet"/>
  <!-- THEME STYLES-->
  <link href="{{asset('/blog-asset/css/main.css')}}" rel="stylesheet" />
  <link href="{{asset('/blog-asset/css/app.css')}}" rel="stylesheet" />
  {{-- Favicons --}}
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
</head>
@guest
  <body class="backgroundLogin">
    @yield('content')
  </body>
@endguest
@auth
  <body>
    @include('layouts.panel-header')
    <main>

      @yield('content')

    </main>{{-- .page-wrapper --}}
    @include('layouts.panel-footer')

    @yield('scripts')
  </body>
@endauth
</html>
