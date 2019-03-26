@extends('layouts.web')

@section('title')
  <title>Auditcon - Rioseco Auditores y Consultores y Consultores - Más de 30 años de experiencia en Asesorías y Auditorías</title>
  <meta name="description" content="Más de 30 años de experiencia en servicios contables, tributarios, legales, laborales y de negocios que han hecho crecer a cientos de empresas.">
@endsection
@section('content')
  <!-- Inicio Present -->

    <div class="slider hero-slider">
      <div class="item item-video">
        <video src="{{ asset('videos/space.mp4') }}" autoplay loop></video>
        <div class="item-data">
          <h6 class="color-goldenSand subtitle">Subtitulo</h6>
          <h1>Más de 30 años trabajando para hacer crecer a las empresas</h1>
        </div>
      </div>
      <div class="item" style="background-image: url('img/backs/back_1.jpg'); background-position: center; background-size: cover;">
        <div class="item-data">
          <h6 class="color-goldenSand subtitle">Subtitulo</h6>
          <h1>Desafio Completado: Líderes en<br>Operación Renta este 2018</h1>
        </div>
      </div>
      <div class="item" style="background-image: url('img/backs/back_2.jpg'); background-position: center; background-size: cover;">
        <div class="item-data">
          <h6 class="color-goldenSand subtitle">Subtitulo</h6>
          <h1>Tecnología e Innovación <br>al servicio de su Negocio</h1>
        </div>
      </div>
      <div class="item" style="background-image: url('img/backs/back_3.jpg'); background-position: center; background-size: cover;">
        <div class="item-data">
          <h6 class="color-goldenSand subtitle">Subtitulo</h6>
          <h1>Otra frase</h1>
        </div>
      </div>
    </div>

    {{-- <div class="hero-container container-fluid">
      <video src="{{ asset('videos/space.mp4') }}" autoplay loop></video>
      <div class="hero container">
        <div class="row">
          <h1>Tecnología e Innovación <br>al servicio de su Negocio</h1>
        </div>
      </div>
      <div class="mouse">
        <img src="{{ asset('img/mouse.png') }}">
      </div>
    </div> --}}

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
                  {{-- <p>Recopilamos y verificamos la información contable, mensualmente, en base a objetivos fijados en conjunto con nuestros clientes.</p> --}}
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
                  {{-- <p>Evaluamos el cumplimiento de las formalidades tributarias de su empresa, y la representamos y orientamos ante los organismos reguladores correspondientes.</p> --}}
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
                  {{-- <p>Contamos con un equipo de abogados asociados especialistas que otorgan asesoramiento efectivo para las decisiones legales de negocios.</p> --}}
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
                  {{-- <p>Ayudamos y orientamos a empresas y personas naturales, ante eventuales situaciones contractuales y tramitación del rubro laboral.</p> --}}
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
                  {{-- <p>Realizamos acciones de soporte contable y tributario, para la totalidad de acciones entre el contribuyente y el Servicio de Impuestos Internos.</p> --}}
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
                  {{-- <p>Asesoramos a inversores extranjeros para el ingreso de capital y desarrollo de negocios en rubros de la industria nacional, como energía, tecnología y agricultura, entre otros.</p> --}}
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
                  {{-- <p>Implementamos plataformas digitales para potenciar y agregar valor rentable al modelo de negocio de una empresa, tomando decisiones con enfoque comercial.</p> --}}
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

    <!-- Inicio Blog Display -->
    <!-- <section class="blog-display-wrapper container-fluid background-white py-md-3">
      <div class="blog-display container">
        <div class="row pd-tb-2">
          <div class="col-sm-12 pb-md-3">
            <h6 class="color-goldenSand subtitle">Blog</h6>
            <h1 class="w-700">Últimos Artículos</h1>
          </div>
          <div class="blog-display-item col-sm-12 col-md-4 pt-2 pb-3 py-md-0 pb-4 pr-lg-3">
            <a href="#">
              <div class="blog-display-img h-opacity" style="background-image: url('/img/dummy/1.jpg')"></div>
            </a>
            <a href=""><h4 class="h-opacity w-400">Vivamus faucibus dui ullamcorper felis euismod, eu tincidunt mi mattis. </h4></a>
            <a href="" class="button button-normal">Leer</a>
          </div>
          <div class="blog-display-item col-sm-12 col-md-4 pt-4 pt-md-0 pb-4 px-lg-3">
            <a href="#">
              <div class="blog-display-img h-opacity" style="background-image: url('/img/dummy/2.jpg')"></div>
            </a>
            <a href=""><h4 class="h-opacity w-400">Vivamus faucibus dui ullamcorper felis euismod, eu tincidunt mi mattis. </h4></a>
            <a href="" class="button button-normal">Leer</a>
          </div>
          <div class="blog-display-item col-sm-12 col-md-4 pt-4 pt-md-0 pl-lg-3">
            <a href="#">
              <div class="blog-display-img h-opacity" style="background-image: url('/img/dummy/3.jpg')"></div>
            </a>
            <a href=""><h4 class="h-opacity w-400">Vivamus faucibus dui ullamcorper felis euismod, eu tincidunt mi mattis. </h4></a>
            <a href="" class="button button-normal">Leer</a>
          </div>
        </div>
      </div>
    </section> -->
    <!-- Fin Blog Display -->

    <!-- Inicio Partners -->
    <section class="partners-wrapper container-fluid background-antiFlashWhite">
      <div class="partners container">
        <div class="row text-center pd-tb-2 mb-4 mb-lg-5">
          <div class="partners-header col-sm-12">
            <h6 class="color-bunker subtitle">Clientes</h6>
            <h1 class="w-900 color-royalBlue mb-0">Trabajando con grandes empresas nacionales e internacionales</h1>
          </div>
          <div class="container partners-items">
            <div class="row px-md-4 px-lg-5 px-xl-0">
              <div class="col-6 col-sm-6 col-md-3 align-self-center">
                <img class="partner-img" src="img/partners/12.png">
              </div>
              <div class="col-6 col-sm-6 col-md-3 align-self-center">
                <img class="partner-img" src="img/partners/22.png">
              </div>
              <div class="col-6 col-sm-6 col-md-3 align-self-center">
                <img class="partner-img" src="img/partners/33.png">
              </div>
              <div class="col-6 col-sm-6 col-md-3 align-self-center">
                <img class="partner-img" src="img/partners/44.png">
              </div>
              <div class="col-6 col-sm-6 col-md-3 align-self-center">
                <img class="partner-img" src="img/partners/55.png">
              </div>
              <div class="col-6 col-sm-6 col-md-3 align-self-center">
                <img class="partner-img" src="img/partners/66.png">
              </div>
              <div class="col-6 col-sm-6 col-md-3 align-self-center">
                <img class="partner-img" src="img/partners/77.png">
              </div>
              <div class="col-6 col-sm-6 col-md-3 align-self-center">
                <img class="partner-img" src="img/partners/88.png">
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Fin Partners -->

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

    <!-- Indicadores -->
    <section class="indicadores-wrapper background-bunker color-white">
          <div class="indicadores">
            <span class="indicador">
              <p class="indicador-name">Dolar</p>
              <h5 class="indicador-ind min-dolar"></h5>
            </span>
            <span class="indicador">
              <p class="indicador-name">Euro</p>
              <h5 class="indicador-ind min-euro"></h5>
            </span>
            <span class="indicador">
              <p class="indicador-name">Bitcoin</p>
              <h5 class="indicador-ind min-bitcoin"></h5>
            </span>
            <span class="indicador">
              <p class="indicador-name">UF</p>
              <h5 class="indicador-ind min-uf"></h5>
            </span>
            <span class="indicador">
              <p class="indicador-name">UTM</p>
              <h5 class="indicador-ind min-utm"></h5>
            </span>
            <span class="indicador">
              <p class="indicador-name">IPC</p>
              <h5 class="indicador-ind min-ipc"></h5>
            </span>
            <span class="indicador">
              <p class="indicador-name">IVP</p>
              <h5 class="indicador-ind min-ivp"></h5>
            </span>
            <span class="indicador">
              <p class="indicador-name">IMACEC</p>
              <h5 class="indicador-ind min-imacec"></h5>
            </span>
            <span class="indicador">
              <p class="indicador-name">Libra Cobre</p>
              <h5 class="indicador-ind min-lc"></h5>
            </span>
          </div>
    </section>
    <!-- Fin Indicadores -->
@endsection
