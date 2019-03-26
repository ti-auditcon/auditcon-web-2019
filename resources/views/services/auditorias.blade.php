@extends('layouts.web')

@section('title')
  <title>Servicios de Auditoría | Auditcon - Rioseco Auditores y Consultores</title>
  <meta name="description" content="Auditorías tributarias y financieras de manera integral, balance tributario, impuestos, estados financieros, activos fijos, estados de resultado, a cuentas específicas anuales, entre otras.">
@endsection
@section('content')
  <!-- Inicio Present -->
    <section class="present-wrapper container-fluid background back-s-auditorias">
      <div class="present-service container">
        <div class="row pt-5 pb-5 pb-md-4">
          <div class="present-headline col-12">
            <h1 data-icon="&#xe904;" class="color-white">Auditorías</h1>
            {{-- <h3 class="color-white">Possimus magnam error vitae blanditiis dignissimos, accusantium nobis quis commodi labore incidunt!</h3> --}}
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
            <h1 class="w-900 color-goldenSand">Realizamos acciones de soporte contable y tributario, para la totalidad de acciones entre el contribuyente y el Servicio de Impuestos Internos.</h1>
            <p class="color-white">Realizamos acciones de soporte contable y tributario, para la totalidad de acciones entre el contribuyente y el Servicio de Impuestos Internos.</p>
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
        <!-- Auditorias Tributarias -->
        <div class="row subservices-item-wrapper pd-tb-2">
          <div class="subservices-title">
            <h4 class="subtitle-small">
              Tributarias
            </h4>
          </div>
          <div class="subservices-item">
            <div class="item-header">
              <h3 class="color-royalBlue w-400" data-icon="&#xf0da;">Auditoria integral a los impuestos</h3>
            </div>
          </div>
          <div class="subservices-item">
            <div class="item-header">
              <h3 class="color-royalBlue w-400" data-icon="&#xf0da;">Auditoria específicas IVA, renta, otras</h3>
            </div>
          </div>
          <div class="subservices-item">
            <div class="item-header">
              <h3 class="color-royalBlue w-400" data-icon="&#xf0da;">Auditoria al balance tributario</h3>
            </div>
          </div>
          <div class="subservices-item">
            <div class="item-header">
              <h3 class="color-royalBlue w-400" data-icon="&#xf0da;">Efectos tributarios en la determinación de diferencias de impuestos</h3>
            </div>
          </div>
        </div>
        <!-- Auditorias Financieras -->
        <div class="row subservices-item-wrapper pd-tb-2">
          <div class="subservices-title">
            <h4 class="subtitle-small">
              Financieras
            </h4>
          </div>
          <div class="subservices-item">
            <div class="item-header">
              <h3 class="color-royalBlue w-400" data-icon="&#xf0da;">Auditoría a los estados financieros</h3>
            </div>
          </div>
          <div class="subservices-item">
            <div class="item-header">
              <h3 class="color-royalBlue w-400" data-icon="&#xf0da;">Auditoría a los estados de resulados</h3>
            </div>
          </div>
          <div class="subservices-item">
            <div class="item-header">
              <h3 class="color-royalBlue w-400" data-icon="&#xf0da;">Auditoría a los estados de resulados</h3>
            </div>
          </div>
          <div class="subservices-item">
            <div class="item-header">
              <h3 class="color-royalBlue w-400" data-icon="&#xf0da;">Auditoría bajo las normas de la SUS IFRS</h3>
            </div>
          </div>
          <div class="subservices-item">
            <div class="item-header">
              <h3 class="color-royalBlue w-400" data-icon="&#xf0da;">Auditoria a los activos fijos</h3>
            </div>
          </div>
          <div class="subservices-item">
            <div class="item-header">
              <h3 class="color-royalBlue w-400" data-icon="&#xf0da;">Auditoria a cuentas específicas anuales y caja</h3>
            </div>
          </div>
          <div class="subservices-item">
            <div class="item-header">
              <h3 class="color-royalBlue w-400" data-icon="&#xf0da;">Auditoría proveedores y clientes</h3>
            </div>
          </div>
          <div class="subservices-item">
            <div class="item-header">
              <h3 class="color-royalBlue w-400" data-icon="&#xf0da;">Informe auditoria bajo las normas FECU</h3>
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
