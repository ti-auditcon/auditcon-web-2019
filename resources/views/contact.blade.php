@extends('layouts.web')

@section('title')
  <title>Contacto | Auditcon - Rioseco Auditores y Consultores</title>
  <meta name="description" content="Estamos presentes en Curicó, Chile, liderando el rubro con experiencia y profesionalismo. Contáctece con nosotros a través de nuestro formulario de contacto o escribamos a nuestras redes sociales.">
@endsection
@section('content')
  <!-- Inicio CTA Experiencia -->
    <section class="experience-wrapper container-fluid background back-contacto">
      <div class="experience container">
        @if(Session::has('success'))
          <div class="alert alert-success alert-dismissable fade show has-icon">
            <button class="close" data-dismiss="alert" aria-label="Close"><i class="icon-x-circle"></i></button>
              <i class=" fa fa-check position-left .icon-x-circle"></i>  {{ Session::get('success') }}
          </div>
        @endif
        <div class="row text-center pd-tb-3 px-md-5">
          <div class="col-lg col-xl-9 mx-auto">
            <h6 class="color-white subtitle">Contacto</h6>
            <!-- <h1 class="mb-4 pb-1 pb-md-3 w-700 color-royalBlue">Está a un paso de <br>lograr sus objetivos</h1> -->
            <h1 class="mb-0 pb-0 pb-md-3 w-900 color-white">¿Tiene alguna inquietud?<br><span class="color-goldenSand">Asesórese con un experto</span></h1>
            <!-- <a href="nosotros.html" class="button button-normal">Conozca más</a> -->
          </div>
        </div>
      </div>
    </section>
    <!-- Fin CTA Experiencia -->

    <!-- Whatsapp CTA -->
    <a href="https://api.whatsapp.com/send?phone=+56932349381xxx&text=Hola,%20tengo%20una%20consulta" class="cta-whatsapp-link">
      <section class="cta-whatsapp-wrapper">
        <div class="cta-whatsapp">
          <img src="{{ asset('img/whatsapp.png') }}">
          <p>Consulte con un experto ahora</p>
        </div>
      </section>
    </a>
    <!-- Fin Whatsapp CTA -->

    <!-- Formulario de Contacto -->
    <section class="contactForm-wrapper container-fluid background-bunker color-white pb-md-4">
      <div class="contactForm container">
        <div class="row pd-tb-2">
          <div class="col-12">
            <h1 class="w-900 text-center color-goldenSand">Formulario de Contacto</h1>
          </div>
          <div class="contactForm-data">
            <p>
              <b>Números de Atención</b> <br>
              +56 (75) 2 327 995 <br>
              +56 (75) 2 315 410 <br>
              <br>
              <b>Horario de Atención</b><br>
              Lunes a Viernes <br>
              08:30 - 14:00 hrs <br>
              15:00 - 18:30 hrs <br>
              <br>
              <b>Estado 213, 0f 306</b> <br>
              Curicó, Maule, Chile <br>

            </p>
          </div>
          <div class="contactForm-form">

            {{-- Formulario de Contacto --}}
            {!! Form::open(['action' => 'MailController@sendmail', 'id' => 'captcha-form', 'class' => 'row' ]) !!}
            {{-- <form class="row" method="POST" action="/captcha" id="captcha-form"> --}}
              {{ csrf_field() }}
              <div class="col-12 col-md-6">
                <label class="form-label" for="inputName">Nombre</label>
                <input type="text" class="input-name form-control background-transparent" id="inputName" placeholder="Nombre" name="name">
                <label class="form-label" for="inputEmail1">Email</label>
                <input type="email" class="input-email form-control background-transparent" id="inputEmail1" placeholder="Correo" name="email">
              </div>
              <div class="col-12 col-md-6">
                <label class="form-label" for="inputPhone">Teléfono</label>
                <input type="tel" class="input-tel form-control background-transparent" id="inputPhone" placeholder="Teléfono" name="phone">
                <label class="form-label" for="selectOption"></label>
                <select class="select-option form-control background-transparent" id="selectOption" placeholder="Motivo de Contacto" name="select">
                  <option>Consultas Generales</option>
                  <option>Contratar servicios</option>
                  <option>Sugerencias y Reclamos</option>
                </select>
              </div>
              <div class="col-12">
                <label class="form-label" for="textareaMessage">Mensaje</label>
                <textarea class="textarea-message form-control background-transparent" id="textareaMessage" rows="5" placeholder="Su mensaje aquí" name="message"></textarea>
                <br>

                {{-- <script src='https://www.google.com/recaptcha/api.js'></script>
                <script>
                  function onSubmit(token) {
                      document.forms[0].submit();
                  }
                </script> --}}
                <button type="submit" class="g-recaptcha button button-normal button-send" data-sitekey="6LeGS1sUAAAAAJl9TCRvc0Croj3Sibj4alcuW7RV" data-callback="onSubmit">Enviar</button>
              </div>
            </form>
            {{-- {!! Form::close() !!} --}}
          </div>
        </div>
      </div>
    </section>
    <!-- Fin Formulario de Contacto -->

  <!-- Mapa -->
  <section class="map" id="map">
    <div class="mapouter">
      <div class="gmap_canvas">
        <iframe width="100%" height="100%" id="gmap_canvas" src="https://maps.google.com/maps?q=auditcon&t=&z=17&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
    </div>
  </section>
  <!-- Fin Mapa -->

