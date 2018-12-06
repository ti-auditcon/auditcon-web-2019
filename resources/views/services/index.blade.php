@extends('layouts.web')

@section('title')
  <title>Servicios | Auditcon - Rioseco Auditores</title>
  <meta name="description" content="Servicios multidisciplinarios: asesoría contable, asesoría tributaria, asesoría legal, asesoría laboral, auditorías, asesoría en inversión extranjera y soluciones de tecnología para negocios y empresas.">
@endsection
@section('content')
  <!-- Inicio CTA Experiencia -->
    <section class="experience-wrapper container-fluid background back-servicios">
      <div class="experience container">
        <div class="row text-center pd-tb-4 px-md-5">
          <div class="col-lg col-xl-9 mx-auto">
            <h6 class="color-white subtitle">Servicios</h6>
            <h1 class="mb-4 pb-1 pb-md-3 w-700 color-white"><span class="color-goldenSand">Soluciones</span> que se adaptan<br> a sus <span class="color-goldenSand">Necesidades</span></h1>
          </div>
        </div>
      </div>
    </section>
    <!-- Fin CTA Experiencia -->

    <!-- Inicio Display Servicios -->
    <section class="services-display-wrapper container-fluid background-bunker color-white">
      <div class="services-display container">
        <div class="row pd-tb-2">

          <div class="services-display-item-wrapper row">

            <!-- Asesoría y Gestión Contable y Financiera -->
            <div class="services-display-item col-sm-6 col-lg-6 col-xl-4 pb-3 mt-md-2 mt-lg-3">
              <div class="services-display-title">
                <h3 data-icon="&#xe903;">Asesoría Contable</h3>
              </div>
              <div class="services-display-description">
                <p>Recopilamos y verificamos la información contable y financiera, mensualmente, en base a objetivos fijados en conjunto con nuestros clientes.</p>
              </div>
              <a href="{{url('/servicios/contable')}}" class="button button-outline">Conozca más</a>
            </div>

            <!-- Asesoría y Gestión Legal y Tributaria -->
            <div class="services-display-item col-sm-6 col-lg-6 col-xl-4 pb-3 mt-md-2 mt-lg-3">
              <div class="services-display-title">
                <h3 data-icon="&#xe90c;">Asesoría Tributaria</h3>
              </div>
              <div class="services-display-description">
                <p>Evaluamos el cumplimiento de las formalidades tributarias de su empresa, y la representamos y orientamos ante los organismos reguladores correspondientes.</p>
              </div>
              <a href="{{url('/servicios/tributaria')}}" class="button button-outline">Conozca más</a>
            </div>

            <!-- Asesoría y Gestión Legal y Tributaria -->
            <div class="services-display-item col-sm-6 col-lg-6 col-xl-4 pb-3 mt-md-2 mt-lg-3">
              <div class="services-display-title">
                <h3 data-icon="&#xe918;">Asesoría Legal</h3>
              </div>
              <div class="services-display-description">
                <p>Contamos con un equipo de abogados asociados especialistas que otorgan asesoramiento efectivo para las decisiones legales de negocios.</p>
              </div>
              <a href="{{url('/servicios/legal')}}" class="button button-outline">Conozca más</a>
            </div>

            <!-- Asesoría y Gestión Laboral -->
            <div class="services-display-item col-sm-6 col-lg-6 col-xl-4 pb-3 mt-md-2 mt-lg-3">
              <div class="services-display-title">
                <h3 data-icon="&#xe909;">Asesoría Laboral</h3>
              </div>
              <div class="services-display-description">
                <p>Ayudamos y orientamos a empresas y personas naturales, ante eventuales situaciones contractuales y tramitación del rubro laboral.</p>
              </div>
              <a href="{{url('/servicios/laboral')}}" class="button button-outline">Conozca más</a>
            </div>

            <!-- Auditorías Contables y Financieras -->
            <div class="services-display-item col-sm-6 col-lg-6 col-xl-4 pb-3 mt-md-2 mt-lg-3">
              <div class="services-display-title">
                <h3 data-icon="&#xe904;">Auditorías</h3>
              </div>
              <div class="services-display-description">
                <p>Realizamos acciones de soporte contable y tributario, para la totalidad de acciones entre el contribuyente y el Servicio de Impuestos Internos.</p>
              </div>
              <a href="{{url('/servicios/auditorias')}}" class="button button-outline">Conozca más</a>
            </div>

            <!-- Servicios Internacionales -->
            <div class="services-display-item col-sm-6 col-lg-6 col-xl-4 pb-3 mt-md-2 mt-lg-3">
              <div class="services-display-title">
                <h3 data-icon="&#xe907;">Inversión Extranjera</h3>
              </div>
              <div class="services-display-description">
                <p>Asesoramos a inversores extranjeros para el ingreso de capital y desarrollo de negocios en rubros de la industria nacional, como energía, tecnología y agricultura, entre otros.</p>
              </div>
              <a href="{{url('/servicios/internacional')}}" class="button button-outline">Conozca más</a>
            </div>

            <!-- Tecnología y Negocios -->
            <div class="services-display-item col-sm-6 col-lg-6 col-xl-4 mt-md-2 mt-lg-3">
              <div class="services-display-title">
                <h3 data-icon="&#xe90a;">Tecnología y <br>Negocios</h3>
              </div>
              <div class="services-display-description">
                <p>Implementamos plataformas digitales para potenciar y agregar valor rentable al modelo de negocio de una empresa, tomando decisiones con enfoque comercial.</p>
              </div>
              <a href="{{url('/servicios/tecnologia')}}" class="button button-outline">Conozca más</a>
            </div>

          </div>

        </div>
      </div>
    </section>
    <!-- Fin Display Servicio -->

    <!-- Inicio CTA Experiencia -->
    <section class="experience-wrapper container-fluid background back-callb-contacto">
      <div class="experience container">
        <div class="row text-center pd-tb-4 px-md-5">
          <div class="col-lg col-xl-9 mx-auto">
            <h6 class="color-white subtitle">Contacto</h6>
            <h1 class="mb-4 pb-1 pb-md-3 w-700 color-white">Una conversación, <br>El primer paso para lograr sus objetivos</h1>
            <a href="{{url('/contacto')}}" class="button button-normal">Contáctenos</a>
          </div>
        </div>
      </div>
    </section>
    <!-- Fin CTA Experiencia -->
@endsection
