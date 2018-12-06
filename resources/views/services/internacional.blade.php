@extends('layouts.web')

@section('title')
  <title>Asesoría en Inversión Extranjera | Auditcon - Rioseco Auditores</title>
  <meta name="description" content="Asesoramiento a inversores extranjeros para el ingreso de capital y desarrollo de negocios en nuestro país. Abarcando legalización de sociedades extranjeras, obtención de RUT, obtención de domicilio de las actividades establecidas por el SII, convenios de doble tributación con otros países, representación en Chile, Inicio de actividades, contabilidad, tributación y asesoría laboral">
@endsection
@section('content')
  <!-- Inicio Present -->
    <section class="present-wrapper container-fluid background back-s-internacional">
      <div class="present-service container">
        <div class="row pt-5 pb-5 pb-md-4">
          <div class="present-headline col-12">
            <h1 data-icon="&#xe907;" class="color-white">Asesoría en<br>Inversión Extranjera</h1>
            <h3 class="color-white">Possimus magnam error vitae blanditiis dignissimos, accusantium nobis quis commodi labore incidunt!</h3>
          </div>
        </div>
      </div>
    </section>
    <!-- Fin Present -->

    <!-- Subservices single -->
    <section class="subservices-wrapper container-fluid background-white">
      <div class="container subservices">
        <!-- Internacional/Everything -->
        <div class="row subservices-item-wrapper pd-tb-2">
          <div class="subservices-title">
            <h4 class="space">
              <!-- Justo y Necesario -->
            </h4>
          </div>
          <div class="subservices-item">
            <div class="item-header">
              <h3 class="color-royalBlue w-400" data-icon="&#xf0da;">Legalización en Chile de sociedades constituidas en el extranjero</h3>
            </div>
          </div>
          <div class="subservices-item">
            <div class="item-header">
              <h3 class="color-royalBlue w-400" data-icon="&#xf0da;">Representación para invertir en Chile</h3>
            </div>
          </div>
          <div class="subservices-item">
            <div class="item-header">
              <h3 class="color-royalBlue w-400" data-icon="&#xf0da;">Obtención de RUT</h3>
            </div>
          </div>
          <div class="subservices-item">
            <div class="item-header">
              <h3 class="color-royalBlue w-400" data-icon="&#xf0da;">Inicio de Actividades</h3>
            </div>
          </div>
          <div class="subservices-item">
            <div class="item-header">
              <h3 class="color-royalBlue w-400" data-icon="&#xf0da;">Domicilio de las actividades establecidas en el SII</h3>
            </div>
          </div>
          <div class="subservices-item">
            <div class="item-header">
              <h3 class="color-royalBlue w-400" data-icon="&#xf0da;">Impuestos que afectan a las catividades de inversión Extranjera</h3>
            </div>
          </div>
          <div class="subservices-item">
            <div class="item-header">
              <h3 class="color-royalBlue w-400" data-icon="&#xf0da;">Convenios de doble tributación con otros países</h3>
            </div>
          </div>
          <div class="subservices-item">
            <div class="item-header">
              <h3 class="color-royalBlue w-400" data-icon="&#xf0da;">Contabilidad, tributación, laboral</h3>
            </div>
          </div>
          <br><br><br>
          <a class="button button-act button-outlineDark" target="_blank" href="{{ asset('doc/servicios_internacionales.pdf') }}"><span class="icon-document"></span> Descargar PDF Completo</a>
        </div>
      </div>
    </section>
    <!-- Subservices single -->

    <!-- Inicio CTA Experiencia -->
    <section class="experience-wrapper container-fluid background back-callb-contacto">
      <div class="experience container">
        <div class="row text-center pd-tb-4 px-md-5">
          <div class="col-lg col-xl-9 mx-auto">
            <h6 class="color-white subtitle">Contacto</h6>
            <h1 class="mb-4 pb-1 pb-md-3 w-700 color-white">Una conversación, <br>El primer paso para lograr sus objetivos</h1>
            <a href="{{url('/contacto')}}" class="button button-normal">Contáctanos</a>
          </div>
        </div>
      </div>
    </section>
    <!-- Fin CTA Experiencia -->
@endsection
