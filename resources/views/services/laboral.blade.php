@extends('layouts.web')

@section('title')
  <title>Asesoría Laboral | Auditcon - Rioseco Auditores y Consultores</title>
  <meta name="description" content="Asesoría en confección de contratos individuales y colectivos, proceso de cálculo de sueldos y remuneraciones, pago de leyes sociales, confección de reglamentos, control de vacaciones y permisos personales, representación y defensa ante la inspección del trabajo, asistencia laboral telefónica, asesoría de negociación colectiva, entre otras.">
@endsection
@section('content')
  <!-- Inicio Present -->
    <section class="present-wrapper container-fluid background back-s-laboral">
      <div class="present-service container">
        <div class="row pt-5 pb-5 pb-md-4">
          <div class="present-headline col-12">
            <h1 data-icon="&#xe909;" class="color-white">Asesoría Laboral</h1>
          </div>
        </div>
      </div>
    </section>
    <!-- Fin Present -->

    <!-- Inicio Explicación -->
    <section class="explicacion-wrapper container-fluid background-royalBlueUltraDark">
      <div class="container explicacion pd-tb-2">
        <div class="row">
          <div class="img col-md-6" style="background-image: url('{{ asset('img/backs/exp-1.jpg')}}');"></div>
          <div class="data col-md-6 px-0">
            <h1 class="w-900 color-goldenSand">Ayudamos y orientamos a empresas y personas naturales, ante eventuales situaciones contractuales y tramitación del rubro laboral.</h1>
            <p class="color-white">Ayudamos y orientamos a empresas y personas naturales, ante eventuales situaciones contractuales y tramitación del rubro laboral.</p>
          </div>
        </div>
      </div>
    </section>
    <!-- Fin Explicación -->

    <!-- Inicio Proceso -->
    <section class="proceso-wrapper container-fluid">
      <div class="proceso container pd-tb-2">
        <h6 class="color-bunker text-center subtitle">Nuestro Proceso</h6>
        <h1 class="text-center w-900 color-royalBlue">¿Cómo lo hacemos?</h1>
        <div class="row etapas">

          <div class="etapa contenido">
            <img class="" src="{{ asset('img/how-icons/1.png') }}">
            <h5 class="w-900 color-royalBlueUltraDark text-center">Nombre etapa</h5>
            <p class="text-center">Pequeña explicación de una o dos frases.</p>
          </div>
          <div class="etapa flecha">
            <img src="{{ asset('img/arrow.png') }}">
          </div>

          <div class="etapa contenido">
            <img class="" src="{{ asset('img/how-icons/1.png') }}">
            <h5 class="w-900 color-royalBlueUltraDark text-center">Nombre etapa</h5>
            <p class="text-center">Pequeña explicación de una o dos frases.</p>
          </div>
          <div class="etapa flecha">
            <img src="{{ asset('img/arrow.png') }}">
          </div>

          <div class="etapa contenido">
            <img class="" src="{{ asset('img/how-icons/1.png') }}">
            <h5 class="w-900 color-royalBlueUltraDark text-center">Nombre etapa</h5>
            <p class="text-center">Pequeña explicación de una o dos frases.</p>
          </div>
          <div class="etapa flecha">
            <img src="{{ asset('img/arrow.png') }}">
          </div>

          <div class="etapa contenido">
            <img class="" src="{{ asset('img/how-icons/1.png') }}">
            <h5 class="w-900 color-royalBlueUltraDark text-center">Nombre etapa</h5>
            <p class="text-center">Pequeña explicación de una o dos frases.</p>
          </div>

        </div>
      </div>
    </section>
    <!-- Fin Proceso -->

    <!-- Inicio Beneficios -->
    <section class="beneficios-wrapper container-fluid background-royalBlueDark">
      <div class="beneficios container pd-tb-2">
        <h6 class="color-white text-center subtitle">Beneficios</h6>
        <h1 class="text-center w-900 color-goldenSand">Razones para contar con nosotros</h1>
        <div class="items row">
          <li class="item">Sed semper magna odio et varius urna euismod non</li>
          <li class="item">Donec et ex hendrerit euismod purus nec</li>
          <li class="item">Sed semper magna odio</li>
          <li class="item">Praesent blandit, risus vel posuere efficitur</li>
          <li class="item">Morbi rhoncus nulla nec tristique luctus</li>
          <li class="item">Proin nec massa urna</li>
        </div>
      </div>
    </section>
    <!-- Fin Beneficios -->

    <!-- Subservices single -->
    {{-- <section class="subservices-wrapper container-fluid background-white">
      <div class="container subservices">
        <!-- Laboral/Everything -->
        <div class="row subservices-item-wrapper pd-tb-2">
          <div class="subservices-title">
            <h4 class="space">
              <!-- Justo y Necesario -->
            </h4>
          </div>
          <div class="subservices-item">
            <div class="item-header">
              <h3 class="color-royalBlue w-400" data-icon="&#xf0da;">Confección de contratos individuales y colectivos</h3>
            </div>
          </div>
          <div class="subservices-item">
            <div class="item-header">
              <h3 class="color-royalBlue w-400" data-icon="&#xf0da;">Proceso de calculo de sueldos y remuneraciones</h3>
            </div>
          </div>
          <div class="subservices-item">
            <div class="item-header">
              <h3 class="color-royalBlue w-400" data-icon="&#xf0da;">Proceso de calculo de leyes sociales</h3>
            </div>
          </div>
          <div class="subservices-item">
            <div class="item-header">
              <h3 class="color-royalBlue w-400" data-icon="&#xf0da;">Pago de leyes sociales (PREVIRED)</h3>
            </div>
          </div>
          <div class="subservices-item">
            <div class="item-header">
              <h3 class="color-royalBlue w-400" data-icon="&#xf0da;">Desvinculaciónes y elaboraciones de finiquito</h3>
            </div>
          </div>
          <div class="subservices-item">
            <div class="item-header">
              <h3 class="color-royalBlue w-400" data-icon="&#xf0da;">Confección de reglamentos internos</h3>
            </div>
          </div>
          <div class="subservices-item">
            <div class="item-header">
              <h3 class="color-royalBlue w-400" data-icon="&#xf0da;">Control de vacaciones y permisos personales</h3>
            </div>
          </div>
          <div class="subservices-item">
            <div class="item-header">
              <h3 class="color-royalBlue w-400" data-icon="&#xf0da;">Representacón, asistencia y defensa ante la inspección del trabajo</h3>
            </div>
          </div>
          <div class="subservices-item">
            <div class="item-header">
              <h3 class="color-royalBlue w-400" data-icon="&#xf0da;">Asesoría negociación colectiva</h3>
            </div>
          </div>
          <div class="subservices-item">
            <div class="item-header">
              <h3 class="color-royalBlue w-400" data-icon="&#xf0da;">Asistencia laboral telefónica</h3>
            </div>
          </div>
        </div>
      </div>
    </section> --}}
    <!-- Subservices single -->

    <!-- Inicio CTA Experiencia -->
    <section class="experience-wrapper container-fluid background back-callb-contacto">
      <div class="experience container">
        <div class="row text-center pd-tb-4 px-md-5">
          <div class="col-lg col-xl-9 mx-auto">
            <h6 class="color-white subtitle">Contacto</h6>
            <h1 class="mb-4 p-0 pb-md-1 mb-0 w-900 color-white"><span class="color-goldenSand">Confianza y tranquilidad</span>, para que invierta el tiempo en su negocio</h1>
            {{-- <a href="{{url('/contacto')}}" class="button button-normal button-hero">Contáctanos</a><br> --}}<a href="{{url('/contacto')}}" class="button-arrow"><img src="{{ asset('img/arrow-button.png') }}"><p>Contáctenos</p></a>
          </div>
        </div>
      </div>
    </section>
    <!-- Fin CTA Experiencia -->
@endsection
