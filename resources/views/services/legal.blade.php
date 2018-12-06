@extends('layouts.web')

@section('title')
  <title>Asesoría Legal | Auditcon - Rioseco Auditores</title>
  <meta name="description" content="Contamos con un equipo de abogados asociados que otorgan asesoramiento de defensas ante el tribunal tributario y aduanero, confección de escrituras y contratos jurídicos, asesorías para construcción de empresas, creación, transformación, fusión y absorción de sociedades, entre otros.">
@endsection
@section('content')
  <!-- Inicio Present -->
    <section class="present-wrapper container-fluid background back-s-tributaria">
      <div class="present-service container">
        <div class="row pt-5 pb-5 pb-md-4">
          <div class="present-headline col-12">
            <h1 data-icon="&#xe918;" class="color-white">Asesoría Legal</h1>
          </div>
        </div>
      </div>
    </section>
    <!-- Fin Present -->

    <!-- Subservices single -->
    <section class="subservices-wrapper container-fluid background-white">
      <div class="container subservices">
        <!-- Legal -->
        <div class="row subservices-item-wrapper pd-tb-2">
          <h4 class="space">
            <!-- Justo y Necesario -->
          </h4>
          <div class="subservices-item">
            <div class="item-header">
              <h3 class="color-royalBlue w-400" data-icon="&#xf0da;">Defensas tribunal tributario y aduanero</h3>
            </div>
          </div>
          <div class="subservices-item">
            <div class="item-header">
              <h3 class="color-royalBlue w-400" data-icon="&#xf0da;">Asesorías en la constitución de empresas jurídicas (SPA, LTDA, S.A., EIRC)</h3>
            </div>
          </div>
          <div class="subservices-item">
            <div class="item-header">
              <h3 class="color-royalBlue w-400" data-icon="&#xf0da;">Confección de escrituras y contratos jurídicos</h3>
            </div>
          </div>
          <div class="subservices-item">
            <div class="item-header">
              <h3 class="color-royalBlue w-400" data-icon="&#xf0da;">Asesoría en enajenación de devueltos sociales y acciones</h3>
            </div>
          </div>
          <div class="subservices-item">
            <div class="item-header">
              <h3 class="color-royalBlue w-400" data-icon="&#xf0da;">Creación, transformación, fusion y absorción de sociedades</h3>
            </div>
          </div>
          <div class="subservices-item">
            <div class="item-header">
              <h3 class="color-royalBlue w-400" data-icon="&#xf0da;">Estructuras patrimoniales, efecto jurídico - tributario</h3>
            </div>
          </div>
          <div class="subservices-item">
            <div class="item-header">
              <h3 class="color-royalBlue w-400" data-icon="&#xf0da;">Creación de empresas en un día</h3>
            </div>
          </div>
          <div class="subservices-item">
            <div class="item-header">
              <h3 class="color-royalBlue w-400" data-icon="&#xf0da;">Representaciones legales ante el SII y otros servicios públicos</h3>
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
