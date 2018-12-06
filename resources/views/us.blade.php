@extends('layouts.web')

@section('title')
  <title>Nosotros | Auditcon - Rioseco Auditores</title>
  <meta name="description" content="Experiencia y Confiabilidad, los valores que nos han llevado lejos junto a nuestros clientes. Estamos presentes en decenas de industrias ofreciendo soluciones transversales desde hace más de 30 años">
@endsection
@section('content')
  <!-- Inicio CTA Experiencia -->
    <section class="experience-wrapper container-fluid background back-nosotros">
      <div class="experience container">
        <div class="row text-center pd-tb-4 px-md-5">
          <div class="col-lg col-xl-9 mx-auto">
            <h6 class="color-white subtitle">Nosotros</h6>
            <h1 class="mb-4 pb-1 pb-md-3 w-700 color-white"><span class="color-goldenSand">Experiencia y Confiabilidad</span> <br>Los valores que nos han llevado lejos junto a nuestros clientes</h1>
            <!-- <a href="nosotros.html" class="button button-normal">Conozca más</a> -->
          </div>
        </div>
      </div>
    </section>
    <!-- Fin CTA Experiencia -->

    <!-- Campos Display -->
    <section class="campos-wrapper container-fluid background-bunker color-white py-md-3">
      <div class="campos">
        <div class="pd-tb-2">
          <div class="campo-header">
            <h6 class="color-goldenSand text-center subtitle">Soluciones Transversales</h6>
            <h1 class="text-center w-700">Colaborando en diversas Industrias</h1>
          </div>
          <div class="campo-items">
            <div class="campo-item">
              <span class="icon-campo icon-feather color-goldenSand"></span><h5>Agricultura</h5>
            </div>
            <div class="campo-item">
              <span class="icon-campo icon-zap color-goldenSand"></span><h5>Energía</h5>
            </div>
            <div class="campo-item">
              <span class="icon-campo icon-home color-goldenSand"></span><h5>Construcción</h5>
            </div>
            <div class="campo-item">
              <span class="icon-campo icon-gastronomia color-goldenSand"></span><h5>Gastronomía</h5>
            </div>
            <div class="campo-item">
              <span class="icon-campo icon-briefcase color-goldenSand"></span><h5>Turismo</h5>
            </div>
            <div class="campo-item">
              <span class="icon-campo icon-archive color-goldenSand"></span><h5>Exportación</h5>
            </div>
            <div class="campo-item">
              <span class="icon-campo icon-truck color-goldenSand"></span><h5>Transporte</h5>
            </div>
            <div class="campo-item">
              <span class="icon-campo icon-viticultura color-goldenSand"></span><h5>Viticultura</h5>
            </div>
            <div class="campo-item">
              <span class="icon-campo icon-shopping color-goldenSand"></span><h5>Comercio</h5>
            </div>
            <div class="campo-item">
              <span class="icon-campo icon-inversiones color-goldenSand"></span><h5>Inversiones</h5>
            </div>
            <div class="campo-item">
              <span class="icon-campo icon-user-check color-goldenSand"></span><h5>Servicios</h5>
            </div>
            <div class="campo-item">
              <span class="icon-campo icon-salud color-goldenSand"></span><h5>Salud</h5>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Fin Campos Display -->

    <!-- Recomendaciones -->
    <section class="recomendaciones-wrapper container-fluid py-md-3">
      <div class="recomendaciones container">
        <div class="row pd-tb-2 px-md-3 pb-md-5 px-lg-5">
          <div class="recomendacion col-12 col-md-6 mb-4 mb-md-0 px-md-4 px-lg-5">
            <p>Creemos que Auditcon, encaja perfectamente en lo que buscábamos como empresa asesora, ya que cubren nuestras necesidades de excelente manera, y con una atención personalizada de sus profesionales, siempre preocupados por hacer bien su trabajo.</p>
            <div class="recomendacion-info container">
              <div class="row">
                {{-- <div class="col-3 p-2"><img src="img/partners/4.png"></div> --}}
                <div class="col-9" style="padding-left: 0;">
                  <p><b>Leonidas Gallegos</b><br>Agropecuaria Industrial<br>Gerente</p>
                </div>
              </div>
            </div>
          </div>
          <div class="recomendacion col-12 col-md-6 px-md-4 px-lg-5">
            <p>El trabajo de Auditcon siempre está a la altura de lo que como empresa requerimos, puesto que poseen un grupo de profesionales capacitados, para cubrir nuestras necesidades, sacar cualquier situación adelante y disminuir eventuales riesgos. </p>
            <div class="recomendacion-info container">
              <div class="row">
                {{-- <div class="col-3 p-2"><img src="img/partners/1.png"></div> --}}
                <div class="col-9" style="padding-left: 0;">
                  <p><b>Cristian Arriagada</b><br>Exportadora Radisur<br>Gerente de Operaciones</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Fin Recomendaciones -->

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
