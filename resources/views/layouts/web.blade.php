<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no, shrink-to-fit=no">
    @yield('title')

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-KJFR9P3');</script>
    <!-- End Google Tag Manager -->

    <!-- Hotjar Tracking Code for www.auditcon.cl -->
    <script>
        (function(h,o,t,j,a,r){
            h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
            h._hjSettings={hjid:968636,hjsv:6};
            a=o.getElementsByTagName('head')[0];
            r=o.createElement('script');r.async=1;
            r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
            a.appendChild(r);
        })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
    </script>
    <link rel="stylesheet" href="{{asset('/css/bootstrap.min.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('/icomoon/style.min.css')}}">
    <link rel="stylesheet" href="{{asset('/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('/css/app.min.css')}}">
    <link rel="stylesheet" href="{{asset('/css/marquee.min.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
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
    <!-- Start of Async Drift Code -->
      <script>
      "use strict";

      !function() {
        var t = window.driftt = window.drift = window.driftt || [];
        if (!t.init) {
          if (t.invoked) return void (window.console && console.error && console.error("Drift snippet included twice."));
          t.invoked = !0, t.methods = [ "identify", "config", "track", "reset", "debug", "show", "ping", "page", "hide", "off", "on" ],
          t.factory = function(e) {
            return function() {
              var n = Array.prototype.slice.call(arguments);
              return n.unshift(e), t.push(n), t;
            };
          }, t.methods.forEach(function(e) {
            t[e] = t.factory(e);
          }), t.load = function(t) {
            var e = 3e5, n = Math.ceil(new Date() / e) * e, o = document.createElement("script");
            o.type = "text/javascript", o.async = !0, o.crossorigin = "anonymous", o.src = "https://js.driftt.com/include/" + n + "/" + t + ".js";
            var i = document.getElementsByTagName("script")[0];
            i.parentNode.insertBefore(o, i);
          };
        }
      }();
      drift.SNIPPET_VERSION = '0.3.1';
      drift.load('9hrhf4wre79v');
      </script>
    <!-- End of Async Drift Code -->
  </head>
  <body>
    <div class="loading-box">
      <div class="loading-inner">
        <img src="{{asset('/img/logo.svg')}}">
      </div>
    </div>
    @include('layouts.header')

    @yield('content')

    @include('layouts.footer')

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KJFR9P3"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
    <script src="{{asset('/js/bootstrap.bundle.min.js')}}"></script>

    <script src="{{asset('/js/headroom.min.js')}}"></script>
    <script src="{{asset('/js/jQuery.headroom.js')}}"></script>
    <script src="{{asset('/js/mindicador.js')}}"></script>
    <script src="{{asset('/js/jquery.simpleslider.min.js')}}"></script>
    {{-- <script src="{{asset('/js/app.js')}}"></script> --}}

    <script src="{{asset('/js/headroom.min.js')}}" async></script>
    <script src="{{asset('/js/jQuery.headroom.js')}}" defer></script>
    <script src="{{asset('/js/app.min.js')}}" defer></script>
    <script src="{{asset('/js/mindicador.js')}}" defer></script>
    <script src="{{asset('/js/jquery.simpleslider.min.js')}}" async></script>

    @yield('scripts')
  </body>
</html>