@endsection

@section('scripts')
  {{-- <script>
    function initMap() {
      var uluru = {lat: -34.9857451, lng: -71.2375913};
      var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 16.3,
        center: uluru,
        styles: [
            {
                "featureType": "all",
                "elementType": "all",
                "stylers": [
                    {
                        "hue": "#e7ecf0"
                    }
                ]
            },
            {
                "featureType": "poi",
                "elementType": "all",
                "stylers": [
                    {
                        "visibility": "off"
                    }
                ]
            },
            {
                "featureType": "poi.attraction",
                "elementType": "all",
                "stylers": [
                    {
                        "visibility": "simplified"
                    }
                ]
            },
            {
                "featureType": "poi.government",
                "elementType": "all",
                "stylers": [
                    {
                        "visibility": "simplified"
                    }
                ]
            },
            {
                "featureType": "poi.medical",
                "elementType": "all",
                "stylers": [
                    {
                        "visibility": "off"
                    }
                ]
            },
            {
                "featureType": "poi.park",
                "elementType": "all",
                "stylers": [
                    {
                        "visibility": "simplified"
                    }
                ]
            },
            {
                "featureType": "road",
                "elementType": "all",
                "stylers": [
                    {
                        "saturation": -70
                    }
                ]
            },
            {
                "featureType": "transit",
                "elementType": "all",
                "stylers": [
                    {
                        "visibility": "off"
                    }
                ]
            },
            {
                "featureType": "water",
                "elementType": "all",
                "stylers": [
                    {
                        "visibility": "simplified"
                    },
                    {
                        "saturation": -60
                    }
                ]
            }
        ]
      });
      var goldStar = {
        // path: 'M278.506 40.957a17.94 17.94 0 0 0-5.262-12.672 17.903 17.903 0 0 0-12.672-5.248H48.862a17.927 17.927 0 0 0-12.673 5.248 17.927 17.927 0 0 0-5.247 12.672v193.429a17.94 17.94 0 0 0 17.92 17.933h211.71c4.76 0 9.309-1.898 12.672-5.261a17.916 17.916 0 0 0 5.262-12.672V40.956zm-126.762 44.31H107.7c-19.775 0-29.67 9.378-29.67 28.107 0 12.686 7.704 23.167 23.111 31.484l-30.703 45.357h22.637l29.46-45.72v-8.875c-17.151-3.182-25.734-10.398-25.734-21.66 0-7.718 4.02-11.583 12.058-11.583h24.59v87.699h18.296V85.266zm49.99-.14h-44.03v104.795h18.282v-87.699h24.604c8.039 0 12.058 3.866 12.058 11.597 0 11.263-8.583 18.478-25.749 21.66v8.876l29.475 45.72h22.623l-30.69-45.357c15.408-8.318 23.098-18.813 23.098-31.485 0-18.743-9.881-28.107-29.67-28.107z',
        // fillColor: 'white',
        // fillOpacity: 1,
        // scale: 10,
        // strokeColor: 'white',
        // strokeWeight: 2,
        scaledSize: new google.maps.Size(60, 60),
        url: 'img/icon-map.svg'
      };
      var marker = new google.maps.Marker({
        position: map.getCenter(),
        icon: goldStar,
        map: map
      });
    }
  </script>
  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAjpCu1Dyu9SqdFeZny0BuyIVvLMMXTj_s&callback=initMap"></script> --}}
@endsection
