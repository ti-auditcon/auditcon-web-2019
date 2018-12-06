@extends('layouts.web')

@section('title')
  <title>Tecnología y Negocios | Auditcon - Rioseco Auditores</title>
  <meta name="description" content="Implementamos plataformas digitales para potenciar y agregar valor rentable al modelo de negocio de su empresa. Ofrecemos inteligencia de negocios, estudios de mercado, evaluación de proyectos, iOT Industrial (IiOT), integración de sistemas, marketing digital, imágen corporativa, sitios web, plataformas corporativas y tiendas virtuales.">
@endsection
@section('content')
  <!-- Inicio Present -->
    <section class="present-wrapper container-fluid background back-s-tecnologia">
      <div class="present-service container">
        <div class="row pt-5 pb-5 pb-md-4">
          <div class="present-headline col-12">
            <h1 data-icon="&#xe90a;" class="color-white">Tecnología y <br>Negocios</h1>
            <h3 class="color-white">Possimus magnam error vitae blanditiis dignissimos, accusantium nobis quis commodi labore incidunt!</h3>
          </div>
        </div>
      </div>
    </section>
    <!-- Fin Present -->

    <!-- Subservices single -->
    <section class="subservices-wrapper container-fluid background-white">
      <div class="container subservices">
        <!-- Negocios -->
        <div class="row subservices-item-wrapper pd-tb-2">
          <div class="subservices-title">
            <h4 class="subtitle-small">Negocios</h4>
          </div>
          <div class="subservices-item">
            <div class="item-header">
              <h3 class="color-royalBlue w-400" data-icon="&#xf0da;">Inteligencia de Negocios</h3>
            </div>
            <div class="item-desc">
              <p>Transformamos datos de su empresa en información confiable, que le permita tomar acciones más acertadas sobre sus procesos de negocios, dando respaldo a su estrategia comercial.</p>
            </div>
          </div>
          <div class="subservices-item">
            <div class="item-header">
              <h3 class="color-royalBlue w-400" data-icon="&#xf0da;">Estudio de Mercado</h3>
            </div>
            <div class="item-desc">
              <p>Ayudamos a reducir la incertidumbre y el riesgo, estudiando el comportamiento de la industria y sociedad. Entregando información adecuada, para la toma de decisiones en inversiones y nuevos negocios.</p>
            </div>
          </div>
          <div class="subservices-item">
            <div class="item-header">
              <h3 class="color-royalBlue w-400" data-icon="&#xf0da;">Evaluación de Proyectos</h3>
            </div>
            <div class="item-desc">
              <p>Evaluamos riesgos y beneficios que determinan la factibilidad de la implementación de un negocio, mediante estudios pertinentes que abarcan todas las dimensiones necesarias. Como pueden ser legales, tributarias, ambientales, de mercado, financieras y económicas.</p>
            </div>
          </div>
        </div>
        <!-- Desarrollo -->
        <div class="row subservices-item-wrapper pd-tb-2">
          <div class="subservices-title">
            <h4 class="subtitle-small">Desarrollo</h4>
          </div>
          <div class="subservices-item">
            <div class="item-header">
              <h3 class="color-royalBlue w-400" data-icon="&#xf0da;">iOT Industrial (IIoT)</h3>
            </div>
            <div class="item-desc">
              <p>Conectamos máquinas a internet, automatizando sus procesos, consiguiendo una mayor eficacia operativa de producción, obteniendo datos en tiempo real de productividad y rendimiento.</p>
            </div>
          </div>
          <div class="subservices-item">
            <div class="item-header">
              <h3 class="color-royalBlue w-400" data-icon="&#xf0da;">Integración de Sistemas</h3>
            </div>
            <div class="item-desc">
              <p>Optimizamos los flujos de trabajo de su empresa, creando sistemas de gestión y administración personalizados para obtener datos y automatizar procesos que disminuyan costos, creen un entorno de trabajo más controlado y rentable.</p>
            </div>
          </div>
        </div>
        <!-- Estrategia Digital -->
        <div class="row subservices-item-wrapper pd-tb-2">
          <div class="subservices-title">
            <h4 class="subtitle-small">Estrategia Digital</h4>
          </div>
          <div class="subservices-item">
            <div class="item-header">
              <h3 class="color-royalBlue w-400" data-icon="&#xf0da;">Marketing Digital</h3>
            </div>
            <div class="item-desc">
              <p>Ayudamos a posicionar su empresa en el mercado, utilizando plataformas digitales que conectan con sus clientes/usuarios, de manera que pueda llegar a nuevos consumidores y fidelizarlos.</p>
            </div>
          </div>
          <div class="subservices-item">
            <div class="item-header">
              <h3 class="color-royalBlue w-400" data-icon="&#xf0da;">Imágen Corporativa</h3>
            </div>
            <div class="item-desc">
              <p>Creamos o reestructuramos la identidad corporativa de su empresa, para reflejar sus valores, diferenciarse, tomar ventaja competitiva y ser identificada fácilmente por sus clientes/usuarios.</p>
            </div>
          </div>
          <div class="subservices-item">
            <div class="item-header">
              <h3 class="color-royalBlue w-400" data-icon="&#xf0da;">Plataformas Corporativas y<br>Tiendas Virtuales</h3>
            </div>
            <div class="item-desc">
              <p>Diseñamos y desarrollamos aplicativos web. Tanto informativos como de e-commerce, de manera que su empresa tenga un lugar de atención 24/7, al que sus clientes/usuarios puedan acceder desde cualquier dispositivo.</p>
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
