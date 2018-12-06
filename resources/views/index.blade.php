@extends('layouts.web')

@section('title')
  <title>Auditcon - Rioseco Auditores - Más de 30 años de experiencia en Asesorías y Auditorías</title>
  <meta name="description" content="Más de 30 años de experiencia en servicios contables, tributarios, legales, laborales y de negocios que han hecho crecer a cientos de empresas.">
@endsection
@section('content')
  <!-- Inicio Present -->
    <div class="slider background-royalBlue">
      <!-- Inicio Tercer Slide -->
      <div class="slide slider-color">
        <div class="slidecontent present-wrapper container-fluid background back-slide3">
          <div class="present container">
            <div class="row pd-tb-1">
              <div class="present-headline col-sm-12">
                <h6 class="color-goldenSand subtitle">Confianza y Seriedad</h6>
                <h1 class="color-white w-400 animated">Más de 30 años trabajando para hacer crecer a las empresas</h1>
                <a href="{{url('/nosotros')}}" class="button button-normal">Conozca más</a>
              </div>
              <div class="present-list col-sm-12 col-md-12 pt-5 pt-md-0" id="slideposition">
                <ul>
                  <li class="present-list-item background-transparent  animated indicator" data-index="2">
                    <a class="h-opacity" href="#">Tecnología e Innovación al servicio de su Negocio</a>
                  </li>
                  <li class="present-list-item background-transparent  animated indicator" data-index="1">
                    <a class="h-opacity" href="#">Desafio Completado: Líderes en Operación Renta este 2018</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Fin Tercer Slide -->
      <!-- Inicio Primer Slide -->
      <div class="slide slider-color">
        <div class="slidecontent present-wrapper container-fluid background back-slide1">
          <div class="present container">
            <div class="row pd-tb-1">
              <div class="present-headline col-sm-12">
                <h6 class="color-goldenSand subtitle">Consultoría y Asesoría</h6>
                <h1 class="color-white w-400 animated">Desafio Completado: Líderes en Operación Renta este 2018</h1>
                <a href="{{url('/servicios/tributaria')}}" class="button button-normal">Conozca más</a>
              </div>
              <div class="present-list col-sm-12 col-md-12 pt-5 pt-md-0" id="slideposition">
                <ul>
                  <li class="present-list-item background-transparent animated indicator" data-index="0">
                    <a class="h-opacity" href="#">Más de 30 años trabajando para hacer crecer a las empresas</a>
                  </li>
                  <li class="present-list-item background-transparent animated indicator" data-index="2">
                    <a class="h-opacity" href="#">Tecnología e Innovación al servicio de su Negocio</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Fin Primer Slide -->
      <!-- Inicio Segundo Slide -->
      <div class="slide slider-color">
        <div class="slidecontent present-wrapper container-fluid background back-slide2">
          <div class="present container">
            <div class="row pd-tb-1">
              <div class="present-headline col-sm-12">
                <h6 class="color-goldenSand subtitle">Tecnología y Negocios</h6>
                <h1 class="color-white w-400 animated">Tecnología e Innovación <br>al servicio de su Negocio</h1>
                <a href="{{url('/servicios/tecnologia')}}" class="button button-normal">Conozca más</a>
              </div>
              <div class="present-list col-sm-12 col-md-12 pt-5 pt-md-0" id="slideposition">
                <ul>
                  <li class="present-list-item background-transparent animated indicator" data-index="1">
                    <a class="h-opacity" href="#">Desafio Completado: Líderes en Operación Renta este 2018</a>
                  </li>
                  <li class="present-list-item background-transparent animated indicator" data-index="0">
                    <a class="h-opacity" href="#">Más de 30 años trabajando para hacer crecer a las empresas</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Fin Segundo Slide -->
      </div>
    </div>
    <!-- Fin Present -->

    <!-- Indicadores -->
    <section class="indicadores-wrapper background-royalBlueDark color-white">
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

    <!-- Inicio CTA Experiencia -->
    <section class="experience-wrapper container-fluid background back-cta-1">
      <div class="experience container">
        <div class="row text-center pd-tb-4 px-md-5">
          <div class="col-lg col-xl-9 mx-auto">
            <h6 class="color-bunker subtitle">Compromiso y Profesionalismo</h6>
            <h1 class="mb-4 pb-1 pb-md-3 w-700 color-royalBlue">Lo apoyamos para que se enfoque en <br>hacer lo que le gusta</h1>
            <a href="{{url('/servicios')}}" class="button button-normal">Conozca más</a>
          </div>
        </div>
      </div>
    </section>
    <!-- Fin CTA Experiencia -->

    <!-- Inicio Display Servicios -->
    <section class="services-display-wrapper container-fluid background-bunker color-white">
      <div class="services-display container">
        <div class="row pd-tb-2">
          <div class="col-sm-12 pb-3 mb-0 pb-md-4 pt-lg-2 text-center">
            <h6 class="color-goldenSand subtitle">Servicios</h6>
            <h1 class="w-700"><span class="color-goldenSand">Soluciones Multidisciplinarias</span><br>para cada necesidad</h1>
          </div>

          <div class="services-display-item-wrapper row">

            <!-- Asesoría y Gestión Contable y Financiera -->
            <div class="services-display-item col-sm-6 col-lg-6 col-xl-4 pb-3 mt-md-2 mt-lg-3">
              <div class="services-display-title">
                <h3 data-icon="&#xe903;">Asesoría Contable</h3>
              </div>
              <div class="services-display-description">
                <p>Recopilamos y verificamos la información contable, mensualmente, en base a objetivos fijados en conjunto con nuestros clientes.</p>
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
                <p><p>Contamos con un equipo de abogados asociados especialistas que otorgan asesoramiento efectivo para las decisiones legales de negocios.</p></p>
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
    <section class="partners-wrapper container-fluid background-aliceBlue">
      <div class="partners container">
        <div class="row text-center pd-tb-2 mb-4 mb-lg-5">
          <div class="partners-header col-sm-12">
            <h6 class="color-bunker subtitle">Clientes</h6>
            <h1 class="w-700 color-royalBlue mb-0">Trabajando con grandes empresas nacionales e internacionales</h1>
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
@endsection
