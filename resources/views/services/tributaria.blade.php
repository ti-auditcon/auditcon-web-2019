@extends('layouts.web')

@section('title')
  <title>Asesoría Tributaria | Auditcon - Rioseco Auditores y Consultores</title>
  <meta name="description" content="Asesoría tributaria que abarca areas de impuestos, facturación electrónica, declaraciones, franquicias tributarias, tramitación de licencias, administración de registros electrónicos, entre otros.">
@endsection
@section('content')
  <!-- Inicio Present -->
    <section class="present-wrapper container-fluid background back-s-tributaria">
      <div class="present-service container">
        <div class="row pt-5 pb-5 pb-md-4">
          <div class="present-headline col-12">
            <h1 data-icon="&#xe90c;" class="color-white">Asesoría Tributaria</h1>
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
            <h1 class="w-900 color-goldenSand">Evaluamos el cumplimiento de las formalidades tributarias de su empresa, y la representamos y orientamos ante los organismos reguladores correspondientes.</h1>
            <p class="color-white">Evaluamos el cumplimiento de las formalidades tributarias de su empresa, y la representamos y orientamos ante los organismos reguladores correspondientes.</p>
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
            <h5 class="w-900 color-royalBlueUltraDark text-center">Diagnostico</h5>
            <p class="text-center">Evaluamos su Salud Tributaria</p>
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
        <!-- Impuestos -->
        <div class="row subservices-item-wrapper pd-tb-2">
          <div class="subservices-title">
            <h4 class="subtitle-small">Impuestos</h4>
          </div>
          <div class="subservices-item">
            <div class="item-header">
              <h3 class="color-royalBlue w-400" data-icon="&#xf0da;">Declaración mensual de impuesto IVA, PPM, impuesto único y otros</h3>
            </div>
          </div>
          <div class="subservices-item">
            <div class="item-header">
              <h3 class="color-royalBlue w-400" data-icon="&#xf0da;">Verificación registro electrónico</h3>
            </div>
          </div>
          <div class="subservices-item">
            <div class="item-header">
              <h3 class="color-royalBlue w-400" data-icon="&#xf0da;">Franquicias tributarias en declaraciones mensuales de impuestos</h3>
            </div>
          </div>
          <div class="subservices-item">
            <div class="item-header">
              <h3 class="color-royalBlue w-400" data-icon="&#xf0da;">Declaraciones de impuestos a la renta Empresas</h3>
            </div>
          </div>
          <div class="subservices-item">
            <div class="item-header">
              <h3 class="color-royalBlue w-400" data-icon="&#xf0da;">Declaración de impuestos a la renta Empresas</h3>
            </div>
          </div>
          <div class="subservices-item">
            <div class="item-header">
              <h3 class="color-royalBlue w-400" data-icon="&#xf0da;">Declaración de impuestos adicional (F/50)</h3>
            </div>
          </div>
          <div class="subservices-item">
            <div class="item-header">
              <h3 class="color-royalBlue w-400" data-icon="&#xf0da;">Declaraciones juradas complementarias<h3>
            </div>
          </div>
          <div class="subservices-item">
            <div class="item-header">
              <h3 class="color-royalBlue w-400">Determinación RAI, REX, FUT, RAP, SAC<h3>
            </div>
          </div>
        </div>

        <!-- Facturación Electrónica -->
        <div class="row subservices-item-wrapper pd-tb-2">
          <div class="subservices-title">
            <h4 class="subtitle-small">Facturación Electrónica</h4>
          </div>
          <div class="subservices-item">
            <div class="item-header">
              <h3 class="color-royalBlue w-400" data-icon="&#xf0da;">Tramitación de licencias de facturación electrónica</h3>
            </div>
          </div>
          <div class="subservices-item">
            <div class="item-header">
              <h3 class="color-royalBlue w-400" data-icon="&#xf0da;">Administración de registros electrónicos</h3>
            </div>
          </div>
          <div class="subservices-item">
            <div class="item-header">
              <h3 class="color-royalBlue w-400" data-icon="&#xf0da;">Facturación electrónica</h3>
            </div>
          </div>
        </div>

        <!-- Otros servicios tributarios -->
        <div class="row subservices-item-wrapper pd-tb-2">
          <div class="subservices-title">
            <h4 class="subtitle-small">Otros servicios tributarios</h4>
          </div>
          <div class="subservices-item">
            <div class="item-header">
              <h3 class="color-royalBlue w-400" data-icon="&#xf0da;">Estudio regimenes tributarios</h3>
            </div>
          </div>
          <div class="subservices-item">
            <div class="item-header">
              <h3 class="color-royalBlue w-400" data-icon="&#xf0da;">Estudio reorganización empresarial</h3>
            </div>
          </div>
          <div class="subservices-item">
            <div class="item-header">
              <h3 class="color-royalBlue w-400" data-icon="&#xf0da;">Diagnóstico situación tributaria</h3>
            </div>
          </div>
          <div class="subservices-item">
            <div class="item-header">
              <h3 class="color-royalBlue w-400" data-icon="&#xf0da;">Regímenes especiales de tributación (IVA Construcción, 14 TER, etc)</h3>
            </div>
          </div>
          <div class="subservices-item">
            <div class="item-header">
              <h3 class="color-royalBlue w-400" data-icon="&#xf0da;">Solicitud de devolución de IVA (Exportaciones, activo fijo 27 BIS)</h3>
            </div>
          </div>
          <div class="subservices-item">
            <div class="item-header">
              <h3 class="color-royalBlue w-400" data-icon="&#xf0da;">Solicitud de Condonaciones de multas e intereses</h3>
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
