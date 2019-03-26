@extends('layouts.web')

@section('title')
  <title>Asesoría Contable | Auditcon - Rioseco Auditores y Consultores</title>
  <meta name="description" content="Asesorías contables, contabilidad de costos, elaboración de planes de cuentas, estados financieros, balances y estado-resultado, mantención de registros contables, análisis de cuentas específicas, conciliaciones bancarias, contabilidad tributaria, balance 8 columnas, implementación de normas financieras internacionales IFRS, preparación de balances y estados financieros, entre otros">
@endsection
@section('content')
  <!-- Inicio Present -->
    <section class="present-wrapper container-fluid background back-s-contable">
      <div class="present-service container">
        <div class="row pt-5 pb-5 pb-md-4">
          <div class="present-headline col-12">
            <h1 data-icon="&#xe903;" class="color-white">Asesoría Contable</h1>
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
            <h1 class="w-900 color-goldenSand">Recopilamos y verificamos la información contable, mensualmente, en base a objetivos fijados en conjunto con nuestros clientes.</h1>
            <p class="color-white">Recopilamos y verificamos la información contable, mensualmente, en base a objetivos fijados en conjunto con nuestros clientes.</p>
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

    {{-- <!-- Subservices single -->
    <section class="subservices-wrapper container-fluid background-white">
      <div class="container subservices">
        <!-- Contable -->
        <div class="row subservices-item-wrapper pd-tb-2">
          <h4 class="space">
            <!-- Justo y Necesario -->
          </h4>
          <div class="subservices-item">
            <div class="item-header">
              <h3 class="color-royalBlue w-400" data-icon="&#xf0da;">Contablidad Externa - Outsourcing</h3>
            </div>
          </div>
          <div class="subservices-item">
            <div class="item-header">
              <h3 class="color-royalBlue w-400" data-icon="&#xf0da;">Elaboración de planes de cuentas</h3>
            </div>
          </div>
          <div class="subservices-item">
            <div class="item-header">
              <h3 class="color-royalBlue w-400" data-icon="&#xf0da;">Contabilidad de Costos</h3>
            </div>
          </div>
          <div class="subservices-item">
            <div class="item-header">
              <h3 class="color-royalBlue w-400" data-icon="&#xf0da;">Implementación de estructuras contables</h3>
            </div>
          </div>
          <div class="subservices-item">
            <div class="item-header">
              <h3 class="color-royalBlue w-400" data-icon="&#xf0da;">Elaboración de estados Financieros, Balances y Estado-Resultado</h3>
            </div>
          </div>
          <div class="subservices-item">
            <div class="item-header">
              <h3 class="color-royalBlue w-400" data-icon="&#xf0da;">Mantención de Registros Contables</h3>
            </div>
          </div>
          <div class="subservices-item">
            <div class="item-header">
              <h3 class="color-royalBlue w-400" data-icon="&#xf0da;">Análisis de cuentas específicas</h3>
            </div>
          </div>
          <div class="subservices-item">
            <div class="item-header">
              <h3 class="color-royalBlue w-400" data-icon="&#xf0da;">Conciliaciones Bancarias</h3>
            </div>
          </div>
          <div class="subservices-item">
            <div class="item-header">
              <h3 class="color-royalBlue w-400" data-icon="&#xf0da;">Asesoria Contable Permanente</h3>
            </div>
          </div>
          <div class="subservices-item">
            <div class="item-header">
              <h3 class="color-royalBlue w-400" data-icon="&#xf0da;">Contabilidad tributaria, balance 8 columnas</h3>
            </div>
          </div>
          <div class="subservices-item">
            <div class="item-header">
              <h3 class="color-royalBlue w-400" data-icon="&#xf0da;">Mantención contable de activos fijos</h3>
            </div>
          </div>
          <div class="subservices-item">
            <div class="item-header">
              <h3 class="color-royalBlue w-400" data-icon="&#xf0da;">Implementación de normas internacionales financieras IFRS</h3>
            </div>
          </div>
          <div class="subservices-item">
            <div class="item-header">
              <h3 class="color-royalBlue w-400" data-icon="&#xf0da;">Cálculo de impuestos diferidos</h3>
            </div>
          </div>
          <div class="subservices-item">
            <div class="item-header">
              <h3 class="color-royalBlue w-400" data-icon="&#xf0da;">Preparación de balances y estados Financieros</h3>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Subservices single --> --}}

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
