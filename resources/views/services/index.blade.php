@extends('layouts.web')

@section('title')
  <title>Servicios | Auditcon - Rioseco Auditores y Consultores</title>
  <meta name="description" content="Servicios multidisciplinarios: asesoría contable, asesoría tributaria, asesoría legal, asesoría laboral, auditorías, asesoría en inversión extranjera y soluciones de tecnología para negocios y empresas.">
@endsection
@section('content')
  <!-- Inicio CTA Experiencia -->
    <section class="experience-wrapper container-fluid background back-servicios">
      <div class="experience container">
        <div class="row text-center pd-tb-3 px-md-5">
          <div class="col-lg col-xl-9 mx-auto">
            <h6 class="color-white subtitle">Servicios</h6>
            <h1 class="mb-4 pb-1 pb-md-3 w-900 color-white"><span class="color-goldenSand">Soluciones</span> que se adaptan<br> a sus <span class="color-goldenSand">Necesidades</span></h1>
          </div>
        </div>
      </div>
    </section>
    <!-- Fin CTA Experiencia -->

    <!-- Inicio Display Servicios -->
    <section class="services-display-wrapper container-fluid background-royalBlueUltraDark color-white">
      <div class="services-display container">
        <div class="row pd-tb-2">
          <div class="col-sm-12 pb-3 mb-0 pb-md-3 pt-lg-2 text-center">
            <h6 class="color-goldenSand subtitle">Servicios</h6>
            <h1 class="w-900"><span class="color-goldenSand">Soluciones Multidisciplinarias</span><br>para cada necesidad</h1>
          </div>

          <div class="services-display-item-wrapper row">

            <!-- Asesoría y Gestión Contable y Financiera -->
            <div class="services-display-item pb-3 mt-md-2 mt-lg-3">
              {{-- <div style="width: 100%; height: 200px; background: red;"></div> --}}
              <a href="{{url('/servicios/contable')}}">
                <div class="services-display-title">
                  <img class="img-service" src="{{ asset('img/icons-services/contable.png') }}">
                  <h3>Asesoría<br> Contable</h3>
                  <div class="know-more">
                    <img src="{{ asset('img/arrow-button.png') }}"><p>Saber más</p>
                  </div>
                </div>
              </a>
              {{-- <div class="services-display-description">
                <p>Recopilamos y verificamos la información contable, mensualmente, en base a objetivos fijados en conjunto con nuestros clientes.</p>
              </div>
              <a href="{{url('/servicios/contable')}}" class="button button-outline">Conozca más</a> --}}
            </div>

            <!-- Asesoría y Gestión Legal y Tributaria -->
            <div class="services-display-item pb-3 mt-md-2 mt-lg-3">
              {{-- <div style="width: 100%; height: 200px; background: red;"></div> --}}
              <a href="{{url('/servicios/tributaria')}}">
                <div class="services-display-title">
                  <img class="img-service" src="{{ asset('img/icons-services/tributaria.png') }}">
                  <h3>Asesoría<br> Tributaria</h3>
                  <div class="know-more">
                    <img src="{{ asset('img/arrow-button.png') }}"><p>Saber más</p>
                  </div>
                </div>
              </a>
              {{-- <div class="services-display-description">
                <p>Evaluamos el cumplimiento de las formalidades tributarias de su empresa, y la representamos y orientamos ante los organismos reguladores correspondientes.</p>
              </div>
              <a href="{{url('/servicios/tributaria')}}" class="button button-outline">Conozca más</a> --}}
            </div>

            <!-- Asesoría y Gestión Legal y Tributaria -->
            <div class="services-display-item pb-3 mt-md-2 mt-lg-3">
              {{-- <div style="width: 100%; height: 200px; background: red;"></div> --}}
              <a href="{{url('/servicios/legal')}}">
                <div class="services-display-title">
                  <img class="img-service" src="{{ asset('img/icons-services/legal.png') }}">
                  <h3>Asesoría<br> Legal</h3>
                  <div class="know-more">
                    <img src="{{ asset('img/arrow-button.png') }}"><p>Saber más</p>
                  </div>
                </div>
              </a>
              {{-- <div class="services-display-description">
                <p><p>Contamos con un equipo de abogados asociados especialistas que otorgan asesoramiento efectivo para las decisiones legales de negocios.</p></p>
              </div>
              <a href="{{url('/servicios/legal')}}" class="button button-outline">Conozca más</a> --}}
            </div>

            <!-- Asesoría y Gestión Laboral -->
            <div class="services-display-item pb-3 mt-md-2 mt-lg-3">
              {{-- <div style="width: 100%; height: 200px; background: red;"></div> --}}
              <a href="{{url('/servicios/laboral')}}">
                <div class="services-display-title">
                  <img class="img-service" src="{{ asset('img/icons-services/laboral.png') }}">
                  <h3>Asesoría<br> Laboral</h3>
                  <div class="know-more">
                    <img src="{{ asset('img/arrow-button.png') }}"><p>Saber más</p>
                  </div>
                </div>
              </a>
              {{-- <div class="services-display-description">
                <p>Ayudamos y orientamos a empresas y personas naturales, ante eventuales situaciones contractuales y tramitación del rubro laboral.</p>
              </div>
              <a href="{{url('/servicios/laboral')}}" class="button button-outline">Conozca más</a> --}}
            </div>

            <!-- Auditorías Contables y Financieras -->
            <div class="services-display-item pb-3 mt-md-2 mt-lg-3">
              {{-- <div style="width: 100%; height: 200px; background: red;"></div> --}}
              <a href="{{url('/servicios/auditorias')}}">
                <div class="services-display-title">
                  <img class="img-service" src="{{ asset('img/icons-services/auditorias.png') }}">
                  <h3>Servicios de<br> Auditorías</h3>
                  <div class="know-more">
                    <img src="{{ asset('img/arrow-button.png') }}"><p>Saber más</p>
                  </div>
                </div>
              </a>
              {{-- <div class="services-display-description">
                <p>Realizamos acciones de soporte contable y tributario, para la totalidad de acciones entre el contribuyente y el Servicio de Impuestos Internos.</p>
              </div>
              <a href="{{url('/servicios/auditorias')}}" class="button button-outline">Conozca más</a> --}}
            </div>

            <!-- Servicios Internacionales -->
            <div class="services-display-item pb-3 mt-md-2 mt-lg-3">
              {{-- <div style="width: 100%; height: 200px; background: red;"></div> --}}
              <a href="{{url('/servicios/internacional')}}">
                <div class="services-display-title">
                  <img class="img-service" src="{{ asset('img/icons-services/inversion.png') }}">
                  <h3>Inversión<br> Extranjera</h3>
                  <div class="know-more">
                    <img src="{{ asset('img/arrow-button.png') }}"><p>Saber más</p>
                  </div>
                </div>
              </a>
              {{-- <div class="services-display-description">
                <p>Asesoramos a inversores extranjeros para el ingreso de capital y desarrollo de negocios en rubros de la industria nacional, como energía, tecnología y agricultura, entre otros.</p>
              </div>
              <a href="{{url('/servicios/internacional')}}" class="button button-outline">Conozca más</a> --}}
            </div>

            <!-- Tecnología y Negocios -->
            <div class="services-display-item mt-md-2 mt-lg-3">
              {{-- <div style="width: 100%; height: 200px; background: red;"></div> --}}
              <a href="{{url('/servicios/tecnologia')}}">
                <div class="services-display-title">
                  <img class="img-service" src="{{ asset('img/icons-services/tecnologia.png') }}">
                  <h3>Tecnología y<br>Negocios</h3>
                  <div class="know-more">
                    <img src="{{ asset('img/arrow-button.png') }}"><p>Saber más</p>
                  </div>
                </div>
              </a>
              {{-- <div class="services-display-description">
                <p>Implementamos plataformas digitales para potenciar y agregar valor rentable al modelo de negocio de una empresa, tomando decisiones con enfoque comercial.</p>
              </div>
              <a href="{{url('/servicios/tecnologia')}}" class="button button-outline">Conozca más</a> --}}
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
            <h1 class="mb-4 p-0 pb-md-1 mb-0 w-900 color-white"><span class="color-goldenSand">Confianza y tranquilidad</span>, para que invierta el tiempo en su negocio</h1>
            <a href="{{url('/contacto')}}" class="button-arrow"><img src="{{ asset('img/arrow-button.png') }}"><p>Contáctenos</p></a>
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

@endsection
