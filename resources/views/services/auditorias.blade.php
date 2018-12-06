@extends('layouts.web')

@section('title')
  <title>Servicios de Auditoría | Auditcon - Rioseco Auditores</title>
  <meta name="description" content="Auditorías tributarias y financieras de manera integral, balance tributario, impuestos, estados financieros, activos fijos, estados de resultado, a cuentas específicas anuales, entre otras.">
@endsection
@section('content')
  <!-- Inicio Present -->
    <section class="present-wrapper container-fluid background back-s-auditorias">
      <div class="present-service container">
        <div class="row pt-5 pb-5 pb-md-4">
          <div class="present-headline col-12">
            <h1 data-icon="&#xe904;" class="color-white">Auditorías</h1>
            <h3 class="color-white">Possimus magnam error vitae blanditiis dignissimos, accusantium nobis quis commodi labore incidunt!</h3>
          </div>
        </div>
      </div>
    </section>
    <!-- Fin Present -->

    <!-- Subservices single -->
    <section class="subservices-wrapper container-fluid background-white">
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
